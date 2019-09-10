@extends('layouts.master')

@section('meta')
	<link rel="canonical" href="{{ url()->current() }}contact" />
	<title>{{ __('contact.title') }}</title>
	<meta name="description" content="{{ __('contact.description') }}">
@endsection

@section('content')
    <h1>{{ __('contact.title') }}</h1>
    <form action="{{ route('contact.send') }}" method="post">
            
        {{ csrf_field() }}
        <div class="form-group">
            <label class="form-control-label" for="contact_name">{{ __('contact.contactname') }}<span class="form-asterisk">*</span></label>
            <input type="text" class="form-control" name="contact_name" required="" id="contact_name">
        </div>

        <div class="form-group">
            <label class="form-control-label" for="contact_email">{{ __('contact.contactemail') }}<span class="form-asterisk">*</span></label>
            <input type="email" class="form-control" name="contact_email" required="" id="contact_email">
        </div>

        <div class="form-group">
            <label class="form-control-label" for="contact_message">{{ __('contact.contactmessage') }}</label>
            <textarea class="form-control" name="contact_message" rows="5" id="contact_message"></textarea>
        </div>
    
        <div><button type="submit" name="contact" class="btn btn-primary btn-lg">{{ __('contact.contactus') }}</button></div>

    </form>
    
@endsection