@extends('layout')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ $message }}</li>
                </ul>
            </div>
        @endif
            <div class="col-sm-6">
              <h1 class="text-gray-800">Users</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Rights Management</a></li>
                <li class="breadcrumb-item active">Users</li>
              </ol>
            </div>
          </div>
        </div>
    </div>

    <div class="card shadow-lg rounded">
        <div class="card-header">
            <button type="button" class="btn btn-primary rounded btn-sm" data-bs-toggle="modal" data-bs-target="#addUser">
                Add users
            </button>

            <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-end">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search user here" aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form> -->
        </div>
        @php 
            $roles = app(App\Http\Controllers\CustomAuthController::class)->getRoleID();            
        @endphp

        <div class="card-body">
                <div class="table-responsive-sm w-100">
                    <table class="table table-hover mt-3" id="generalTable">
                        <thead class="bg-primary text-white">
                            <tr>
                                
                                <th scope="col"><i class="bi bi-arrow-up"></i>Name</th>
                                <th scope="col"><i class="bi bi-arrow-up"></i>Email</th>
                                <th scope="col"><i class="bi bi-arrow-up"></i>Role</th>
                                <th scope="col"><i class="bi bi-arrow-up"></i>Status</th>
                                <th scope="col"><i class="bi bi-arrow-up"></i>Action</th>
                                <th scope="col"><i class="bi bi-arrow-up"></i>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                

                                
                                <th>{{$user->name}}</th>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td> 
                                            @if ($user->status ==0)<div class="badge badge-danger">Inactive</td>
                                                @else <div class="badge badge-success">Active</td>
                                            @endif
                                    </td>
                                <td>
                                    <a href="{{ route('status', ['id'=>$user->id])}}">
                                    @if ($user->status == 1) <button class="btn btn-primary btn-sm btn-block">Reject</button> 
                                        @else <button class="btn btn-primary btn-sm btn-block">Approve</button>
                                    @endif 
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ route('destroy', ['id'=>$user->id])}}">
                                        <button class="btn btn-danger btn-sm btn-block">Delete</button>
                                    </a>
                                </td>
                                @endforeach
                            
                                
                    
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
    </div>
</section>
<!-- /.content -->
<script> 
$(document).ready(function(){
    $('.delete_form').on('submit'), function(){
        if(confirm("Are you sure you want to delete it?")){
            return true;
        }else{
            return false;
        }
    
});
</script>
@endsection
