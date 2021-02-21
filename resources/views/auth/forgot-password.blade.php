@extends('layouts.app')

@section('content')

    <!--begin::Signin-->
    <div class="login-form">
        <form class="form" id="kt_login_forgot_form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <!--begin::Title-->
            <div class="pb-5 pb-lg-15">
                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Forgotten Password ?</h3>
                <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
            </div>
            <!--end::Title-->
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--begin::Form group-->
                    <div class="form-group">
                        <x-jet-label for="email" class="font-size-h6 font-weight-bolder text-dark" req="true" value="{{ __('Email Address') }}" />
                        <x-jet-input id="email" class="form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="email" name="email" :value="old('email')" autofocus required />
                        @if ($errors->has('email'))
                            <span class="form-text text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group d-flex flex-wrap">
                    <button type="submit" id="kt_login_forgot_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">{{ __('Email Password Reset Link') }}</button>
                    <a href="{{route('login')}}" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</a>
                </div>
                <!--end::Form group-->
            </form>
        </div>
        <!--end::Signin-->
    @endsection

