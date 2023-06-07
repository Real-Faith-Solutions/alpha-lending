@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Total Amortization</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Report</a></li>
            <li class="breadcrumb-item active">Total Amortization</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">
          <div class="card shadow">
            <div class="card-header">
                <span class="card-title h6 font-weight-bold text-primary">Total Amortization Data table</span>
                <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="generalTable" class="table table-borderless table-striped table-sm"
              style="border-radius: 3px; overflow: hidden; font-size: 0.85em
                <thead class="thead-dark">
                <tr>
                    <th>Monthly</th>
                    <th>Quarterly</th>
                    <th>Semi-Annual</th>
                    <th>Annual</th>
                </tr>
                </thead>
                <tbody class="font-weight-light">
                {{-- @foreach($amounts as $amount) --}}
                    <tr class="mx-md-n5">
                        {{-- <td>{{$amount['amount']}}</td> --}}
                    <td>{{number_format((($amort - $amounts)* 1 ),2);}}</td>
                    <td>{{number_format((($amort - $amounts)* 3 ),2);}}</td>
                    <td>{{number_format((($amort - $amounts)* 6 ),2);}}</td>
                    <td>{{number_format((($amort - $amounts)* 12 ),2);}}</td>
                    </tr>
                {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
