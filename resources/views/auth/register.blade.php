<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div class="jumbotron text-center container" style="padding-left: 25%;padding-right: 25%">

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <x-jet-label for="name" value="{{ __('Name') }}" />
        <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <div class="mt-4">
        <x-jet-label for="email" value="{{ __('Email') }}" />
        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
    </div>

    <div class="mt-4">
        <x-jet-label for="password" value="{{ __('Password') }}" />
        <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="mt-4">
        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
        <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>
<br>
    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        <button class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</form>
</div>