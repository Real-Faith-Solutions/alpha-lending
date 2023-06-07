<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href={{ asset('images/alpha_logo.png') }} />
    <title>Loan Management</title>

    <!-- Google Font: Source Sans Pro -->
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome -->

    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/charts-components.js') }}"></script>
</head>
<body class="hold-transition sidebar-mini">
    @include('admin.modal_forms')
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ config('app.url') }}admin/dashboard">
                <div class="sidebar-brand-icon">
                    <img src={{ asset('images/alpha_logo.png') }} style="height: 50px; width: 50px;" />                    
                </div>
                <div class="sidebar-brand-text">
                    <span>
                        Loan Management
                    </span>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ config('app.url') }}admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master File</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ config('app.url') }}admin/master-file/credit-assessment">Credit Assessment</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/master-file/add-borrower">Borrowers List</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/master-file/credit-application">Credit Applications</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/master-file/agent">Agents List</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/master-file/collector">Collectors List</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFunding"
                    aria-expanded="true" aria-controls="collapseFunding">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Funding</span>
                </a>
                <div id="collapseFunding" class="collapse" aria-labelledby="headingFunding"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Print Funding:</h6>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/funding/print-cheque">Print Voucher</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/funding/print-contract">Print Contract</a>

                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Workspace</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ config('app.url') }}admin/workspace/daily-collection">Payment Schedules</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/workspace/cash-payment">Cash Payment</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/workspace/cheque-payment">Cheque Payment</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Reports Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReports"
                    aria-expanded="true" aria-controls="collapseReports">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseReports" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/agent-itinerary">Agent Commissions</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/sales">Sales Report</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/closed-loan">Fully Paid Accounts</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/penalty-history">Penalty History</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/daily-collection">Collection <br/> Itinerary Report</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/total-amortization">Total Amortization</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/total-actual-payments">Total Actual Payments</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/collection-efficiency">Collection Efficiency</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rightsmanagemenet"
                    aria-expanded="true" aria-controls="rightsmanagemenet">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Rights Management</span>
                </a>
                <div id="rightsmanagemenet" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ config('app.url') }}admin/rights-management/user">Users</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/rights-management/roles">Roles</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ ucwords(Session::get('name')); }}</span>
                                <img class="img-profile rounded-circle"
                                    src="https://icons-for-free.com/download-icon-business+costume+male+man+office+user+icon-1320196264882354682_512.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ config('app.url') }}logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-3">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

                <footer class="main-footer p-3">
                    <strong>Footer <a href="">Loan Management with SMS System</a>.</strong>
                    All rights reserved.
                </footer>
            </div>
        </div>
        <!-- ./wrapper -->

    <!-- jQuery -->
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Page level custom scripts -->
    <!--<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>-->
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <!--<script src="{{ asset('js/scripts.js') }}"></script>-->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="{{ asset('js/script.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#generalTable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copyHtml5',
                        attr:  {
                            title: 'Copy',
                            id: 'copyButton',
                            class: 'btn btn-primary btn-sm'
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        attr:  {
                            title: 'Excel',
                            id: 'button',
                            class: 'btn btn-success btn-sm'
                        }
                    },
                    {
                        extend: 'csvHtml5',
                        attr:  {
                            title: 'CSV',
                            id: 'button',
                            class: 'btn btn-warning btn-sm'
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        attr:  {
                            title: 'PDF',
                            id: 'button',
                            class: 'btn btn-danger btn-sm'
                        }
                    }
                ],
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            } );

            $('div.dataTables_filter input').addClass('px-2 mx-2');
            $('div.dataTables_filter input').attr('placeholder', 'Keyword here...');
        } );

        

        // $('#generalTable').DataTable( {
        //     buttons: [
        //         {
        //             extend: 'excelHtml5',
        //             text: 'Save current page',
        //             exportOptions: {
        //                 modifier: {
        //                     page: 'current'
        //                 }
        //             }
        //         }
        //     ]
        // } );

        // $(function () {
        // $("#example1").DataTable({
        //     "responsive": true, "lengthChange": false, "autoWidth": false,
        //     "buttons": [""]
        // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        // $('#example2').DataTable({
        //     "paging": true,
        //     "lengthChange": false,
        //     "searching": false,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": false,
        //     "responsive": true,
        // });
        // });

        // $(function () {
        //     bsCustomFileInput.init();
        // });
    </script>   
    </body>
</html>
