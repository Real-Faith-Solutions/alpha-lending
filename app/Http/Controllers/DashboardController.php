<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class DashboardController extends Controller
{
    public function getDashboardData(){ 
        $credit_assessment = DB::table('credit_assessments')->get();
        $loans = DB::table('loans')->get();
        $users = DB::table('users')->get();
        $rejected = DB::table('credit_assessments')->get('special_notes');
        // $pending = DB::table('credit_assessments')->get('special_notes')->count();
        // $receivable = DB::table('credit_assessments')->get('approve_loan_amount')->sum();
        // $test = app(CreditAssessmentController::class)->getCreditAssessment();
        /*$recordLabResults = app(LabAcceptanceController::class)->getLabAcceptace();
        $recordFacilities = app(FacilityController::class)->getFacility();
        $recordPayments = app(PaymentController::class)->getPayments();*/
        // dd($rejected);

        return collect([
            "items" => [
                [
                    "group_header" => "Client Statistics",
                    "group_values" => [
                        [
                            "label" => "Total Borrowers",
                            "value" => $credit_assessment->count() ?? 0,
                            "color" => "bg-info"
                        ],
                        [
                            "label" => "Total Loan Approved",
                            "value" => $credit_assessment->count('') ?? 0,
                            "color" => "bg-success"
                        ],
                        [
                            "label" => "Total Loan Rejected",
                            "value" => 0,
                            "color" => "bg-danger"
                        ],

                        [
                            "label" => "Total Overdue Payments",
                            "value" => /*$recordBorrowers->count() ?? */0,
                            "color" => "bg-danger"
                        ],
                        [
                            "label" => "Total Receivables",
                            "value" => $loans->sum('receivable') ?? 0,
                            "color" => "bg-warning"
                        ],
                        [
                            "label" => "Total Credit Assessments",
                            "value" => $credit_assessment->count('id') ?? 0,
                            "color" => "bg-info"
                        ],

                        [
                            "label" => "Total Matured Loans",
                            "value" => 0,
                            "color" => "bg-info"
                        ],
                        [
                            "label" => "Total Pending Credit Assessment",
                            "value" => 0,
                            "color" => "bg-success"
                        ],
                        [
                            "label" => "Total Users",
                            "value" => $users->count() ?? 0,
                            "color" => "bg-warning"
                        ]
                    ]
                ]
            ],
            "charts" => [
                [
                    "group_headers" => "Loan Status",
                    "labels" => ["Total Borrowers", "Total Rejected", "Total Approved"],
                    "values" => [
                        /*$recordClients->count() ?? */0,
                        /*$recordClients->where('type', 'Regular')->count() ?? */0,
                        /*$recordClients->where('type', 'Walk-In')->count() ?? */0
                    ]
                ],
                [
                    "group_headers" => "Most Late Payments",
                    "labels" => ["Total Lab Tests", "Total Lab Accepted", "Total Lab Rejected"],
                    "values" => [
                        /*$recordLabResults->count() ?? */0,
                        /*$recordLabResults->where('remarks', 'Accepted')->count() ?? */0,
                        /*$recordLabResults->where('remarks', 'Rejected')->count() ?? */0
                    ]
                ],
                [
                    "group_headers" => "Receivables Earnings Overview",
                    "labels" => ["Total Lab Tests", "Total Lab Accepted", "Total Lab Rejected"],
                    "values" => [
                        /*$recordLabResults->count() ?? */0,
                        /*$recordLabResults->where('remarks', 'Accepted')->count() ?? */0,
                        /*$recordLabResults->where('remarks', 'Rejected')->count() ?? */0
                    ]
                ],
                [
                    "group_headers" => "Credit Assessments Overview",
                    "labels" => ["Total Lab Tests", "Total Lab Accepted", "Total Lab Rejected"],
                    "values" => [
                        /*$recordLabResults->count() ?? */0,
                        /*$recordLabResults->where('remarks', 'Accepted')->count() ?? */0,
                        /*$recordLabResults->where('remarks', 'Rejected')->count() ?? */0
                    ]
                ]
                ,
                [
                    "group_headers" => "Delinquent account status",
                    "labels" => ["Total Lab Tests", "Total Lab Accepted", "Total Lab Rejected"],
                    "values" => [
                        /*$recordLabResults->count() ?? */0,
                        /*$recordLabResults->where('remarks', 'Accepted')->count() ?? */0,
                        /*$recordLabResults->where('remarks', 'Rejected')->count() ?? */0
                    ]
                ],
            ]
        ]);
    }

    public function getDashboardPage(){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $data = $this->getDashboardData();
        if(Auth::check()){
        return view('admin.dashboard', compact('data'))->render();
        }
    }
}
