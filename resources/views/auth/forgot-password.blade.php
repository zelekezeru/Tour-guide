<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Grace Tour - Dashboard</title>
    <!-- Animate.css -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    {{-- For the Footer --}}
    <link href="{{ asset('admin/css/ruang-admin.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.css" />
    <link  href="{{ asset('css/icomoon.css') }}" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container-fluid" id="container-wrapper">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 btn btn-primary btn-lg text-white">Forget Password</h1>
                                    </div>


                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="form-group">
                                            <!-- Email Address -->
                                            <x-auth-session-status class="mb-4" :status="session('status')" />


                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                                                autocomplete="email" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div class="form-group col">

                                            <x-primary-button class="ms-4 btn btn-info">
                                                {{ __('Email Password Reset Link') }}
                                            </x-primary-button>
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                        </div>
                                        <hr>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
