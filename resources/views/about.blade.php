@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class='wrapper'>
    <div class='container'>
        <div class="row">
            <div class="col-lg-6 col-md-6 content">
                <h1 class='text-center'>About Kata Codecamp</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-6 col-md-6 display-desktop">
                <img height='100%' src="{{asset('img/kata_img2.jpeg')}}" alt="" class="img img-resposive">
            </div>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class='container'>
        <div class="row">
            <div class="col-lg-6 col-md-6 content">
                <h1 class='text-center'>Support us on IndieGoGo</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-6 col-md-6 display-desktop">
                <img height='100%' src="{{asset('img/campaign.jpg')}}" alt="" class="img img-resposive">
            </div>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class='container'>
        <div class='row'>
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <img height='100%' src="{{asset('img/campaign2.jpg')}}" alt="" class="img img-resposive">
            </div>
        </div>
    </div>
</div>
@endsection

