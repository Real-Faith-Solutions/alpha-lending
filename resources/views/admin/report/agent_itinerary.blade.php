@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Agent Commission Report</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Report</a></li>
            <li class="breadcrumb-item active">Agent Commission</li>
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
                <div class="card-header bg-primary">
                    <span class="card-title h6 font-weight-light text-white">Page Actions</span>
                </div>

                <div class="card-body table-responsive">
                  <div class="row">
                    <div class="col-md">
                      <label for="basic-url" class="form-label">Select periodic</label>
                      <div class="input-group mb-3">
                        <select class="form-control" id="inputGroupSelect02">
                          <option selected>---</option>
                            <option value="1">Daily</option>
                            <option value="2">Weekly</option>
                            <option value="3">Monthly</option>
                            <option value="4">Semi Annually 1</option>
                            <option value="5">Semi Annually 2</option>
                            <option value="6">Annually</option>
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
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addAgent"><i class="fa fa-plus"></i> Add Agent</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-12">
          <div class="card shadow">
            <div class="card-header">
                <span class="card-title h6 font-weight-bold text-primary">Agent Commissions Data table</span>
                <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="generalTable" class="table table-borderless table-striped table-sm"
               style="border-radius: 3px; overflow: hidden; font-size: 0.85em;">
                <thead class="thead-dark">
                <tr>
                    <th>Actions</th>
                    <th>Loan ID</th>
                    <th>Borrower Name</th>
                    <th>Agent Name</th>
                    <th>Loan Amount</th>
                    <th>Loan Receivable</th>
                    <th>Total Commission</th>
                    <th>Maturity</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody class="font-weight-light">
                @foreach($records as $record)
                    <tr class="mx-md-n5">
                        <td><button class="btn btn-warning btn-sm"><i class="fa fa-print"></i></button></td>
                        <td>{{$record->id ?? 0}}</td>
                        <td>{{(($record->Loan->Borrower->last_name ?? '-') . ', ' . ($record->Loan->Borrower->first_name ?? '-') . ' '
                            . ($record->Loan->Borrower->middle_name ?? '-')) ?? "-"}}</td>
                        <td>{{$record->Agent->name ?? '-'}}</td>
                        <td>{{number_format($record->amount) ?? ''}}</td>
                        <td>{{number_format($record->receivable) ?? ''}}</td>
                        <td>{{number_format($record->amount * 0.05) ?? ''}}</td>
                        <td>{{$record->maturity_date ?? 0}}</td>
                        <td>{{strtoupper($record->status) ?? ''}}</td>
                    </tr>
                @endforeach
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
