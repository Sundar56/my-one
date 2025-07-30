@extends('layouts.app')

@section('title', 'Login | Admin')

@section('content')

<body class="">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5 mx-auto">
                        <div class="card mb-0">
                            <div class="card-body py-5 px-4">
                                <div class="text-center">
                                    <h5 class="heading-text-md mb-4">Please log in to your account
                                    </h5>
                                    <div class="form-body text-start">
                                        <form action="" method="POST" id="loginForm" novalidate="novalidate">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="inputEmailAddress" class="form-label login-page">Email<span class="required-field"></span></label>
                                                <input type="text" class="form-control" id="inputEmailAddress" name="username" placeholder="Enter Username">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputChoosePassword" class="form-label login-page">Password<span class="required-field"></span></label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" placeholder="***********">
                                                    <span class="input-group-text bg-transparent"><i class="bx bx-hide"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-4 row">
                                                <div class="col-md-12 text-end"> <a href="{{ route('admin.forgotpassword') }}">Forgot Password ?</a>
                                                </div>
                                            </div>

                                            <div class="">
                                                <button type="submit" class="btn btn-primary w-100" id="submitSignin">Sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</body>
@endsection