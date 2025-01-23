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
                                        <h1 class="h4 text-gray-900 mb-4 btn btn-primary btn-lg text-white">Register</h1>
                                    </div>

                                    @if ($firstUser)
                                        <h6 class="mb-4 text-warning text-center">You're the first User to the System, You'll automatically be assigned to the <br> <span class="text-success">Role of ADMIN!</span></h6>
                                    @endif

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group">
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required
                                                autofocus autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <!-- Email Address -->
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                                                autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <x-input-label for="password" :value="__('Password')" />

                                                <x-text-input id="password" class="form-control" type="password" name="password" required
                                                    autocomplete="new-password" />

                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>

                                            <div class="col">
                                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                                <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                                                    required autocomplete="new-password" />
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                        </div>
                                            <hr>
                                        @if ($firstUser)
                                            <input type="text" class="form-control" readonly name="role" value="ADMIN">
                                        @else

                                            <div class="form-group col-4">
                                                <!-- Role -->
                                                <x-input-label for="email" :value="__('Select Role')" />
                                                <select class="form-control" name="role" id="role">
                                                    <option value="#">Choose Oprion</option>
                                                    <option value="ADMIN" {{ old('role') == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                                                    <option value="EDITOR" {{ old('role') == 'EDITOR' ? 'selected' : '' }}>EDITOR</option>
                                                    <option value="USER" {{ old('role') == 'USER' ? 'selected' : '' }}>USER</option>
                                                </select>
                                            </div>
                                        @endif

                                        <hr>
                                        <div class="form-group col">

                                            <x-primary-button class="ms-4">
                                                {{ __('Register') }}
                                            </x-primary-button>
                                        </div>
                                        <div class="form-group">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                        </div>
                                        <hr>
                                        {{-- <a href="index.html" class="btn btn-google btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
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
