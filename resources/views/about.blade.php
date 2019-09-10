@extends('layouts.master')

@section('meta')
	<link rel="canonical" href="{{ url()->current() }}about" />
	<title>{{ __('about.title') }}</title>
	<meta name="description" content="{{ __('about.description') }}">
@endsection

@section('content')
    <div class="w-100">&nbsp;</div>

    <div class="row bg-light align-items-center h-100">

        <div class="w-100">&nbsp;</div>

        <div class="col-12 col-lg-6 d-flex justify-content-center">
            <img src="images/photo_small.png" class="rounded-circle float-lg-right" alt="Photo">
        </div>

        <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>
    
        <div class="col-12 col-lg-6 text-center text-lg-left">
            <strong>David Domingues</strong><br>
            {{ __('about.born') }}<br>
            {{ __('about.live') }}<br><br>
            <a href="{{route('contact')}}">{{ __('about.contact') }}</a>
        </div>

        <div class="w-100">&nbsp;</div>

    </div>

    <div class="container">
        <div class="w-100">&nbsp;</div>
        <h1 class="text-center">{{ __('about.competencies') }}</h1>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card h-100 text-center box-shadow">
                    <div class="card-body">
                        <p class="card-text">{{ __('about.competencies1') }}</p>
                    </div>
                </div>
            </div>

            <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>

            <div class="col-12 col-lg-4">
                <div class="card h-100 text-center box-shadow">
                    <div class="card-body">
                        <p class="card-text">{{ __('about.competencies2') }}</p>
                    </div>
                </div>
            </div>

            <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>

            <div class="col-12 col-lg-4">
                <div class="card h-100 text-center box-shadow">
                    <div class="card-body">
                        <p class="card-text">{{ __('about.competencies3') }}</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-100">&nbsp;</div>
    </div>

    <div class="w-100">&nbsp;</div>


    <div class="container bg-light">
        <div class="w-100">&nbsp;</div>
        <h1 class="text-center">{{ __('about.technologies') }}</h1>

        <div class="row bg-light">
            <div class="col-12 col-lg-2 offset-lg-1">
                <div class="card h-100 text-center box-shadow">
                <img src="{{ asset('images/php.jpg') }}" class="card-img-top mx-auto" style="width: 150px; height: 150px;" alt="PHP">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">{{ __('about.technologies1') }}</p>
                    </div>
                </div>
            </div>

            <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>

            <div class="col-12 col-lg-2">
                <div class="card h-100 text-center box-shadow">
                <img src="{{ asset('images/javascript.png') }}" class="card-img-top mx-auto" style="width: 150px; height: 150px;" alt="WhiteRabbit Time management">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">JavaScript</h5>
                        <p class="card-text">{{ __('about.technologies2') }}</p>
                    </div>
                </div>
            </div>

            <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>

            <div class="col-12 col-lg-2">
                <div class="card h-100 text-center box-shadow">
                <img src="{{ asset('images/laravel.png') }}" class="card-img-top mx-auto" style="width: 150px; height: 150px;" alt="WhiteRabbit Time management">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Laravel</h5>
                        <p class="card-text">{{ __('about.technologies3') }}</p>
                    </div>
                </div>
            </div>

            <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>

            <div class="col-12 col-lg-2">
                <div class="card h-100 text-center box-shadow" >
                <img src="{{ asset('images/vuejs.png') }}" class="card-img-top mx-auto" style="width: 150px; height: 150px;" alt="WhiteRabbit Time management">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Vue.js</h5>
                        <p class="card-text">{{ __('about.technologies4') }}</p>
                    </div>
                </div>
            </div>

            <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>

            <div class="col-12 col-lg-2">
                <div class="card h-100 text-center box-shadow">
                <img src="{{ asset('images/mysql.png') }}" class="card-img-top mx-auto" style="width: 150px; height: 150px;" alt="WhiteRabbit Time management">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">MySql</h5>
                        <p class="card-text">{{ __('about.technologies5') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100">&nbsp;</div>

        <div class="row">  
            <div class="col-12 text-center">{{ __('about.competenciescomplement') }}</div>
        </div>

        <div class="w-100">&nbsp;</div>

    </div>

    <div class="container">

        <div class="w-100">&nbsp;</div>
        <h1 class="text-center">{{ __('about.companies') }}</h1>

        <div class="row">  
            <div class="col-12 text-center">{{ __('about.companies1') }}</div>
        </div>

        <div class="w-100">&nbsp;</div>
    </div>


    <div class="w-100">&nbsp;</div>

    <div class="container">
        <div class="w-100">&nbsp;</div>

        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="card h-100 text-center box-shadow">
                <img src="{{ asset('images/millenniumbcp.jpg') }}" class="card-img-top mx-auto" style="width: 150px; height: 150px;" alt="PHP">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Millennium BCP</h5>
                        <p class="card-text">8 {{ __('about.years') }}.</p>
                        <div class="card-footer mt-auto">{{ __('about.banking') }}</div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>

            <div class="col-12 col-lg-3">
                <div class="card h-100 text-center box-shadow">
                <img src="{{ asset('images/besseguros.jpg') }}" class="card-img-top mx-auto" style="width: 150px; height: 150px;" alt="WhiteRabbit Time management">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">BES Seguros</h5>
                        <p class="card-text">5 {{ __('about.years') }}.</p>
                        <div class="card-footer mt-auto">{{ __('about.insurance') }}</div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>

            <div class="col-12 col-lg-3">
                <div class="card h-100 text-center box-shadow">
                <img src="{{ asset('images/caixageral.jpg') }}" class="card-img-top mx-auto" style="width: 150px; height: 150px;" alt="WhiteRabbit Time management">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Caixa Geral de Depósitos</h5>
                        <p class="card-text">3 {{ __('about.years') }}.</p>
                        <div class="card-footer mt-auto">{{ __('about.banking') }}</div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-block d-sm-block d-md-block d-lg-none">&nbsp;</div>

            <div class="col-12 col-lg-3">
                <div class="card h-100 text-center box-shadow" >
                <img src="{{ asset('images/adse.jpg') }}" class="card-img-top mx-auto" style="width: 150px; height: 150px;" alt="WhiteRabbit Time management">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">ADSE</h5>
                        <p class="card-text">3 {{ __('about.years') }}.</p>
                        <div class="card-footer mt-auto">{{ __('about.state') }}</div>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-100">&nbsp;</div>

    </div>

@endsection