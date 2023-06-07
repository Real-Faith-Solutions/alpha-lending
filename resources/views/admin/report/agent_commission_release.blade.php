@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Agent Commission Release Report</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Report</a></li>
            <li class="breadcrumb-item active">Agent Commission Release</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mb-3">
            <div class="card shadow">
                <div class="card-header bg-dark">
                    <span class="card-title h6 font-weight-light text-white">Page Actions</span>
                </div>

                <div class="card-body table-responsive">
                  <div class="row">
                    <div class="col-md">
                      <label for="basic-url" class="form-label">Select branch</label>
                      <div class="input-group mb-3">
                        <select class="form-control" id="inputGroupSelect02">
                          <option selected disabled>---</option>
                            <option value="1">Branch 1</option>
                            <option value="2">branch 2</option>
                            <option value="3">Branch 3</option>
                          </select>
                      </div>
                    </div>


                    <div class="col-md">
                      <div class="form-check">
                        <label for="flexCheckDefault" class="form-label">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                          Select agent
                        </label>
                    </div>
                      <div class="input-group mb-3">
                        <select class="form-control" id="inputGroupSelect02">
                          <option selected disabled>---</option>
                            <option value="1">Agent 1</option>
                            <option value="2">Agent 2</option>
                            <option value="3">Agent 3</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-md">
                      <label for="basic-url" class="form-label">Select a payment type</label>
                      <div class="input-group mb-3">
                        <select class="form-control" id="inputGroupSelect02">
                          <option selected disabled>---</option>
                            <option value="1">Payment type 1</option>
                            <option value="2">Payment type 2</option>
                            <option value="3">Payment type 3</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-md">
                      <label for="basic-url" class="form-label">Select periodic</label>
                      <div class="input-group mb-3">
                        <select class="form-control" id="inputGroupSelect02">
                          <option selected disabled>---</option>
                            <option value="1">Weekly</option>
                            <option value="2">Monthly</option>
                            <option value="3">Semi Annually 1</option>
                            <option value="3">Semi Annually 2</option>
                            <option value="3">Annually</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-md">
                      <label for="basic-url" class="form-label">From</label>
                      <div class="input-group mb-3">
                        <input type="date" class="form-control"></input>
                      </div>
                    </div>

                    <div class="col-md">
                      <label for="basic-url" class="form-label">To</label>
                      <div class="input-group mb-3">
                        <input type="date" class="form-control"></input>
                      </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <input type="submit" class="btn btn-success btn-sm" value="Export to PDF"/>
                        <input type="submit" class="btn btn-success btn-sm" value="Export to Excel"/>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-12">
          <div class="card shadow">
            <div class="card-header">
                <span class="card-title h6 font-weight-bold text-primary">Agent Commissions Release Data table</span>
                <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-sm">
                <thead class="thead-dark">
                <tr>
                    <th>Amount</th>
                    <th>Date Released</th>
                </tr>
                </thead>
                <tbody class="font-weight-light">
                @foreach($agentcommissionrelease as $recipient)
                    <tr class="mx-md-n5">
                    <td>{{$recipient->amount ?? 0}}</td>
                    <td>{{$recipient->date_released ?? 0}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Amount</th>
                    <th>Date Released</th>
                </tr>
                </tfoot>
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
