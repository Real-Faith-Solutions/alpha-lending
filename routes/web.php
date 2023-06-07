<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\Helpers;
use App\Http\Controllers\ForbesTopController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\AmortizationContoller;
use App\Http\Controllers\CollateralController;
use App\Http\Controllers\ChequeController;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\DeductionController;
use App\Http\Controllers\AgentItineraryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CollectorController;
use App\Http\Controllers\CreditAssessmentController;
use App\Http\Controllers\AgentCommissionReleaseController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ActionCommandController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
})->name('/');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::group([
    'prefix'     => 'api/v1',
], function () {
    Route::group([
        'prefix'     => 'borrower',
    ], function () {
        Route::post('add', [BorrowerController::class, 'addBorrower']);
        Route::get('record', [BorrowerController::class, 'getBorrower']);
    });

    Route::group([
        'prefix'     => 'agent',
    ], function () {
        Route::post('add', [AgentController::class, 'addAgent']);
        Route::get('record', [AgentController::class, 'getAgent']);
        Route::get('/profile/{id}', [AgentController::class, 'getAgentProfile']);
    });

    Route::group([
        'prefix'     => 'commission',
    ], function () {
        Route::get('add', [AgentCommissionReleaseController::class, 'addAgentCommissionRelease']);
        Route::get('record', [AgentCommissionReleaseController::class, 'getAgentCommissionRelease']);
    });

    Route::group([
        'prefix'     => 'collector',
    ], function () {
        Route::post('add', [CollectorController::class, 'addCollector']);
        Route::get('record', [CollectorController::class, 'getCollector']);
        Route::get('/profile/{id}', [CollectorController::class, 'getCollectorProfile']);
        Route::get('destroy/{id}', [CollectorController::class, 'destroyL'])->name('destroyL');
    });

    Route::group([
        'prefix'     => 'borrowerid',
    ], function () {
        Route::post('add', [BorrowerController::class, 'addBorrowerId']);
        Route::get('record', [BorrowerController::class, 'getBorrowerId']);
    });

    Route::group([
        'prefix'     => 'collateral',
    ], function () {
        Route::post('add', [CollateralController::class, 'addCollateral']);
        Route::get('record', [CollateralController::class, 'getCollateral']);
    });

    Route::group([
        'prefix'     => 'comakers',
    ], function () {
        Route::post('add', [BorrowerController::class, 'addComakers']);
        Route::get('record', [BorrowerController::class, 'getComakers']);
    });

    Route::group([
        'prefix'     => 'reference',
    ], function () {
        Route::post('add', [BorrowerController::class, 'addReference']);
        Route::get('record', [BorrowerController::class, 'getReference']);
    });

    Route::group([
        'prefix'     => 'payment',
    ], function () {
        Route::post('add', [LoanController::class, 'addNewPayment']);
        Route::get('record', [LoanController::class, 'getPayment']);
    });

    Route::group([
        'prefix'     => 'paymentschedule',
    ], function () {
        Route::get('add', [LoanController::class, 'addPaymentSchedule']);
        Route::get('record', [LoanController::class, 'getPaymentSchedule']);
    });

    Route::group([
        'prefix'     => 'deduction',
    ], function () {
        Route::get('add', [DeductionController::class, 'addNewDeduction']);
        Route::get('record', [DeductionController::class, 'getDeductions']);
    });

    Route::group([
        'prefix'     => 'loans',
    ], function () {
        Route::get('add', [LoanController::class, 'addNewLoan']);
        Route::get('record', [LoanController::class, 'getLoansByID']);
        Route::post('register', [LoanController::class, 'registerNewLoan']);

    });

    Route::group([
        'prefix'     => 'agent-itinerary',
    ], function () {
        Route::get('add', [AgentItineraryController::class, 'addAgentItinerary']);
        Route::get('record', [AgentItineraryController::class, 'getAgentItinerary']);
    });

    Route::group([
        'prefix'     => 'credit-assessment',
    ], function () {
        Route::post('add', [CreditAssessmentController::class, 'addCreditAssessment']);
        Route::get('record', [CreditAssessmentController::class, 'getCreditAssessment']);
    });

    Route::post('register-loan', [LoanController::class, 'registerLoanRecord']);

});

Route::group([
    'prefix'     => 'user',
    'middleware' => 'userauth',
], function () {
    Route::get('dashboard', [ForbesTopController::class, 'getMostCounts']);

    /// Table Records Functionality Routes
    Route::get('csv-records', [ForbesTopController::class, 'getRecipients']);
    Route::post('csv-search', [ForbesTopController::class, 'findRecipients']);

    /// CSV Functionality Routes
    Route::get('csv-upload', function () {
        return view('csvuploader');
    });
    Route::post('csv-upload', [ForbesTopController::class, 'uploadCSVContent']);

    Route::get('message', function () {
        return view('message');
    });

    Route::get('user-records', [UserController::class, 'getUsersTable'])->middleware('userauth');
});


/// User Auth Functionality Routes
Route::get('/login', function () {
    return view('login');
})->middleware('userauth');
Route::post('/login', [AuthController::class, 'userLogin'])->middleware('userauth');

Route::get('/forgot-password', function () {
    return view('forgot_password');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/logout', [AuthController::class, 'userLogout'])->middleware('userauth');
Route::get('/users', [UserController::class, 'getUsers'])->middleware('userauth');


Route::group([
    'prefix'     => 'admin',
    'middleware' => 'userauth',
], function () {
    Route::get('/', [DashboardController::class, 'getDashboardPage']);
    Route::get('/dashboard', [DashboardController::class, 'getDashboardPage']);

    Route::group([
        'prefix'     => 'master-file',
    ], function () {
        Route::get('/collector/view/{id}', function()
        {
            return view('admin.master.collector_profile');
        });
        Route::get('/credit-assessment', [CreditAssessmentController::class, 'getCreditAssessmentPage']);
        Route::get('/add-borrower', [BorrowerController::class, 'getBorrowerPage']);
        Route::get('/credit-application', [CreditAssessmentController::class, 'getCreditApplicationPage']);
        Route::get('/agent', [AgentController::class, 'getAgentPage']);
        Route::get('/collector', [CollectorController::class, 'getCollectorPage']);

        Route::get('/agent/profile/{id}', [AgentController::class, 'getAgentProfilePage']);
        Route::get('/collector/profile/{id}', [CollectorController::class, 'getCollectorProfilePage']);
    });

    Route::group([
        'prefix'     => 'master-list',
    ], function () {
        Route::get('/agent', [AgentController::class, 'getAgentPage']);
        Route::get('/collector', [CollectorController::class, 'getCollectorPage']);
        Route::get('/credit-assessment', [CreditAssessmentController::class, 'getCreditAssessmentPage']);
        Route::get('/credit-application', [CreditAssessmentController::class, 'getCreditApplicationPage']);
    });

    Route::group([
        'prefix'     => 'funding',
    ]
    , function () {
        Route::get('/print-cheque', [ChequeController::class, 'getPrintChequePage']);
        Route::get('/print-contract', [LoanController::class, 'getPrintContractUIPage']);
        Route::get('/print-or-cr/{id}', [CreditAssessmentController::class, 'getPrintOrCrPage']);
        // Route::get('/chattel', function (){
        //     return view('admin.funding.layout.chattel');
        // });
        // Route::get('/promissory/{id}', function (){
        //     return view('admin.funding.layout.promissory');
        // });
        Route::get('/business', function () {
            return view('admin.funding.business');
        })->name('business');
        Route::get('/orcr', function () {
            return view('admin.funding.orcr');
        })->name('orcr');

        Route::get('/contract/{id}', [LoanController::class, 'getPrintContractPage']);
        Route::get('/cheque/{id}', [ChequeController::class, 'getChequeFormat']);
    });

    Route::group([
        'prefix'     => 'workspace',
    ], function () {
        Route::get('agent-itinerary', [AgentItineraryController::class, 'getAgentItineraryPage']);
        Route::get('cash-payment', [LoanController::class, 'getCashPaymentPage']);
        Route::get('cheque-payment', [LoanController::class, 'getChequePaymentPage']);
        Route::get('/daily-collection', [LoanController::class, 'getPaymentSchedulePage']);
    });

    Route::group([
        'prefix'     => 'report',
    ], function () {
        Route::get('/daily-collection/{id}', [LoanController::class, 'getPaymentSchedule1ReportPage']);
        Route::get('/sales', [LoanController::class, 'getSalesPage']);
        Route::get('/closed-loan', [LoanController::class, 'getClosedLoansPage']);
        Route::get('/daily-collection', [LoanController::class, 'getPaymentScheduleReportPage']);
        Route::get('/agent-itinerary', [LoanController::class, 'getAgentCommissionsPage']);
        Route::get('/agent-commission', [AgentCommissionReleaseController::class, 'getAgentCommissionReleasePage']);
        Route::get('penalty-history', [LoanController::class, 'getPenaltyHistoryPage']);
        Route::get('/total-amortization', [LoanController::class, 'getTotalAmortizationPage']);
        Route::get('/total-actual-payments', [LoanController::class, 'getTotalActualPaymentsPage']);
        Route::get('/collection-efficiency', [LoanController::class, 'getCollectionEfficiencyPage']);


    });

    Route::group([
        'prefix'     => 'rights-management',
    ], function () {
        Route::get('roles', function()
        {
            return view('admin.rights_management.role');
        });
        Route::get('user', [ActionCommandController::class, 'index'])->name('user');
        Route::get('status/{id}', [ActionCommandController::class, 'status'])->name('status');
        Route::get('destroy/{id}', [CustomAuthController::class, 'destroy'])->name('destroy');
    });

    Route::group([
        'prefix'     => 'page-form',
    ], function () {
        Route::get('/add-borrower', function()
        {
            return view('admin.page_forms.add_borrower');
        });
        Route::get('/edit-borrower/{id}', [BorrowerController::class, 'getBorrowerEditPage']);
        Route::get('/loan-application', function()
        {
            return view('admin.page_forms.loan_application');
        });
    });
});

Route::group([
    'prefix'     => 'amortization',
], function () {
    Route::get('add', [AmortizationContoller::class, 'addAmortization']);
    Route::get('record', [AmortizationContoller::class, 'getAmortization']);
});

Route::group([
    'prefix'     => 'cheque',
], function () {
    Route::get('add', [ChequeController::class, 'addCheque']);
    Route::get('record', [ChequeController::class, 'getCheque']);
});
