@extends('layouts.app')

@section('content')

    <!--begin::Signin-->
    <div class="login-form">
        <form class="form" id="kt_login_forgot_form" action="">
            <!--begin::Title-->
            <div class="pb-5 pb-lg-15">
                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">{{ __('Forgotten Password ?') }}</h3>
                <p class="text-muted font-weight-bold font-size-h4">{{ __('Enter your email to reset your password') }}</p>
            </div>
            <!--end::Title-->
            <!--begin::Form group-->
            <div class="form-group">
                <input class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->
            <div class="form-group d-flex flex-wrap">
                <button type="submit" id="kt_login_forgot_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">{{ __('Submit') }}</button>
                <a href="custom/pages/login/login-4/signin.html" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">{{ __('Cancel') }}</a>
            </div>
            <!--end::Form group-->
        </form>
    </div>
    <!--end::Signin-->

@endsection

{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <div x-data="{ recovery: false }">--}}
{{--            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">--}}
{{--                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}--}}
{{--            </div>--}}

{{--            <div class="mb-4 text-sm text-gray-600" x-show="recovery">--}}
{{--                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}--}}
{{--            </div>--}}

{{--            <x-jet-validation-errors class="mb-4" />--}}

{{--            <form method="POST" action="{{ route('two-factor.login') }}">--}}
{{--                @csrf--}}

{{--                <div class="mt-4" x-show="! recovery">--}}
{{--                    <x-jet-label for="code" value="{{ __('Code') }}" />--}}
{{--                    <x-jet-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />--}}
{{--                </div>--}}

{{--                <div class="mt-4" x-show="recovery">--}}
{{--                    <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />--}}
{{--                    <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />--}}
{{--                </div>--}}

{{--                <div class="flex items-center justify-end mt-4">--}}
{{--                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"--}}
{{--                                    x-show="! recovery"--}}
{{--                                    x-on:click="--}}
{{--                                        recovery = true;--}}
{{--                                        $nextTick(() => { $refs.recovery_code.focus() })--}}
{{--                                    ">--}}
{{--                        {{ __('Use a recovery code') }}--}}
{{--                    </button>--}}

{{--                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"--}}
{{--                                    x-show="recovery"--}}
{{--                                    x-on:click="--}}
{{--                                        recovery = false;--}}
{{--                                        $nextTick(() => { $refs.code.focus() })--}}
{{--                                    ">--}}
{{--                        {{ __('Use an authentication code') }}--}}
{{--                    </button>--}}

{{--                    <x-jet-button class="ml-4">--}}
{{--                        {{ __('Log in') }}--}}
{{--                    </x-jet-button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}
