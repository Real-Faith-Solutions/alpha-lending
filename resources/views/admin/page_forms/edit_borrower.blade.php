@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<!--<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800"></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Page Forms</a></li>
            <li class="breadcrumb-item active">Add New Borrower</li>
          </ol>
        </div>
      </div>
    </div>
</section>-->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <!-- MultiStep Form -->
            <div class="row justify-content-center mt-0">
                <div class="col-12 text-center p-0">
                    <div class="card px-0 pt-4 pb-0 shadow">
                        <h2 class="text-gray-800"><strong>Update Borrower Form</strong></h2>
                        <p class="fs-title px-3 text-gray-600 font-weight-light">Fill all form field to go to next step</p><br/>
                        <center><div class="row">
                            <div class="col-md-12 mx-0">
                                <form class="user" id="msform" method="POST" action="javascript:void(0);"
                                onsubmit="submitDataForms('{{ config('app.url') }}api/v1/borrower/add', 'msform', 'addLabAcceptance');">
                                    <div class="row col-12">
                                        <div class="col-4 form-group">
                                            <span class="text-sm">Borrower ID</span><input type="text" class="form-control form-control-user" name="borrower_id" value="Alpha-"placeholder="Enter Last Name .."/>
                                        </div>
                                        <div class="col-4 form-group">
                                            <span class="text-sm">Last Name</span><input type="text" class="form-control form-control-user" name="last_name" placeholder="Enter Last Name .."/>
                                        </div>
                                        <div class="col-4 form-group">
                                            <span class="text-sm">First Name</span>
                                            <input type="text" class="form-control form-control-user" name="first_name" placeholder="Enter First Name ..">
                                        </div>
                                        <div class="col-4 form-group">
                                            <span class="text-sm">Middle Name</span>
                                            <input type="text" class="form-control form-control-user" name="middle_name" placeholder="Enter Middle Name ..">
                                        </div>

                                        <div class="col-3 form-group">
                                            <span class="text-sm">TIN No.</span>
                                            <input type="text" class="form-control form-control-user" name="tin_id" placeholder="Enter TIN No. ..">
                                        </div>
                                        <div class="col-4 form-group">
                                            <span class="text-sm">Nature of Business</span>
                                            <input type="text" class="form-control form-control-user" name="nature_of_business" placeholder="Enter Nature of Business ..">
                                        </div>
                                        <div class="col-5 form-group">
                                            <span class="text-sm">House No./Street/Subdivision</span>
                                            <input type="text" class="form-control form-control-user" name="house_no_street_subdivision" placeholder="Enter House No./Street/Subdivision ..">
                                        </div>

                                        <div class="col-4 form-group">
                                            <span class="text-sm">Barangay</span>
                                            <input type="text" class="form-control form-control-user" name="barangay" placeholder="Enter Barangay ..">
                                        </div>
                                        <div class="col-4 form-group">
                                            <span class="text-sm">Municipality</span>
                                            <input type="text" class="form-control form-control-user" name="municipality" placeholder="Enter Municipality ..">
                                        </div>
                                        <div class="col-4 form-group">
                                            <span class="text-sm">Province</span>
                                            <input type="text" class="form-control form-control-user" name="province" placeholder="Enter Province ..">
                                        </div>

                                        <div class="col-6 form-group">
                                            <span class="text-sm">Agent</span>
                                            <input type="text" class="form-control form-control-user" name="agent" placeholder="Enter Agent ..">
                                        </div>
                                        <div class="col-3 form-group">
                                            <span class="text-sm">Years Operating</span>
                                            <input type="text" class="form-control form-control-user" name="years_operating" placeholder="Years Operating ..">
                                        </div>
                                        <div class="col-3 form-group">
                                            <span class="text-sm">Branch</span>
                                            <input type="text" class="form-control form-control-user" name="branch" placeholder="Enter Branch ..">
                                        </div>

                                        <div class="col-4 form-group">
                                            <span class="text-sm">Credit Limit</span>
                                            <input type="number" class="form-control form-control-user" name="credit_limit" placeholder="Enter Credit Limit .." required>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-success px-3" style="width:auto;" value="Update Borrower"/>
                                    <br/><br/>
                                </form>
                            </div>
                        </div></center>
                    </div>
                </div>
            </div>

            <br/>

            <!-- IDENTIFICATIONS -->
            <div class="row justify-content-center mt-0">
                <div class="col-12 p-0">
                    <div class="card px-0 pt-4 pb-0 shadow">
                        <div class="row">
                            <div class="col-6 text-left">
                                <p class="h3 text-gray-800 px-3"><strong>Identifications</strong></p>
                                <p class="px-3 text-gray-600 font-weight-light">Fill all form field to go to next step</p>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-success btn-sm m-3" data-bs-toggle="modal" data-bs-target="#addIdentification"><i class="fa fa-plus"></i> Add ID</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <table id="example1" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID Type</th>
                                            <th>ID No</th>
                                            <th>Remarks</th>
                                            <th width="auto"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="font-weight-light">
                                    @foreach($borrower->borrowerids as $item)
                                        <tr class="mx-md-n5">
                                        <td>{{$item->id_type ?? 0}}</td>
                                        <td>{{$item->id_no ?? 0}}</td>
                                        <td>{{$item->remarks ?? 0}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br/>

            <!-- COLLATERALS -->
            <div class="row justify-content-center mt-0">
                <div class="col-12 p-0">
                    <div class="card px-0 pt-4 pb-0 shadow">
                        <div class="row">
                            <div class="col-6 text-left">
                                <p class="h3 text-gray-800 px-3"><strong>Collaterals</strong></p>
                                <p class="px-3 text-gray-600 font-weight-light">Fill all form field to go to next step</p>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-success btn-sm m-3" data-bs-toggle="modal" data-bs-target="#addCollateral"><i class="fa fa-plus"></i> Add Collateral</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <table id="example1" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Type Brand Vehicle</th>
                                            <th>Chassis No</th>
                                            <th>Engine No</th>
                                            <th>Plate No</th>
                                            <th>CR No</th>
                                            <th>OR No</th>
                                            <th width="auto"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="font-weight-light">
                                    @foreach($borrower->collaterals as $item)
                                        <tr class="mx-md-n5">
                                        <td>{{$item->id_type ?? 0}}</td>
                                        <td>{{$item->id_no ?? 0}}</td>
                                        <td>{{$item->remarks ?? 0}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br/>

            <!-- COMAKERS -->
            <div class="row justify-content-center mt-0">
                <div class="col-12 p-0">
                    <div class="card px-0 pt-4 pb-0 shadow">
                        <div class="row">
                            <div class="col-6 text-left">
                                <p class="h3 text-gray-800 px-3"><strong>Co-Makers</strong></p>
                                <p class="px-3 text-gray-600 font-weight-light">Fill all form field to go to next step</p>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-success btn-sm m-3" data-bs-toggle="modal" data-bs-target="#addCoMakers"><i class="fa fa-plus"></i> Add Co-Makers</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <table id="example1" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Contact No</th>
                                            <th>ID No</th>
                                            <th width="auto"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="font-weight-light">
                                    @foreach($borrower->comakers as $item)
                                        <tr class="mx-md-n5">
                                        <td>{{$item->name ?? 0}}</td>
                                        <td>{{$item->address ?? 0}}</td>
                                        <td>{{$item->contact_numbers ?? 0}}</td>
                                        <td>{{$item->id_no ?? 0}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br/>

            <!-- REFERENCES -->
            <div class="row justify-content-center mt-0">
                <div class="col-12 p-0">
                    <div class="card px-0 pt-4 pb-0 shadow">
                        <div class="row">
                            <div class="col-6 text-left">
                                <p class="h3 text-gray-800 px-3"><strong>References</strong></p>
                                <p class="text-sm px-3 text-gray-600 font-weight-light">Fill all form field to go to next step</p>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-success btn-sm m-3" data-bs-toggle="modal" data-bs-target="#addReferences"><i class="fa fa-plus"></i> Add References</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <table id="example1" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Relationship</th>
                                            <th>Contact Number</th>
                                            <th width="auto"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="font-weight-light">
                                    @foreach($borrower->references as $item)
                                        <tr class="mx-md-n5">
                                        <td>{{$item->name ?? 0}}</td>
                                        <td>{{$item->relationship ?? 0}}</td>
                                        <td>{{$item->contact_numbers ?? 0}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
