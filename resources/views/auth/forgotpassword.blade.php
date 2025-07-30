@extends('layouts.app')

@section('title', 'Forgot Password | Admin')

@section('content')
<body class="">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row  row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col mx-auto">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-6">
                                    <div class="mt-4 text-center">
                                        <img src="{{ asset('assets/img/cloud-crm-logo.png'.Config::get('app.assets_version')) }}" class="logo-icon" alt="logo icon">
                                    </div>
                                    <div class="text-center mb-2 mt-3">
                                        <p class="mb-0">Enter your registered email ID to reset the password</p>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-5" action="" method="POST" id="forgotPassword">
                                            @csrf
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email<span class="required-field"></span></label>
                                                <input type="text" class="form-control" id="inputEmailAddress" name="username" placeholder="Enter Email">
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid gap-2">
                                                    <button type="submit" class="btn btn-primary">Send Email</button>
                                                    <a href="{{route('admin.login')}}" class="btn btn-light"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
                                                </div>
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