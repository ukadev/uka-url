<?php

use Philo\Blade\Blade;

class HomeController extends Illuminate\Routing\Controller {

	private $blade;
	private $viewsDirectory = '../app/Views';
	private $cacheDirectory = '../app/Cache';

	public function __construct()
	{
		// Initiate Blade template system
		$this->blade = new Blade($this->viewsDirectory, $this->cacheDirectory);
	}

	/*
	|--------------------------------------------------------------------------
	| Home Index
	|--------------------------------------------------------------------------
	*/
	public function getIndex()
	{		
		return $this->blade->view()->make('home');
	}

	/*
	|--------------------------------------------------------------------------
	| Generate URL
	|--------------------------------------------------------------------------
	*/
	public function postIndex()
	{		
		// Sanitize URL
		$url = filter_var($_POST['url'], FILTER_SANITIZE_URL);
		// Check if the original url is online
		if($this->checkUrl($url) == false)
		{
			return json_encode(array('result' => 'error', 'message' => 'Please insert a valid URL'));
		}
		// Check if the original URL already exists in the database
		$exists = Url::whereOriginal(urlencode($url))->first();
		
		if(!is_null($exists))
		{
			$id = $exists['id'];
		} else {
			$id = $this->genUniqueCode();
			// save it into the database
			$save = new Url;
			$save->id = $id;
			$save->original = urlencode($url);
			$save->save();
		}

		$result = array(
			'result' => 'success',
			'url' => 'http://'.getenv('HTTP_HOST').'/'. $id
		);

		return json_encode($result);
	}

	/*
	|--------------------------------------------------------------------------
	| Check if the original URL exists
	|--------------------------------------------------------------------------
	*/
	private function checkUrl($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec($ch);
		$response_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		if(in_array($response_status, array(404, 0)))
		{
			return false;
		}
		return true;
	}

	/*
	|--------------------------------------------------------------------------
	| Generate the unique code
	|--------------------------------------------------------------------------
	*/
	public function genUniqueCode($length = 6)
	{
		$random = str_random($length);
		if(Url::find($random))
		{
			$random = $this->genUniqueCode();
		}
		return $random;
	}

	/*
	|--------------------------------------------------------------------------
	| Redirect to the original Url
	|--------------------------------------------------------------------------
	*/
	public function goToLink($id)
	{
		if(!is_null($url = Url::whereId($id)->first()))
		{
			Url::whereId($id)->increment('counter');
			$this->redirect(urldecode($url['original']['original']));
		}else{
			$this->redirect();
		}
	}

	/*
	|--------------------------------------------------------------------------
	| Helper function to redirect
	|--------------------------------------------------------------------------
	*/
	function redirect($url = '/notFound') 
	{
	    if(!headers_sent()) 
	    {
	        //If headers not sent yet... then do php redirect
	        header('Location: '.$url);
	        exit;
	    } else {
	        //If headers are sent... do javascript redirect... if javascript disabled, do html redirect.
	        echo '<script type="text/javascript">';
	        echo 'window.location.href="'.$url.'";';
	        echo '</script>';
	        echo '<noscript>';
	        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	        echo '</noscript>';
	        exit;
	    }
	}
}
