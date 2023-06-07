@extends('layout')

@section('content')
@php
$sumPayment = DB::table('payments')->get()->sum('payment_start_date');
$sumAmort = DB::table('credit_assessments')->get()->sum('approve_loan_amount');
// dd($sumPayment);
@endphp 
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content my-3">
    <div class="container-fluid" style="color: white;">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        @foreach ($data['items'] as $group)
            @foreach ($group['group_values'] as $item)
            <div class="col-lg-4 col-6">
                <div class="small-box {{ $item['color'] ?? '' }} p-3 mx-1 my-2">
                    <div class="inner">
                    <h3><b>{{ number_format($item['value']) ?? 0 }}</b></h3>

                    <p class="font-weight-light">{{ $item['label'] ?? '' }}</p>
                    </div>
                    <div class="icon">
                        {{-- <i class="fa fa-users"></i> --}}
                    </div>
                </div>
            </div>

            <!--<div class="card bg-danger text-white">
                <div class="card-body p-4">
                  <div class="float-end opacity-50 fs-1">
                    <i class="bi bi-check-lg"></i>
                  </div>
                  <h5 class="card-title fw-bold fs-1">{{ number_format($item['value']) ?? 0 }}</h5>
                  <p class="card-text">{{ $item['label'] ?? '' }}</p>
                </div>
                <div class="card-link">
                  <a class="nav-link">
                    More info <i class="bi bi-arrow-right-circle-fill"></i>
                  </a>
                </div>
            </div>-->
            @endforeach
        @endforeach
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->


<section class="content my-3">
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][4]['group_headers'] !!}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="delinquentStatus"></canvas>
                        </div>
                        <div class="mt-4 text-center small text-black">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> Past due
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Delinquent
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Fully paid
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Area Chart -->
            <div class="col-xl-8">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][3]['group_headers'] !!}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartCreditAssessment"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card p-3 shadow">
            <h6 class="m-0 font-weight-bold text-primary">CER Updates</h6>
            <div class="row">
                <div class="col-md mb-3">
                    <div class="text-right">
                        
                        
                        <h3 class="text-primary">

                            <p>{{number_format($sumPayment)}}</p>
                 
                        </h3>
                        <h5>Total Actual Payments</h5>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <div class="text-right">
                        <h3 class="text-primary"><p>{{number_format($sumAmort - $sumPayment)}}</p></h3>
                        <h5>Total Amortization</h5>
                    </div>
                </div>
                <div class="col-md mb-3">
                    <div class="text-right">
                        <h3 class="text-primary">{{$sumPayment / ($sumAmort - $sumPayment)}}</h3>
                        <h5>Total</h5>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="content my-3">
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][2]['group_headers'] !!}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartCourseType"></canvas>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][0]['group_headers'] !!}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="chartStatus"></canvas>
                        </div>
                        <div class="mt-4 text-center small text-black">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> Borrowers
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Approved
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Rejected
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{!! $data['charts'][1]['group_headers'] !!}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie">
                            <canvas id="chartLatePayments"></canvas>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>

<script type="text/javascript">
    pieChart('delinquentStatus', ['Past due', 'Delinquent', 'Fully paid'], ['38', '21', '15']);
    pieChart('chartStatus', ['Total Borrowers', 'Total Approved', 'Total Rejected'], ['50', '30', '20']);

    barChart('chartLatePayments', ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep' , 'Oct', 'Nov', 'Dec'],
     ['20000', '23000', '40000', '20000', '23000', '40000', '20000', '23000', '40000', '50000', '63000', '70000'], 80000, '₱');

    barChart('chartCourseType', ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep' , 'Oct', 'Nov', 'Dec'],
     ['20000', '23000', '40000', '20000', '23000', '40000', '20000', '23000', '40000', '50000', '63000', '70000'], 80000, '₱');

    barChart('chartCreditAssessment', ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep' , 'Oct', 'Nov', 'Dec'],
     ['20', '23', '40', '20', '23', '40', '20', '23', '40', '50', '63', '70'], 80, '');
</script>

@endsection
