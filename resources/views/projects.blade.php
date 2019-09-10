@extends('layouts.master')

@section('meta')
	<link rel="canonical" href="{{ url()->current() }}projects" />
	<title>{{ __('projects.title') }}</title>
	<meta name="description" content="{{ __('projects.description') }}">
@endsection

@section('content')
    <div class="w-100">&nbsp;</div>

    <div class="row">
        <div class="col-12 col-lg-5 offset-lg-1 d-flex justify-content-center">
            <div class="card h-100 text-center box-shadow" style="width: 25em;">
                <img src="{{ asset('images/whiterabbitservice300.png') }}" class="card-img-top" alt="{{ __('projects.projecttitle1') }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ __('projects.projecttitle1') }}</h5>
                    <p class="card-text">{{ __('projects.projectdescription1') }}</p>
                    <a href="https://www.whiterabbitservice.com" class="btn btn-primary mt-auto">{{ __('projects.visit') }}</a>
                    <div class="card-footer">{{ __('projects.projectfooter1') }}</div>
                </div>
            </div>
        </div>

        <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>

        <div class="col-12 col-lg-5 d-flex justify-content-center">
            <div class="card h-100 text-center box-shadow" style="width: 25em;">
                <img src="{{ asset('images/whiterabbitcomputers300.png') }}" class="card-img-top" alt="WhiteRabbit Computers">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ __('projects.projecttitle2') }}</h5>
                    <p class="card-text">{{ __('projects.projectdescription2') }}</p>
                    <a href="https://www.whiterabbitcomputers.com" class="btn btn-primary mt-auto">{{ __('projects.visit') }}</a>
                    <div class="card-footer">{{ __('projects.projectfooter2') }}</div>
                </div>
            </div>
        </div>

	</div>
    
@endsection