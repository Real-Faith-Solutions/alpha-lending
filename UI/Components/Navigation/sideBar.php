<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="" class="brand-link">
    <img src="../dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Loan Management</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
    <img src="../dist/img/avatar.png" class="img-square elevation-3"  alt="User Image">   </div>
    <div class="info">
        <a href="#" class="d-block">Fullname Example</a>
    </div>

    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="smslog.php" class="nav-link">
            <i class="nav-icon fas fa-file-signature"></i>
            <p>
            Sms Logs
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
            Loans
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="application.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Application</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="collateral.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Collateral</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="amortization.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Amortization</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="payment.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Payment</p>
            </a>
            </li>
        </ul>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
            Reports
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="application.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Loan Records</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="paymentReport.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Collections & Sales</p>
            </a>
            </li>
        </ul>
        </li>
        <li class="nav-item">
        <a href="usermanagement.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
            User Management
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../index.php" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
            Logout
            </p>
        </a>
        </li>

    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>