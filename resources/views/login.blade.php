@extends('layout_plain')

@section('content')
<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-9 col-lg-12 col-md-12">
        <div class="card o-hidden border-0 shadow-lg my-2">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-login-image" style="background-image: url('{{ asset('images/alpha_logo.png') }}'); background-size: contain; background-repeat: no-repeat;background-color: black;"></div>
                    <div class="col-lg-7">
                        <div class="p-5 mx-5">
                            <div class="text-center">
                                <h1 class="h2 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('login.custom') }}">
                                @csrf <!-- {{ csrf_field() }} -->
                               
                                <div class="form-group">
                                    <input type="email" placeholder="Email" id="email" class="form-control form-control-user"
                                     name="email" required
                                            autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" id="password" class="form-control form-control-user"
                                     name="password" required>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ env('APP_URL') }}forgot-password">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ env('APP_URL') }}registration">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
@endsection
