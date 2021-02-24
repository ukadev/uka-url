@extends('master')

@section('content')
    <h2 class="cover-heading">Convert your <span class="ugly">UGLY</span> url into our <span class="fancy">Fancy</span>
        one <i class="fa fa-smile-o big"></i></h2>
    <p class="lead">
    <form action="/" method="post" class="form-inline" id="generateURL">
        <div class="form-group convert">
            <input type="text" class="form-control" id="url" placeholder="Enter your URL" name="url"/>
            <i class="fa fa-paper-plane" id="submit"></i>
        </div>
    </form>
    </p>
    <div id="result">
        <div id="loading" class="hide"><i class="fa fa-cog fa-spin fa-5x"></i></div>
        <div id="error" class="hide"></div>
        <div id="success" class="hide">
            <span class="fancy">Here is your Epic Url!</span>
            <input type="text" id="inputResult" value="" class="form-control"/>
        </div>
        <div class="alert alert-success hide" role="alert">
            Copied to clipboard!
        </div>
    </div>
@stop
