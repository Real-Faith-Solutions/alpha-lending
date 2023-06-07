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
            <li class="breadcrumb-item"><a href="#">Page Forms</a></li>
            <li class="breadcrumb-item active">Collector Profile</li>
          </ol>
        </div>
      </div>
    </div>
</section>

<!-- Main content -->
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header">
                <span class="card-title h6 font-weight-bold text-primary">Collector profile</span>
            </div>

            <div class="card-body">
                <div class="card-body table-responsive">
                    <table id="generalTable1" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden; font-size: 0.85em;">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Valid Id Number</th>
                                <th>Designated area</th>
                                <th>Total loans handled</th>
                                <th>Total handled active loans</th>
                                <th>Total handled matured loans</th>
                                <th>Total ontime collected</th>
                                <th>Total delayed collected</th>
                            </tr>
                        </thead>
                        
                        <tbody class="font-weight-light">
                            <tr class="mx-md-n5">
                                <td>Teodoro Rommel De Santos</td>
                                <td>Bagong silang caloocan city</td>                                
                                <td>123-456-789-0123</td>
                                <td>Caloocan</td>
                                <td>150,000</td>
                                <td>150</td>
                                <td>150</td>
                                <td>101</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
