@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Collector Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active">Collector Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <span class="card-title h6 font-weight-bold text-primary">Collector profile</span>
                </div>

                <div class="card-body">
                    <div class="card-group shadow-lg rounded">
                        <div class="card bg-primary text-white">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-3"><i class="fa fa-person-fill"></i> John Doe</h5>
                                <p class="card-text">Name</p>
                            </div>
                        </div>

                        <div class="card bg-success text-white">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-3"><i class="fa fa-house-fill"></i> Bagong silang caloocan city</h5>
                                <p class="card-text">Address</p>
                            </div>
                        </div>

                        <div class="card bg-info text-white">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-3"><i class="fa fa-person-video3"></i> 123-456-789-0123</h5>
                                <p class="card-text">valid id number</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-group shadow-lg rounded">
                        <div class="card bg-warning text-black">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-3"><i class="bi bi-house-door"></i> Caloocan</h5>
                                <p class="card-text">Designated area</p>
                            </div>
                        </div>
                        <!-- <i class="bi bi-currency-dollar"></i> -->
                        <div class="card bg-danger text-white">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-3"><i class="bi bi-people-fill"></i> 150</h5>
                                <p class="card-text">Total loans handled</p>
                            </div>
                        </div>

                        <div class="card bg-secondary text-white">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-3"><i class="bi bi-receipt"></i> 150</h5>
                                <p class="card-text">Total handled active loans</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-group shadow-lg rounded">
                        <div class="card bg-success text-white">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-3"><i class="bi bi-currency-exchange"></i> 150</h5>
                                <p class="card-text">Total handled matured loans</p>
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-3"><i class="bi bi-alarm-fill"></i> 150</h5>
                                <p class="card-text">Total ontime collected</p>
                            </div>
                        </div>

                        <div class="card bg-light text-darrk">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-3"><i class="bi bi-hourglass-split"></i> 150</h5>
                                <p class="card-text">Total delayed collected</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
