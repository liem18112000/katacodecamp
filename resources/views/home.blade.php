@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container">
        <div class='row'>
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
                <img style='width:55%!important' src='{{asset('img/logo-white.png')}}'>
                <b><h3>By students and teachers for students and teachers</h3></b>
            </div>
        </div>

        <br/>

        <div class='row'>
            <div class="col-md-6">
                <h1>Start Coding!</h1>
                <pre style="display:none;">
let greeting = "Welcome to Kata Codecamp!";
if(newuser == true) {
    alert(greeting);
}
            </pre>
                <textarea name="static-code" class="static-code" rows="8" cols="80"></textarea>
                <img src="{{asset('img/arrow.png')}}" id="font-bluearr" alt="">
            </div>
            <div class="col-md-6">
                <h1>Type code to Editor</h1>
                <textarea name="name" class="codemirror" rows="8" cols="80"></textarea>
                <div class="progress">
                    <div class="progress-bar active progress-bar-striped progress-bar-danger" role="progressbar"
                        aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                        <span class="sr-only"></span>
                    </div>
                </div>
                <a href='{{route('frontend')}}' class="btn btn-primary btn-block">Submit</a>

            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    window.value = {
        "content":"<div id='popup-wrapper'><div id='popup'><h1>Welcome to Kata Codecamp!</h1><p>Create an account to save your progress or continue the lesson anonymously</p><a href='{{route('login')}}'><button class='btn btn-success'>Login/Register</button></a><a href='{{route('frontend')}}'> <button class='btn btn-default'>Continue </button></a></div></div>",
        "height":"20vh"
    }
</script>

<script type="text/javascript" src="{{asset('js/kata.js')}}"></script>
@endsection
