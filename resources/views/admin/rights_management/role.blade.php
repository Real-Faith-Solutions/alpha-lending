@extends('layout')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="text-gray-800">Roles</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Rights Management</a></li>
                <li class="breadcrumb-item active">Roles</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </div>

    <div class="card shadow-lg rounded">
        <div class="card-header">
            <button type="button" class="btn btn-primary rounded btn-sm" data-bs-toggle="modal" data-bs-target="#addRole">
                Add roles
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

        <div class="card-body p-5">
            
            <div class="table-responsive-sm w-100">
                <table class="table table-hover mt-3" id="generalTable">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col"></th>                            
                            <th scope="col"><i class="bi bi-arrow-up"></i>Name</th>
                            <th scope="col"><i class="bi bi-arrow-up"></i>Roles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#" class="mx-3">
                                    <i class="bi bi-pencil"></i>
                                    Edit
                                </a>
                                <a href="#" class="mx-3">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </a>
                            </td>
                            <th>Admin</th>
                            <td>-</td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="mx-3">
                                    <i class="bi bi-pencil"></i>
                                    Edit
                                </a>
                                <a href="#" class="mx-3">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </a>
                            </td>
                            <th>Approver</th>
                            <td>-</td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="mx-3">
                                    <i class="bi bi-pencil"></i>
                                    Edit
                                </a>
                                <a href="#" class="mx-3">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </a>
                            </td>
                            <th>Case Manager</th>
                            <td>-</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
<!-- /.content -->
@endsection
