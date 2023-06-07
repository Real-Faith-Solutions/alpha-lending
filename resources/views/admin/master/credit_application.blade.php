@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Credit Application</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active">Credit Application</li>
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
                  </div>
                </div>
            </div>
        </div>

        <div class="col-12">
          <div class="card shadow">
            <div class="card-header">
                <span class="card-title h6 font-weight-bold text-primary">Credit Application Data table</span>
                <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table  id="generalTable" class="table table-borderless table-striped table-sm"
                 style="border-radius: 3px; overflow: hidden; font-size: 0.85em;">
                    <thead class="thead-dark">
                    <tr>
                        <th>Actions</th>
                        <th>Status</th>
                        <th>Client Name</th>
                        <th>Client Address</th>
                        <th>Date</th>
                        <th>Contact Number</th>
                        <th>Mode Of Payment</th>
                        <th>Loan Purpose</th>
                        <th>Loan Company</th>
                        <th>Credit Terms</th>
                        <th>Business Expected Income Per Day</th>
                        <th>Credit Amount Approved</th>
                        <th>Asset Market Value</th>
                        <th>Total Revenue</th>
                        <th>Operating Expenses</th>
                        <th>Net Operation  Income</th>
                        <th>Loan Payments</th>
                        <th>Debt Service Coverage Ratio</th>
                        <th>Approve Loan Amount</th>
                    </tr>
                    </thead>
                    <tbody class="font-weight-light">
                    @foreach($creditassessment as $recipient)
                        <tr class="mx-md-n5">
                        <td></td>
                        <td><div class="badge badge-success">{{$recipient->special_notes ?? 0}}</div></td>
                        <td>{{$recipient->client_name ?? 0}}</td>
                        <td>{{$recipient->client_address ?? 0}}</td>
                        <td>{{$recipient->date ?? 0}}</td>
                        <td>{{$recipient->contact_number ?? 0}}</td>
                        <td>{{$recipient->payment_mode ?? 0}}</td>
                        <td>{{$recipient->loan_purpose ?? 0}}</td>
                        <td>{{$recipient->loan_company ?? 0}}</td>
                        <td>{{$recipient->credit_terms  ?? 0}} {{date('Y-m-d', strtotime("+". 7*($recipient->credit_terms) ." day"))}}</td>
                        <td>{{$recipient->business_expected_income_per_day ?? 0}}</td>
                        <td>{{$recipient->credit_approve_amount ?? 0}}</td>
                        <td>{{$recipient->asset_market_value ?? 0}}</td>
                        <td>{{$recipient->total_revenue ?? 0}}</td>
                        <td>{{$recipient->operating_expenses ?? 0}}</td>
                        <td>{{$recipient->net_operating_income ?? 0}}</td>
                        <td>{{$recipient->loan_payments ?? 0}}</td>
                        <td>{{$recipient->debt_service_coverage_ratio ?? 0}}</td>
                        <td>{{$recipient->approve_loan_amount ?? 0}}</td>
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
