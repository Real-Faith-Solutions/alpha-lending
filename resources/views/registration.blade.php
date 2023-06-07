@extends('layout_plain')

@section('content')
<div class="row justify-content-center">
<div class="card o-hidden border-0 shadow-lg my-2 col-xl-10 col-lg-12 col-md-9">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block" style="background:url('images/alpha_logo.png'); background-size:cover;background-position:center"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <form class="user" action="{{ route('register.custom') }}" method="POST">
                     @csrf
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                        <div class="form-group">
                            
                                <input type="text" placeholder="Enter your Fullname" id="name" class="form-control form-control-user"
                                 name="name" required autofocus>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Enter your Email" id="email_address" class="form-control form-control-user"
                            name="email" required autofocus>
                        </div>
                        <div class="form-group mb-3">
                            <select id="users" class="form-control" name="role" required autofocus style="border-radius: 90px">
                                <option selected disabled>Select role</option>
                                <option value="case_manager">Case Manager</option>
                                <option value="approver">Approver</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" placeholder="Enter your password" id="password"
                                 class="form-control form-control-user mb-3" name="password" required>
                            </div>
                            
                            <div class="col-sm-6">
                                <input type="password" placeholder="Confirm your password" id="cpassword" class="form-control form-control-user mb-3"
                                            name="cpassword" required onchange="cpass()">

                                        {{-- <div class="alert alert-success" role="alert" id="cpassMatch" style="display: none">
                                          Password matched!
                                        </div>
                                        <div class="alert alert-danger" role="alert" id="cpassUnmatch" style="display: none">
                                          Password are not matched!
                                        </div> --}}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">REGISTER</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ env('APP_URL') }}forgot-password">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="{{ env('APP_URL') }}login">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br/>
@endsection
