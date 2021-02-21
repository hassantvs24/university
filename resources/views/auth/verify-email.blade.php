@extends('layouts.app')

@section('content')

    <!--begin::Signin-->
    <div class="login-form">
        <form class="form" id="kt_login_forgot_form" action="">
            <!--begin::Title-->
            <div class="pb-5 pb-lg-15">
                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Forgotten Password ?</h3>
                <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
            </div>
            <!--end::Title-->
            <!--begin::Form group-->
            <div class="form-group">
                <input class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->
            <div class="form-group d-flex flex-wrap">
                <button type="submit" id="kt_login_forgot_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                <a href="custom/pages/login/login-4/signin.html" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</a>
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
{{--            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}--}}
{{--        </div>--}}

{{--        @if (session('status') == 'verification-link-sent')--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ __('A new verification link has been sent to the email address you provided during registration.') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <div class="mt-4 flex items-center justify-between">--}}
{{--            <form method="POST" action="{{ route('verification.send') }}">--}}
{{--                @csrf--}}

{{--                <div>--}}
{{--                    <x-jet-button type="submit">--}}
{{--                        {{ __('Resend Verification Email') }}--}}
{{--                    </x-jet-button>--}}
{{--                </div>--}}
{{--            </form>--}}

{{--            <form method="POST" action="{{ route('logout') }}">--}}
{{--                @csrf--}}

{{--                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">--}}
{{--                    {{ __('Log Out') }}--}}
{{--                </button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}
