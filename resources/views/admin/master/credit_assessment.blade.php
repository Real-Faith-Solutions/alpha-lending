@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Credit Assessment</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active">Credit Assessment</li>
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
                        <input type="date" class="form-control" />
                      </div>
                    </div>

                    <div class="col-md">
                      <label for="basic-url" class="form-label">To</label>
                      <div class="input-group mb-3">
                        <input type="date" class="form-control" />
                      </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCreditAssessment"><i class="fa fa-plus"></i> Add Credit Assessment</button>                        
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-12">
          <div class="card shadow">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
              {{session('success')}}
            </div>
              
            @endif

            
            <div class="card-header">
                <span class="card-title h6 font-weight-bold text-primary">Credit Assessment Data table</span>
                <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="generalTable" class="table table-borderless table-striped table-sm"
                 style="border-radius: 3px; overflow: hidden; font-size: 0.85em;">
                    <thead class="thead-dark">
                    <tr>
                        <th>Actions</th>
                        <th>Form Number</th>
                        <th>Date</th>
                        <th>Client Name</th>
                        <th>Client Address</th>
                        <th>Contact Number</th>
                        <th>Business Expected Income per day</th>
                        <th>Credit Approve Amount</th>
                        <th>Credit Terms</th>
                        <th>Payment Mode</th>
                        <th>Special Notes</th>
                        <th>Agent Code</th>
                        <th>Agent Name</th>
                        <th>Asset Market Value</th>
                        <th>Loan Purpose</th>
                        <th>Total Revenue</th>
                        <th>Operating Expenses</th>
                        <th>Net Operating Income</th>
                        <th>Loan Payments</th>
                        <th>Debt Service Coverage Ratio</th>
                        <th>Approved Loan Amount</th>
                        <th>Loan Company</th>
                    </tr>
                    </thead>
                    <tbody class="font-weight-light">
                    @foreach($creditassessment as $recipient)
                        <tr class="mx-md-n5">
                      @if($recipient->loan_purpose =='Business Loan')
                        
                          <td>
                              <a target="_blank" href="{{ config('app.url') }}admin/funding/contract/{{ $recipient->id }}">
                                  <button class="btn btn-warning btn-sm"><i class="fa fa-print"></i></button>
                              </a>
                          </td>
                        
                      @else
                        
                          <td>
                              <a target="_blank" href="{{ config('app.url') }}admin/funding/print-or-cr/{{ $recipient->id }}">
                                  <button class="btn btn-warning btn-sm"><i class="fa fa-print"></i></button>
                              </a>
                          </td>
                        
                        @endif
                        <td>{{$recipient->form_number ?? 0}}</td>
                        <td>{{$recipient->date ?? 0}}</td>
                        <td>{{$recipient->client_name ?? 0}}</td>
                        <td>{{$recipient->client_address ?? 0}}</td>
                        <td>{{$recipient->contact_number ?? 0}}</td>
                        <td>{{$recipient->business_expected_income_per_day ?? 0}}</td>
                        <td>{{$recipient->credit_approve_amount ?? 0}}</td>
                        <td>{{$recipient->credit_terms ?? 0}}</td>
                        <td>{{$recipient->payment_mode ?? 0}}</td>
                        <td>{{$recipient->special_notes ?? 0}}</td>
                        <td>{{$recipient->agent_code ?? 0}}</td>
                        <td>{{$recipient->agent_name ?? 0}}</td>
                        <td>{{$recipient->asset_market_value ?? 0}}</td>
                        <td>{{$recipient->loan_purpose ?? 0}}</td>
                        <td>{{$recipient->total_revenue ?? 0}}</td>
                        <td>{{$recipient->operating_expenses ?? 0}}</td>
                        <td>{{$recipient->net_operating_income ?? 0}}</td>
                        <td>{{$recipient->loan_payments ?? 0}}</td>
                        <td>{{$recipient->debt_service_coverage_ratio ?? 0}}</td>
                        <td>{{$recipient->approve_loan_amount ?? 0}}</td>
                        <td>{{$recipient->loan_company ?? 0}}</td>
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
