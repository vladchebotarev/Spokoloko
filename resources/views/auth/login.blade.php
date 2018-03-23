@extends('layouts.app')

@section('content')

    <div class="ui layout">
        <div class="ui centered grid container">
            <div class="row">
                <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">

                    @if (session('confirmation-success'))
                        <div class="alert alert-success">
                            {{ session('confirmation-success') }}
                        </div>
                    @endif
                    @if (session('confirmation-danger'))
                        <div class="alert alert-danger">
                            {!! session('confirmation-danger') !!}
                        </div>
                    @endif

                    <br>
                    <h3 class="text-align-center-sq">
                        {{ __('Zaloguj się') }}
                    </h3>
                    <br>

                    <div class="content">
                        <a href="{{ url('/auth/facebook') }}" class="button-sq fullwidth-sq facebook-button">
                            <i class="icon icon-logo-facebook2"></i>
                            <span>{{ __('Zaloguj się poprzez Facebook') }}</span>
                        </a>
                        <br>
                        <br>
                        <a href="/auth/google" class="button-sq fullwidth-sq google-button">
                            <img src="new-assets/images/icon-google-plus.svg" alt="">
                            <span>{{ __('Zaloguj się poprzez Google') }}</span>
                        </a>
                        <br>
                        <br>
                        <br>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="div-c">
                                <div class="divided-column">
                                    <input id="email" type="email"
                                           class="{{ $errors->has('email') ? 'has-error' : '' }}"
                                           placeholder="{{ __('E-Mail') }}" name="email" value="{{ old('email') }}"
                                           required autofocus>
                                </div>
                                <div class="divided-column">
                                    <input id="password" type="password"
                                           class="{{ $errors->has('email') ? 'has-error' : '' }}"
                                           placeholder="{{ __('Hasło') }}" name="password" required>
                                    @if ($errors->has('email'))
                                        <small class="small-display-has-error">{{ $errors->first('email') }}</small>
                                    @endif

                                </div>
                            </div>

                            <button type="submit" class="button-sq fullwidth-sq">{{ __('Zaloguj się') }}</button>
                        </form>
                    </div>

                    <div class="actions" style="padding-top: 0px !important;">
                        <div class="border-container">
                            <div class="button-sq link-sq"><a
                                        href="{{ route('password.request') }}">{{ __('Zapamniałeś hasło?') }}</a></div>
                            <br>
                            <div class="button-sq link-sq"><a
                                        href="{{ route('register') }}">{{ __('Nie masz konta?') }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
