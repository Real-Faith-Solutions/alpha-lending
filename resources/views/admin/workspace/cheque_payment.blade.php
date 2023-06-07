@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Cheque Payment</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Workspace</a></li>
            <li class="breadcrumb-item active">Cheque Payment</li>
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
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addPayment"><i class="fa fa-plus"></i> Add Payment</button>                        
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-12">
          <div class="card shadow">
            <div class="card-header">
                <span class="card-title h6 font-weight-bold text-primary">Cheque Data table</span>
                <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="generalTable" class="table table-borderless table-striped table-sm"
               style="border-radius: 3px; overflow: hidden; font-size: 0.85em;">
                <thead class="thead-dark">
                  <tr class="align-top">
                    <th>Borrower</th>
                    <th>Total Balance</th>
                    <th>Payment</th>
                    <th>Short Over</th>
                    <th>Due Date</th>
                    <th>Maturity Date</th>
                    <th>Payment Type</th>
                    <th>Penalty</th>
                    <th>Penalty Balance</th>
                    <th>Bank Name</th>
                    <th>Cheque Number</th>
                    <th>Loan Status</th>
                </tr>
                </thead>
                <tbody class="font-weight-light">
                @foreach($chequepayment as $recipient)
                  @if ($recipient->payment_type == 'Cheque payment')
                    <tr class="mx-md-n5">
                      <td>{{$recipient->borrower ?? '0'}}</td>
                      <td>{{number_format(($totalbalance),2) ?? '0'}}</td>
                      <td>{{number_format(($recipient->payment_start_date),2) ?? '0'}}</td>
                      <td>{{number_format(($recipient->short_over),2) ?? '0'}}</td>
                      <td>{{$recipient->due_date ?? '0'}}</td>
                      <td>{{$recipient->maturity_date ?? '0'}}</td>
                      <td>{{$recipient->payment_type ?? '0'}}</td>
                      <td>{{number_format(($recipient->penalty),2) ?? '0'}}</td>
                      <td>{{number_format(($recipient->penalty_balance),2) ?? '0'}}</td>
                      <td>{{$recipient->bank_name ?? 'null'}}</td>
                      <td>{{$recipient->cheque_number ?? 'null'}}</td>
                      @if ($recipient->loan_status == 'paid')
                      <td><div class="badge badge-success">{{$recipient->loan_status ?? '0'}}</div></td>@else<td><div class="badge badge-danger">{{$recipient->loan_status ?? '0'}}</div></td>
                      @endif
                      {{-- <td>
                        <button class="btn btn-primary btn-sm detail-btn" data-toggle="modal" data-target="#addPayment" data-id="{{ $recipient->id }}"><i class="fa fa-plus"></i> Add Payment</button>
                      </td> --}}
                    </tr>
                  @endif
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
