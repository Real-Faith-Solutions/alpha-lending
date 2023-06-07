@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Borrowers List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active">Borrowers List</li>
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
                    {{-- <div class="card-body table-responsive">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addBorrower"><i class="fa fa-plus"></i> Add Borrower</button>                        
                    </div> --}}
                  </div>
                </div>
            </div>
        </div>

        <div class="col-12">
          <div class="card shadow">
            <div class="card-header">
                <span class="card-title h6 font-weight-bold text-primary">Borrowers Data table</span>
                <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
            </div>

            
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="generalTable" class="table table-borderless table-striped table-sm"
                    style="border-radius: 3px; overflow: hidden; font-size: 0.85em;">
                    <thead class="thead-dark">
                    <tr>
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
                    {{-- <th>Actions</th>
                    <th>Borrower ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>TIN No.</th>
                    <th>Nature Of Business</th>
                    <th>House No. / Street / Subdivision</th>
                    <th>Barangay</th>
                    <th>Municipality</th>
                    <th>Province</th>
                    <th>Years Operating</th>
                    <th>Branch</th>
                    <th>Agent</th>
                    <th>Credit Limit</th> --}}
                    </tr>
                    </thead>
                    <tbody class="font-weight-light">
                      @foreach($borrower as $recipient)
                         @if ($recipient->special_notes == 'Approved')
                        <tr class="mx-md-n5">
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
                        
                        {{-- <td>
                            <a href="{{ config('app.url') }}admin/page-form/edit-borrower/{{ $recipient->id ?? '' }}"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a>
                        </td>
                        <td>{{$recipient->borrower_id ?? 0}}</td>
                        <td>{{$recipient->client_name ?? 0}}</td>
                        <td>{{$recipient->first_name ?? 0}}</td>
                        <td>{{$recipient->middle_name ?? 0}}</td>
                        <td>{{$recipient->tin_id ?? ''}}</td>
                        <td>{{$recipient->natureofbusiness ?? ''}}</td>
                        <td>{{$recipient->house_no_street_subdivision ?? ''}}</td>
                        <td>{{$recipient->barangay ?? 0}}</td>
                        <td>{{$recipient->municipality ?? ''}}</td>
                        <td>{{$recipient->province ?? ''}}</td>
                        <td>{{$recipient->years_operating ?? ''}}</td>
                        <td>{{$recipient->branch ?? ''}}</td>
                        <td>{{$recipient->agent ?? ''}}</td>
                        <td>{{ number_format($recipient->credit_limit ?? 0) }}</td>
                        </tr> --}}
                        @else
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
