<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-brand">
        <img src="images/photo_small.png" height="50px" width="50px" class="rounded-circle" alt="Photo">
        <a href="{{ route('home') }}">{{ __('header.title') }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav2">
        <ul class="navbar-nav">        
        
            <!-- !!!!Home -->
            <li class="{{ request()->is('home') ? 'nav-item active' : 'nav-item' }}"> 
                <a class="nav-link" href="{{ route('home') }}">{{ __('header.home') }}</a>
            </li>

            <!-- !!!!Project -->
            <li class="{{ request()->is('projects') ? 'nav-item active' : 'nav-item' }}"> 
                <a class="nav-link" href="{{ route('projects') }}">{{ __('header.projects') }}</a>
            </li>
            
            <!-- !!!!About -->
            <li class="{{ request()->is('about') ? 'nav-item active' : 'nav-item' }}"> 
                <a class="nav-link" href="{{ route('about') }}">{{ __('header.about') }}</a>
            </li>

            <!-- !!!!Contact -->
            <li class="{{ request()->is('contact') ? 'nav-item active' : 'nav-item' }}"> 
                <a class="nav-link" href="{{route('contact')}}">{{ __('header.contact') }}</a>
            </li>

        </ul>

    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <img src="{{ asset('images/close-icon.png') }}" class="close-icon" alt="close" title="close" />
    </button>
    </div>
</nav>