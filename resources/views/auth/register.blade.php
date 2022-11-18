{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>A coursing - Register</title>

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

<body>




<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Registration form -->
            <form class="login-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Create account</h5>

                        </div>

                        <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">Your credentials</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-right">
                            <input type="text" class="form-control" placeholder="Username" id="name" name="name" :value="old('name')" required autofocus>
                            <div class="form-control-feedback">
                                <i class="icon-user-check text-muted"></i>
                            </div>
                        </div>



                        <div class="form-group form-group-feedback form-group-feedback-right">
                            <input type="email" class="form-control" placeholder="Your email" id="email" name="email" :value="old('email')" required>
                            <div class="form-control-feedback">
                                <i class="icon-mention text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-right">
                            <input type="tel" class="form-control" placeholder="Your phone" id="phone" name="phone" :value="old('phone')" required>
                            <div class="form-control-feedback">
                                <i class="icon-phone text-muted"></i>
                            </div>
                        </div>


                        <div class="form-group form-group-feedback form-group-feedback-right">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password"
                                   required autocomplete="new-password">
                            <div class="form-control-feedback">
                                <i class="icon-user-lock text-muted"></i>
                            </div>
                        </div>



                        <div class="form-group form-group-feedback form-group-feedback-right">

                            <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required >
                            <div class="form-control-feedback">
                                <i class="icon-user-lock text-muted"></i>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4 mb-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                        </div>

                        <button type="submit" class="btn bg-teal-400 btn-block"> {{ __('Register') }} <i class="icon-circle-right2 ml-2"></i></button>
                    </div>

                    <div class="form-group text-center text-muted content-divider">
                        <span class="px-2">or register in with</span>
                    </div>

                    <div class="form-group text-center">
                        <button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2 ml-2"><i class="icon-facebook"></i></button>
                        <button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i class="icon-dribbble3"></i></button>
                        <button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2"><i class="icon-github"></i></button>
                        <button type="button" class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2"><i class="icon-twitter"></i></button>
                    </div>
                </div>
            </form>
            <!-- /registration form -->

        </div>
        <!-- /content area -->



    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
