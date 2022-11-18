{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>A coursing - Login</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/admin/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/admin/global_assets/js/main/jquery.min.js"></script>
    <script src="/admin/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/admin/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/admin/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="/admin/assets/js/app.js"></script>
    <script src="/admin/global_assets/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body class="bg-slate-800">

<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login card -->
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Login to your account</h5>
                        </div>
{{--                        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}
                        <div class="form-group form-group-feedback form-group-feedback-right">
                            <input type="email" id="email" class="form-control" placeholder="Email" name="email" :value="old('email')" required autofocus>
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>



                        <div class="form-group form-group-feedback form-group-feedback-right">
                            <input type="password" id="password" class="form-control" placeholder="Password" name="password"
                                   required autocomplete="current-password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>



                        <div class="form-group d-flex ">


                            <input type="checkbox" id="remember_me" name="remember" class="form-input-styled" checked data-fouc>
                            <span class="mr-2">{{ __('Remember me') }}</span>

                        </div>



                        <div class="flex items-center justify-end mb-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }} <i class="icon-circle-right2 ml-2"></i></button>
                        </div>

                        <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">or sign in with</span>
                        </div>

                        <div class="form-group text-center">
                            <button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2 ml-2"><i class="icon-facebook"></i></button>
                            <button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i class="icon-dribbble3"></i></button>
                            <button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2"><i class="icon-github"></i></button>
                            <button type="button" class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2"><i class="icon-twitter"></i></button>
                        </div>

                        <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">Don't have an account?</span>
                        </div>

                        <div class="form-group">
                            <a href="{{ route('register') }}" class="btn btn-light btn-block">Sign up</a>
                        </div>


                    </div>
                </div>
            </form>
            <!-- /login card -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
