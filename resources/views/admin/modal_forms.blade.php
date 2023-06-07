<script>
    function submitDataForms(urls, formName, modalName){
        const url = urls;
        fetch(url, {
            method : "POST",
            body: new FormData(document.getElementById(formName)),
        }).then(
            response => response.text() // .json(), etc.
            // same as function(response) {return response.text();}
        ).then(
            html => console.log(html)
        );

        $('#'+modalName).modal('hide');
        //alert(response);
        //location.reload();
    }
</script>

<!-- TEST FORM FOR NEW CLIENT -->
<div class="modal fade" id="addNewClient">
    <div class="modal-dialog modal-lg">
        <form action="">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Request for Analysis</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs text-center" id="nav">
        <li><a href="#analysisInfo" data-toggle="tab"><div class="h5 p-3">Information</div></a></li>
        <li><a href="#analysisSampleCollection" data-toggle="tab"><div class="h5 p-3">Sample Collection Info</div></a></li>
        <li><a href="#analysisWorkOrder" data-toggle="tab"><div class="h5 p-3">Work Order Info</div></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
        <div class="tab-pane active p-3" id="analysisInfo">
            <div class="row">
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Account Name</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Account Name .." required>
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Contact Person</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Contact Person..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Phone..">
                </div>
                </div>

                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Mobile..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Client Type</label>
                    <select class="form-control">
                    <option>Regular</option>
                    <option>Walk-In</option>
                    </select>
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Email ..">
                </div>
                </div>
            </div>
        </div>
        <div class="tab-pane p-3" id="analysisSampleCollection">
            <div class="row">
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Collected by</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Name .." required>
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Date Collected</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Date ..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Time Collected</label>
                    <input type="time" class="form-control" id="" placeholder="Enter Time ..">
                </div>
                </div>

                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Microbial Testing</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Time ..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Change of Filter</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Time ..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Change of UV</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Time ..">
                </div>
                </div>
            </div>
        </div>
        <div class="tab-pane p-3" id="analysisWorkOrder">
            <div class="row">
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Source of Water Sample</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Source Water Sample .." required>
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Water Purpose</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Water Purpose ..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Test Purpose</label>
                    <input type="time" class="form-control" id="" placeholder="Enter Test Purpose ..">
                </div>
                </div>
                <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Customer Representative Name</label>
                    <input type="date" class="form-control" id="" placeholder="Enter Name ..">
                </div>
                </div>
            </div>
        </div>
        </div>

        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
        </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- IDENTIFICATION FORM -->
<div class="modal fade" id="addIdentification" tabindex="-1" role="dialog" aria-labelledby="Facility" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark shadow text-white" style="margin: -5px; border: none;">
                <div>
                    <h5 class="modal-title font-weight-light" id="Facility">ADD IDENTIFICATION</h5>
                    <div class="text-xs fw-100 text-gray-300"><i>Please fill out the entire fields...</i></div>
                </div>
                <span class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-fw fa-times"></i></span>
            </div>
            <br/>
            <form class="user" method="POST" id="addIdentificationForm" action="javascript:void(0);"
                onsubmit="submitDataForms('{{ config('app.url') }}api/v1/borrowerid/add', 'addIdentificationForm', 'addIdentification');">
                <div class="modal-body">
                    <div class="col-12" style="display: none;">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user text-capitilize" name="borrower_id" value={{ $borrowerID ?? '' }} placeholder="Enter Name ..">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user text-capitilize" name="id_type" placeholder="Enter ID Type ..">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="id_no" placeholder="Enter ID Number .."/>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control form-control-user" name="remarks" placeholder="Enter Remarks .."></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save changes</button></div>
            </form>
        </div>
    </div>
</div>


<!-- COLLATERAL FORM -->
<div class="modal fade" id="addCollateral" tabindex="-1" role="dialog" aria-labelledby="Facility" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark shadow text-white" style="margin: -5px; border: none;">
                <div>
                    <h5 class="modal-title font-weight-light" id="Facility">ADD COLLATERALS</h5>
                    <div class="text-xs fw-100 text-gray-300"><i>Please fill out the entire fields...</i></div>
                </div>
                <span class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-fw fa-times"></i></span>
            </div>
            <br/>
            <form class="user" method="POST" id="addCollateralForm" action="javascript:void(0);"
                onsubmit="submitDataForms('{{ config('app.url') }}api/v1/collateral/add', 'addCollateralForm', 'addCollateral');">
                <div class="modal-body">
                    <div class="col-12" style="display: none;">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user text-capitilize" name="borrower_id" value={{ $borrowerID ?? '' }} placeholder="Enter Name ..">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-5 form-group">
                            <input type="text" class="form-control form-control-user" name="type_brand_vehicle" placeholder="Enter Type/Brand/Vehicle ...">
                        </div>
                        <div class="col-6 form-group">
                            <input type="text" class="form-control form-control-user" name="chassis_no" placeholder="Enter Chassis No...">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-5 form-group">
                            <input type="text" class="form-control form-control-user" name="engine_no" placeholder="Engine No...">
                        </div>
                        <div class="col-6 form-group">
                            <input type="text" class="form-control form-control-user" name="plate_no" placeholder="Plate No...">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-5 form-group">
                            <input type="text" class="form-control form-control-user" name="cr_no" placeholder="CR No...">
                        </div>
                        <div class="col-6 form-group">
                            <input type="text" class="form-control form-control-user" name="or_no" placeholder="OR No...">
                        </div>
                    </div>
                </div>

                <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save changes</button></div>
            </form>
        </div>
    </div>
</div>


<!-- CO-MAKERS FORM -->
<div class="modal fade" id="addCoMakers" tabindex="-1" role="dialog" aria-labelledby="Facility" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark shadow text-white" style="margin: -5px; border: none;">
                <div>
                    <h5 class="modal-title font-weight-light" id="Facility">ADD CO-MAKERS</h5>
                    <div class="text-xs fw-100 text-gray-300"><i>Please fill out the entire fields...</i></div>
                </div>
                <span class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-fw fa-times"></i></span>
            </div>
            <br/>
            <form class="user" method="POST" id="addCoMakersForm" action="javascript:void(0);"
                onsubmit="submitDataForms('{{ config('app.url') }}api/v1/comakers/add', 'addCoMakersForm', 'addCoMakers');">
                <div class="modal-body">
                    <div class="col-12" style="display: none;">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user text-capitilize" name="borrower_id" value={{ $borrowerID ?? '' }} placeholder="Enter Name ..">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user text-capitilize" name="name" placeholder="Enter Name ..">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control form-control-user" name="address" placeholder="Enter Address .."></textarea>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-5 form-group">
                            <input type="text" class="form-control form-control-user" name="contact_numbers" placeholder="Contact Number ...">
                        </div>
                        <div class="col-6 form-group">
                            <input type="text" class="form-control form-control-user" name="id_no" placeholder="Enter ID No ...">
                        </div>
                    </div>
                </div>

                <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save changes</button></div>
            </form>
        </div>
    </div>
</div>


<!-- REFERENCES FORM -->
<div class="modal fade" id="addReferences" tabindex="-1" role="dialog" aria-labelledby="Facility" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark shadow text-white" style="margin: -5px; border: none;">
                <div>
                    <h5 class="modal-title font-weight-light" id="Facility">ADD REFERENCES</h5>
                    <div class="text-xs fw-100 text-gray-300"><i>Please fill out the entire fields...</i></div>
                </div>
                <span class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-fw fa-times"></i></span>
            </div>
            <br/>
            <form class="user" method="POST" id="addReferencesForm" action="javascript:void(0);"
                onsubmit="submitDataForms('{{ config('app.url') }}api/v1/reference/add', 'addReferencesForm', 'addReferences');">
                <div class="modal-body">
                    <div class="col-12" style="display: none;">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user text-capitilize" name="borrower_id" value={{ $borrowerID ?? '' }} placeholder="Enter Name ..">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user text-capitilize" name="name" placeholder="Enter Name ..">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="relationship" placeholder="Enter Relationship .."/>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="contact_numbers" placeholder="Enter Contact Number .."/>
                        </div>
                    </div>
                </div>

                <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save changes</button></div>
            </form>
        </div>
    </div>
</div>


<!-- COLLECTOR FORM -->
<div class="modal fade" id="addCollector" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Collector" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="modal-content" method="POST" id="addCollectorForm" action="javascript:void(0);"
        onsubmit="submitDataForms('{{ config('app.url') }}api/v1/collector/add', 'addCollectorForm', 'addCollector');">
            <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold text-uppercase" id="Collector">
                    Add collector profile
                </h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md">
                        <h6 class="mb-3 font-weight-bold">Collector Details</h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Firstname Lastname" required />

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="House number, Street, Subdivision, Barangay, City, Province" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Valid ID number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="valid_id_number" id="valid_id_number" placeholder=" 123-456-789-0123" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Designated area</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="designated_area" id="designated_area" placeholder="Caloocan City" required />
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">
                    <i class="bi bi-arrow-left"></i> Back to List
                </button>
                <button type="submit" class="btn btn-primary rounded">
                    <i class="bi bi-box-arrow-down"></i> Save changes
                </button>
            </div>
        </form>
    </div>
</div>


<!-- AGENT FORM -->
<form class="modal fade" id="addAgent" data-bs-keyboard="false" tabindex="-1"
 aria-hidden="true" method="POST" action="javascript:void(0);" target="_self"
 onsubmit="submitDataForms('{{ config('app.url') }}api/v1/agent/add', 'addAgent', 'addAgent');">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold fs-3 text-uppercase" id="staticBackdropLabel">
                    Add agent profile
                </h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md">
                        <h6 class="mb-3 font-weight-bold">Agent Details</h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Firstname, Lastname" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="House number, Street, Subdivision, Barangay, City, Province" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Valid ID number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="valid_id_number" id="valid_id_number" placeholder="123-456-789-0123" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">
                    <i class="bi bi-arrow-left"></i> Back to List
                </button>
                <button type="submit" class="btn btn-primary rounded">
                    <i class="bi bi-box-arrow-down"></i> Save changes
                </button>
            </div>
        </div>
    </div>
</form>


<!-- PAYMENT FORM -->
<form class="modal fade" id="addPayment" data-bs-keyboard="false" tabindex="-1"
 aria-hidden="true" method="POST" action="javascript:void(0);"
 onsubmit="submitDataForms('{{ config('app.url') }}api/v1/payment/add', 'addPayment');">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold fs-3 text-uppercase" id="staticBackdropLabel">
                    Add payment
                </h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md row px-5">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-3 text-xs">Loan ID</div>
                                    <div class="col-9 text-secondary">
                                        <div class="input-group mb-3">
                                            <input class="form-control text-white bg-primary font-weight-bold" id="loan_id" name="loan_id" type="text" required readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-xs">Borrower Name</div>
                                    <div class="col-9 text-secondary">
                                        <div class="input-group mb-3">
                                            <input class="form-control text-white bg-primary font-weight-bold" id="borrower" name="borrower" type="text" required readonly/>
                                        </div>
                                    </div>
                                </div>
                            {{-- <div class="row">
                                <div class="col-3 text-xs">Payment Schedule ID</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control text-white bg-primary font-weight-bold" id="payment_schedule_id" name="payment_schedule_id" type="text" required readonly/>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-3 text-xs">Due Amount</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="due_amount" name="" type="text" required  readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-xs">Amount</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="amount_paid" name="payment_start_date" type="number" required onchange='amount()'/>
                                    </div>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-3 text-xs">Total Balance</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="total_balance" name="total_balance" type="text" required readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-xs">Short/Over</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="short_over" name="short_over" type="text" required readonly/>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-3 text-xs">Outstanding Balance</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" name="outstanding_balance" type="number" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-xs">Receivable</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" name="receivable" type="number" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-xs">Total Payment</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" name="total_payment" type="number" required />
                                    </div>
                                </div>
                            </div> --}}
                            
                        </div>

                        <div class="col-6">
                            <div class="row">
                                <div class="col-3 text-xs">Payment Date</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" placeholder="Date" id="due_date" name="due_date" required readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-xs">Maturiy Date</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" placeholder="Date" id="maturity_date" name="maturity_date" required readonly/>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-3 text-xs">Maturity Date</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" placeholder="Date" name="maturity_date" type="date" required />
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-3 text-xs">Payment Type</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control user" name="payment_type" onchange="paymentType(this.value)">
                                            <option selected disabled>-Please Select-</option>
                                            <option value="Cash payment">Cash</option>
                                            <option value="Cheque payment">Cheque</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="cheque-details" style="display: none">
                                <div class="row">
                                    <div class="col-3 text-xs">BANK NAME</div>
                                    <div class="col-9 text-secondary">
                                        <div class="input-group mb-3">
                                            <input class="form-control" placeholder="Bank name" name="bank_name" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-xs">CHEQUE NUMBER</div>
                                    <div class="col-9 text-secondary">
                                        <div class="input-group mb-3">
                                            <input class="form-control" placeholder="Cheque number" name="cheque_number" type="text" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3 text-xs">Status</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control user" name="loan_status">
                                            <option selected disabled>-Please Select-</option>
                                            <option value="paid">Paid</option>
                                            <option value="unpaid">Unpaid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="cheque-details" style="display: none">
                                <div class="row">
                                    <div class="col-3 text-xs">Paid</div>
                                    <div class="col-9 text-secondary">
                                        <div class="input-group mb-3">
                                            <input class="form-control" placeholder="Paid" name="paid" type="text" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-xs">Unpaid</div>
                                    <div class="col-9 text-secondary">
                                        <div class="input-group mb-3">
                                            <input class="form-control" placeholder="unpaid" name="unpaid" type="text" readonly/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-3 text-xs">Penalty</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="penalty" name="penalty" type="number" required />
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-3 text-xs">Penalty Balance</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="penalty_balance" name="penalty_balance" type="number" required />
                                    </div>
                                </div>
                            </div>
                            
                            {{-- <div class="row">
                                <div class="col-3 text-xs">Contact Numbers</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" name="contact_numbers" type="number" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-xs">Loan Description</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" placeholder="Description..." name="loan_description" type="text" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-xs">Document Number</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" placeholder="Document No..." name="document_no" type="text" required />
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        </div>

                        

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">
                    <i class="bi bi-arrow-left"></i> Back to List
                </button>
                <button type="submit" class="btn btn-primary rounded" data-bs-dismiss="modal" onclick="showAlert()">
                    <i class="bi bi-box-arrow-down"></i> Save changes
                </button>
            </div>
        </div>
    </div>
</form>


<!-- CREDIT ASSESSMENT FORM -->
<form class="modal fade" id="addCreditAssessment" data-bs-keyboard="false" tabindex="-1"
 aria-hidden="true" method="POST" action="javascript:void(0);"
 onsubmit="submitDataForms('{{ config('app.url') }}api/v1/loans/register', 'addCreditAssessment', 'addCreditAssessment');">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold fs-3 text-uppercase" id="staticBackdropLabel">
                    Add credit assessment
                </h5>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-3 font-weight-bold">Personal Details</h6>
                        <div class="row">
                            <div class="col-sm-3">Loan Company</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <select class="form-select form-control" name="loan_company" onchange="loanCompany(this.value)">
                                        <option value="EQ Grant">EQ Grant</option>
                                        <option value="Alpha Lending">Alpha Lending</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Loan Company ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    {{-- <input class="input-group-text col-3" id="display_loan_company" type="text" value="EQ" disabled> --}}
                                    <input class="form-control" name="loan_company_id" type="text" value="EQ-" required autofocus/>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Borrower ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="borrowers_id" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Payment ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="payment_id" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Credit Assesment ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="creditassessment_id" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Collector ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="collector_id" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Agent ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="agent_id" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Form number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="form_number" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="date" type="date" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Client name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="client_name" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Client address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="client_address" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Contact number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="contact_number" type="text" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6 class="mb-3 font-weight-bold">Assessment Details</h6>
                        <div class="row">
                            <div class="col-sm-3">Loan Purpose</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <select class="form-select form-control" name="loan_purpose">
                                        <option selected disabled>-Please Select-</option>
                                        <option value="Business Loan">Business Loan</option>
                                        <option value="OR/CR Loan">OR/CR Loan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">Asset Market Value</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="asset_market_value" type="number" required />
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3">Total Revenue</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="total_revenue" type="number" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">Operating Expenses</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="operating_expenses" type="number" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">Net Operating Income</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="net_operating_income" type="number" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">Loan Payments</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="loan_payments" type="number" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">Debt Service Coverage Ratio</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="debt_service_coverage_ratio" type="number" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">Approved Loan Amount</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="approve_loan_amount" type="number" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6 class="mb-3 font-weight-bold">Others</h6>

                        <div class="row">
                            <div class="col-sm-3">Business expected income per day</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="business_expected_income_per_day" type="number" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">Credit approved amount</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="credit_approve_amount" type="number" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">Credit terms</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" name="credit_terms" type="number" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">Payment mode</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    {{-- <input class="form-control" name="payment_mode" type="text" required /> --}}
                                    <select class="form-select form-control user" name="payment_mode" onchange="paymentType1(this.value)">
                                            <option selected disabled>-Please Select-</option>
                                            <option value="Cash payment">Cash</option>
                                            <option value="Cheque payment">Cheque</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="cheque-detail" style="display: none">
                            <div class="row">
                                <div class="col-3 ">Bank name</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" placeholder="Bank name" name="bank_name" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 ">Cheque number</div>
                                <div class="col-9 text-secondary">
                                    <div class="input-group mb-3">
                                        <input class="form-control" placeholder="Cheque number" name="bank_name" type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">Special notes</div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <select class="form-select form-control" name="special_notes">
                                        <option selected disabled>-Please Select-</option>
                                        <option>Approved</option>
                                        <option>Disapproved</option>
                                        <option>Pending for Review</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">
                    <i class="bi bi-arrow-left"></i> Back to List
                </button>
                <button type="submit" class="btn btn-primary rounded">
                    <i class="bi bi-box-arrow-down"></i> Save changes
                </button>
            </div>
        </div>
    </div>
</form>


<!-- BORROWER FORM -->
<form class="modal fade" id="addBorrower" data-bs-keyboard="false" tabindex="-1"
 aria-hidden="true" method="POST" action="javascript:void(0);"
 onsubmit="submitDataForms('{{ config('app.url') }}api/v1/borrower/add', 'addBorrower', 'addBorrower');">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold fs-3 text-uppercase" id="staticBackdropLabel">
                    Add new Borrower
                </h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-3 fw-bold">Personal Details</h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Borrower ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" placeholder="Alpha-" name="borrower_id" Value="Alpha-" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Lastname</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" placeholder="Dela Cruz" name="last_name" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Firstname</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" placeholder="Juan" name="first_name" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Middlename</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" placeholder="Middlename" name="middle_name" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Tin Number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" placeholder="123-456-789-1234" name="tin_id" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">E-mail</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" placeholder="juandelacruz@gmail.com" name="email" type="text" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nature of Bussiness</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" placeholder="Nature of business" name="nature_of_business" type="text" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6 class="mb-3 fw-bold">Others</h6>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" name="house_no_street_subdivision" placeholder="House no. / Street / Subdivision" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Barangay</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" placeholder="Barangay" name="barangay" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Municipality</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" placeholder="Municipality" name="municipality" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Province</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" placeholder="Province" name="province" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Years Operation</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" placeholder="Years operation" name="years_operating" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Branch</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" placeholder="Branch" name="branch" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Credit Limit</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="number" placeholder="Credit Limit" name="credit_limit" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Agent</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <select class="form-select form-control" name="agent" id="inputGroupSelect02">
                                        <option selected>-Please Select-</option>
                                        <option value="1">Agent 1</option>
                                        <option value="2">Agent 2</option>
                                        <option value="3">Agent 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">
                    <i class="bi bi-arrow-left"></i> Back to List
                </button>
                <button type="submit" class="btn btn-primary rounded">
                    <i class="bi bi-box-arrow-down"></i> Save changes
                </button>
            </div>
        </div>
    </div>
</form>


<!-- USER FORM -->
<form class="modal fade" id="addUser" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold text-uppercase fs-3" id="staticBackdropLabel">
                    Add user
                </h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-3 fw-bold">Personal Details</h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Lastname</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Firstname</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Middlename</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Contact number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">E-mail</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Employee ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6 class="mb-3 fw-bold">Account Details</h6>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Username</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Role</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <select class="form-select form-control" id="inputGroupSelect02">
                                        <option selected disabled>-Please Select-</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Approver</option>
                                        <option value="3">Case Manager</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="password" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Confirm password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="password" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Is Active?</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                    <label class="form-check-label" for="flexCheckChecked">

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-3 fw-bold">Scoping</h6>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Province</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <select class="form-select form-control" id="inputGroupSelect02">
                                        <option selected disabled>-Please Select-</option>
                                        <option value="1">Province 1</option>
                                        <option value="2">Province 2</option>
                                        <option value="3">Province 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Municipality</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="input-group mb-3">
                                    <select class="form-select form-control" id="inputGroupSelect02">
                                        <option selected disabled>-Please Select-</option>
                                        <option value="1">Municipality 1</option>
                                        <option value="2">Municipality 2</option>
                                        <option value="3">Municipality 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">
                    <i class="bi bi-arrow-left"></i> Back to List
                </button>
                <button type="submit" class="btn btn-primary rounded">
                    <i class="bi bi-box-arrow-down"></i> Save changes
                </button>
            </div>
        </div>
    </div>
</form>


<!-- ROLE FORM -->
<form class="modal fade" id="addRole" data-bs-keyboard="false" tabindex="-1"
 aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold text-uppercase fs-3" id="staticBackdropLabel">
                    Add roles
                </h5>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Roles</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Rights</h6>
                    </div>

                    <div class="col-sm-9 text-secondary">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked">
                                Dashboard
                            </label>
                            <br />
                            <input class="form-check-input" type="checkbox" id="flexCheckChecked1" />
                            <label class="form-check-label" for="flexCheckChecked1">
                                Rights Management
                            </label>
                            <br />
                            <input class="form-check-input" type="checkbox" id="flexCheckChecked2" />
                            <label class="form-check-label" for="flexCheckChecked2">
                                Master List
                            </label>

                            <ol>
                                <ul>
                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked2.1" />
                                    <label class="form-check-label" for="flexCheckChecked2.1">
                                        Add
                                    </label>
                                </ul>

                                <ul>
                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked2.2" />
                                    <label class="form-check-label" for="flexCheckChecked2.2">
                                        Revise
                                    </label>
                                </ul>

                                <ul>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2.3" />
                                    <label class="form-check-label" for="flexCheckChecked2.3">
                                        Delete
                                    </label>
                                </ul>

                                <ul>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2.4" />
                                    <label class="form-check-label" for="flexCheckChecked2.4">
                                        Upload
                                    </label>
                                </ul>

                                <ul>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2.5" />
                                    <label class="form-check-label" for="flexCheckChecked2.5">
                                        Approved/Disapproved
                                    </label>
                                </ul>
                            </ol>

                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3" />
                            <label class="form-check-label" for="flexCheckChecked3">
                                Reports
                            </label>
                            <br />

                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4" />
                            <label class="form-check-label" for="flexCheckChecked4">
                                Maintenance
                            </label>
                            <br />
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">
                        <i class="bi bi-arrow-left"></i> Back to List
                    </button>
                    <button type="submit" class="btn btn-primary rounded">
                        <i class="bi bi-box-arrow-down"></i> Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
