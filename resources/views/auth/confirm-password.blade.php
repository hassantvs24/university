@extends('layouts.app')

@section('content')

    <!--begin::Signin-->
    <div class="login-form">
        <form class="form" id="kt_login_forgot_form" method="POST" action="{{ route('password.confirm') }}">
            <!--begin::Title-->
            <div class="pb-5 pb-lg-15">
                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Confirm Password ?</h3>
                <p class="text-muted font-weight-bold font-size-h4">{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
            </div>
            <!--end::Title-->
            <!--begin::Form group-->
            <div class="form-group">
                <x-jet-label for="password" class="font-size-h6 font-weight-bolder text-dark" req="true" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" required autofocus autocomplete="current-password" />
                @error('password')
                    <span class="form-text text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->
            <div class="form-group d-flex flex-wrap">
                <button type="submit" id="kt_login_forgot_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">{{ __('Confirm Password') }}</button>
                <a href="{{route('password.request')}}" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">{{ __('Forgot Your Password?') }}</a>
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

{{--        <div class="mb-4 text-sm text-gray-600">--}}
{{--            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}--}}
{{--        </div>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('password.confirm') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />--}}
{{--            </div>--}}

{{--            <div class="flex justify-end mt-4">--}}
{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Confirm') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}
