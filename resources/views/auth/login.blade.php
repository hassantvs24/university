@extends('layouts.app')

@section('content')

    <!--begin::Signin-->
    <div class="login-form">
        <!--begin::Form-->


        <form class="form" id="kt_login_singin_form" action="{{ route('login') }}" method="POST">
            @csrf
            <!--begin::Title-->
            <div class="pb-5 pb-lg-15">
                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">{{ __('Sign In') }}</h3>
                <div class="text-muted font-weight-bold font-size-h4">{{ __('New Here ?') }}
                <a href="{{ route('register') }}" class="text-primary font-weight-bolder">{{ __('Create Account') }}</a></div>
            </div>
            <!--end::Title-->
            <!--begin::Form group-->
            <div class="form-group">
                <x-jet-label for="email" class="font-size-h6 font-weight-bolder text-dark" req="true" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="email" name="email" :value="old('email')" required autofocus />
                @if ($errors->has('email'))
                    <span class="form-text text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->
            <div class="form-group">
                <div class="d-flex justify-content-between mt-n5">
                    <x-jet-label for="password" class="font-size-h6 font-weight-bolder text-dark pt-5" req="true" value="{{ __('Password') }}" />
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">{{ __('Forgot Password ?') }}</a>
                    @endif
                </div>
                <x-jet-input id="password" class="form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" required autocomplete="current-password" />
                @if ($errors->has('password'))
                    <span class="form-text text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <label class="font-size-h6 font-weight-bolder text-dark">
                    <input type="checkbox" class="" name="remember"/>
                    <span></span>
                    {{ __('Remember me') }}
                </label>
            </div>
            <!--end::Form group-->

            <!--begin::Action-->
            <div class="pb-lg-0 pb-5">
                <button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">{{ __('Sign In') }}</button>
            </div>
            <!--end::Action-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Signin-->

@endsection