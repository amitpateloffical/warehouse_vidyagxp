@extends('admin.layouts.master')
@section('content')
<div class="login-main"
    style="">
      <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <div class="login-area">
                    <div class="login-wrapper">
                        <div class="login-wrapper__top">
                            <img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="" width="100" style="scale: 4">
                            <h3 class="title text-white">@lang('Welcome to') <strong>{{ __($general->site_name) }}</strong></h3>
                            {{-- <p class="text-white">{{ __($pageTitle) }} @lang('to') {{ __($general->site_name) }} --}}
                                {{-- @lang('Dashboard')</p> --}}
                        </div>
                        <div class="login-wrapper__body">
                            <form action="{{ route('admin.login.post') }}" method="POST"
                                class="cmn-form  verify-gcaptcha login-form">
                                @csrf
                                <div class="form-group">
                                    <label>@lang('Username')</label>
                                    <input type="text" class="form-control" value="{{ old('username') }}" name="username" required>
                                </div>

                                <div class="form-group">
                                    <label>@lang('Password')</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" name="remember" type="checkbox" id="remember">
                                        <label class="form-check-label" for="remember">@lang('Remember Me')</label>
                                    </div>
                                    <a href="{{ route('admin.password.reset') }}" class="forget-text">@lang('Forgot Password?')</a>
                                </div>
                                <button type="submit" class="btn cmn-btn w-100">@lang('LOGIN')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        (function($){
        'use strict';
            $('[name=type]').on('change', function(){
                let type = $(this).val();
                let url = `{{ route('admin.login') }}`;
                if(type == 'staff'){
                    url = `{{ route('admin.login') }}`;
                }
                console.log(url);
                $('form')[0].action= url;
            })
        })(jQuery);
    </script>
@endpush
