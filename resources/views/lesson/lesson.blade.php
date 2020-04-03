@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link rel="stylesheet" href="{{asset('cm/lib/codemirror.css')}}">
<link rel="stylesheet" href="{{asset('cm/theme/twilight.css')}}">
<link rel="stylesheet" href="{{asset('cm/theme/cobalt.css')}}">
<link rel="stylesheet" href="{{asset('cm/addon/hint/show-hint.css')}}">
<script type="text/javascript" src="{{asset('cm/lib/codemirror.js')}}"></script>
<script type="text/javascript" src="{{asset('cm/mode/css/css.js')}}"></script>
<script type="text/javascript" src="{{asset('cm/addon/hint/css-hint.js')}}"></script>
<script type="text/javascript" src="{{asset('cm/addon/hint/html-hint.js')}}"></script>
<script type="text/javascript" src="{{asset('cm/addon/hint/show-hint.js')}}"></script>
@endsection

@section('content')
<div class='wrapper'>
    <div class='container'>
        <div class="row">
            <div class="col-md-4 card-wrapper">
                <div class="inner">
                    <div class="card-top">
                        <img src="{{asset('img/html.png')}}" alt="">
                    </div>
                    <div class="card-bottom" style='background:white'>
                        <h2>Learn HTML</h2>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button type="button" name="button" class="btn btn-primary btn-block">Start Learning</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card-wrapper">
                <div class="inner">
                    <div class="card-top">
                        <img src="{{asset('img/js.png')}}" alt="">
                    </div>
                    <div class="card-bottom" style='background:white'>
                        <h2>Learn JavaScript</h2>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button type="button" name="button" class="btn btn-primary btn-block">Start Learning</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card-wrapper">
                <div class="inner">
                    <div class="card-top" >
                        <img src="{{asset('img/css.png')}}" alt="">
                    </div>
                    <div class="card-bottom" style='background:white'>
                        <h2>Learn CSS</h2>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button type="button" name="button" class="btn btn-primary btn-block">Start Learning</button>
                    </div>
                </div>
            </div>
        </div>

        <br/>

        <div class='row'>
            <div class='col-lg-6 offset-lg-3 col-md-6 offset-md-3'>
                <a name="" id="" class="btn btn-primary btn-block" href="{{route('home')}}" role="button">Home</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('js/kata.js')}}"></script>
@endsection

