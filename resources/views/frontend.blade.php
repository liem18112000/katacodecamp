@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="jumbotron html" style='min-height: 30vh!important;'>
    <div class="container">
        <h1 style='font-size: 3rem;'><b>Ready to learn HTML?</b></h1>
        <h5>Please input the code below to complete the kata!</h5>
    </div>
</div>
<br/>
<div class="container">
    <div class='row'>
        <div class="col-md-6">
            <pre style="display:none;">
jumbotron {
    padding: 80px 4%;
    background-image: url(images/ninja.jpeg);
    background-attachment: fixed;
    background-size: cover;
    color: white;
    min-height: 45vh;
}
                </pre>
            <textarea name="static-code" class="static-code" rows="8" cols="80"></textarea>
        </div>
        <div class="col-md-6">
            <textarea name="name" class="codemirror" rows="8" cols="80"></textarea>
            <div class="progress">
                <div class="progress-bar active progress-bar-striped progress-bar-danger" role="progressbar"
                    aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                    <span class="sr-only"></span>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    window.value = {
        "content":"<div id='popup-wrapper'><div id='popup'><h1>Congratulate to you</h1><p>Ready to encounter the next katas challenges</p><a href='{{route('frontend')}}'> <button class='btn btn-success'>Continue</button></a></div></div>",
        "height":"43vh"
    };
</script>
<script type="text/javascript" src="{{asset('js/kata.js')}}"></script>
@endsection
