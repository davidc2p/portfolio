@extends('layouts.master')

@section('meta')
	<link rel="canonical" href="{{ url()->current() }}home" />
	<title>{{ __('home.title') }}</title>
	<meta name="description" content="{{ __('home.description') }}">
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid vertical-center">
        <div class="container for-about">
        <h1>{{ __('home.hello') }}</h1>
        <h2>{{ __('home.what') }}</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 text-center">
            {{ __('home.created') }} <a href="https://laravel.com/">Laravel</a>
        </div>    
    </div>

    <div class="w-100">&nbsp;</div>
    
@endsection