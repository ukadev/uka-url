@extends('master')

@section('content')
<div id="notFound">
	The url you are trying to access is not active yet.
</div>
<h2 class="cover-heading">Convert your <span class="ugly">UGLY</span> url to our <span class="fancy">Fancy</span> one <i class="fa fa-smile-o big"></i></h2>
<p class="lead">
	<form action="/" method="post" class="form-inline" id="generateURL">
		<div class="form-group convert">
			<input type="text" class="form-control" id="url" placeholder="Enter your URL" name="url">
			<i class="fa fa-paper-plane" id="submit"></i>
		</div>
	</form>
</p>
	<div id="result">
		<div id="loading" class="hide"><i class="fa fa-cog fa-spin fa-5x"></i></div>
		<div id="error" class="hide"></div>
		<div id="success" class="hide">
		Here is your Epic Url!
			<input type="text" id="inputResult" value="" class="form-control" />
		</div>
	</div>
@stop