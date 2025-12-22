@extends('layouts.guest', ['page_title' => __('notifications.' . $exception->getStatusCode() . '_title')])

@section('guest-content')

                    <div class="text-center login100-form">
                        <div class="text-center mb-5">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="200">
                        </div>

                        <!-- Title Section-->
                        <span class="display-1 p-b-43 font-weight-bold gbs-text-green">404</span>

                        <!-- Login Section-->
                        <span class="login100-form-title p-b-43">
                            @lang('notifications.404_title')
                        </span>

                        <div class="container-login100-form-btn p-t-30">
                            <a href="{{ route('home') }}" class="login100-form-btn gbs-btn-cyan">@lang('miscellaneous.back_home')</a>
                        </div>
                    </div>

@endsection
