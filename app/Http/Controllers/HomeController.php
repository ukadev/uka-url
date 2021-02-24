<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\Client\ConnectionException;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('home');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function generate(Request $request): JsonResponse
    {
        //clean url param
        $url = filter_var($request->input('url', null), FILTER_SANITIZE_URL);
        try {
            //check if url status
            Http::get($url);
        } catch (ConnectionException $e) {
            return response()->json([
                'result' => 'error',
                'message' => 'Please insert a valid URL'
            ]);
        }

        // if url is already in database get the code, otherwise, generate and save it
        if ($result = Url::whereUrl($url)->first()) {
            $code = $result->code;
        } else {
            $code = $this->genUniqueCode();
            // save it into the database
            Url::create(['code' => $code, 'url' => $url]);
        }

        $result = array(
            'result' => 'success',
            'url' => 'http://' . getenv('HTTP_HOST') . '/' . $code
        );

        return response()->json($result);
    }

    /**
     * @param int $length
     * @return string
     */
    private function genUniqueCode($length = 8): string
    {
        $random = Str::random($length);
        if (Url::find($random)) {
            $random = $this->genUniqueCode();
        }
        return $random;
    }

    public function go(Request $request)
    {
        if ($url = Url::whereCode($request->code)->first()) {
            $url->increment('counter');
            return redirect($url->url);
        } else {
            return redirect('/not-found');
        }
    }

    public function notFound()
    {
        return view('notFound');
    }
}
