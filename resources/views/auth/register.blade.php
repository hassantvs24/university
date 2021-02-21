@extends('layouts.app')

@section('content')

    <!--begin::Signin-->
    <div class="login-form">
        <!--begin::Form-->
        <form class="form" id="kt_login_singin_form" action="{{ route('register') }}" method="POST">
            @csrf
            <!--begin::Title-->
            <div class="pb-5 pb-lg-15">
                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">{{__('Create Account')}}</h3>
                <div class="text-muted font-weight-bold font-size-h4">Already have an Account ?
                    <a href="{{ route('login') }}" class="text-primary font-weight-bolder">{{__('Sign In')}}</a></div>
            </div>
            <!--end::Title-->

            <!--begin::Form group-->
            <div class="form-group">
                <x-jet-label for="name" class="font-size-h6 font-weight-bolder text-dark" req="true" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="text" name="name" :value="old('name')" required autofocus  autocomplete="name" />
                @if ($errors->has('name'))
                    <span class="form-text text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <x-jet-label for="email" class="font-size-h6 font-weight-bolder text-dark" req="true" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="email" name="email" :value="old('email')" required />
                @if ($errors->has('email'))
                    <span class="form-text text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <x-jet-label for="password" class="font-size-h6 font-weight-bolder text-dark" req="true" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" required autocomplete="new-password" />
                @if ($errors->has('password'))
                    <span class="form-text text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <x-jet-label for="password_confirmation" class="font-size-h6 font-weight-bolder text-dark" req="true" value="{{ __('Password Confirmation') }}" />
                <x-jet-input id="password_confirmation" class="form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <!--end::Form group-->

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <!--begin::Form group-->
            <div class="form-group">
                <label class="font-size-h6 font-weight-bolder text-dark">
                    <input type="checkbox" name="terms"/>
                    <span></span>
                    {{ __('I agree to the privacy_policy') }}
                </label>
            </div>
            <!--end::Form group-->
            @endif

            <!--begin::Action-->
            <div class="pb-lg-0 pb-5">
                <button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Register</button>
            </div>
            <!--end::Action-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Signin-->

@endsection
