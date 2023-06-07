@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Print Contract</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Funding</a></li>
            <li class="breadcrumb-item active">Print Contract</li>
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
                <span class="card-title h6 font-weight-bold text-primary">Contract Data table</span>
                <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="generalTable" class="table table-borderless table-striped table-sm"
               style="border-radius: 3px; overflow: hidden; font-size: 0.85em;">
                <thead class="thead-dark">
                <tr>
                    <th>Actions</th>
                    <th>Document No.</th>
                    <th>Borrower</th>
                    <th>Agent</th>
                    <th>Loan Amount</th>
                    <th>Loan Interest%</th>
                    <th>Receivable</th>
                    <th width="auto"></th>
                    <th width="auto"></th>
                    <th width="auto"></th>
                    <th width="auto"></th>
                </tr>
                </thead>
                <tbody class="font-weight-light">
                    @foreach($records as $record)
                        <tr class="mx-md-n5">
                          <td>
                            @if ($record->type === 'Business Loan')
                              <a target="_blank" href="{{ config('app.url') }}admin/funding/business">
                                  <button class="btn btn-warning btn-sm"><i class="fa fa-print"></i></button>
                              </a>
                            @else
                              <a target="_blank" href="{{ config('app.url') }}admin/funding/orcr">
                                  <button class="btn btn-warning btn-sm"><i class="fa fa-print"></i></button>
                              </a>
                            @endif
                          </td>
                          
                          <td>{{$record->document_no ?? 0}}</td>
                          <td>{{$record->borrower ?? 0}}</td>
                          <td>{{$record->agents->name ?? 0}}</td>
                          <td>{{$record->amount ?? ''}}</td>
                          <td>{{$record->interest_rate ?? ''}}</td>
                          <td>{{$record->receivable ?? ''}}</td>
                          {{-- <td><a href="#">Void Printed Cheque</a></td> --}}
                          <td><a href="#">Cheque Voucher</a></td>
                          <td><a href="#">PN</a></td>
                          <td><a href="#">View</a></td>
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
