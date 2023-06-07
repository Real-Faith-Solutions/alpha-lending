<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Cheque;
use App\Models\Loan;
use App\Models\PaymentSchedule;
use App\Models\Creditassessment;
use App\Models\Agent;
use App\Models\Collector;
use Auth;
use DB;


class LoanController extends Controller
{
    public function addNewPayment(Request $request){
        Payment::create([
            'document_no' => $request->document_no ?? '',
            'borrower' => $request->borrower ?? '',
            'amount' => $request->amount,
            'total_balance' => $request->total_balance,
            'outstanding_balance' => $request->outstanding_balance,
            'receivable' => $request->receivable ?? '',
            'total_payment' => $request->total_payment,
            'short_over' => $request->short_over,
            'payment_start_date' => $request->payment_start_date ?? '',
            'maturity_date' => $request->maturity_date ?? '',
            'payment_type' => $request->payment_type,
            'due_date' => $request->due_date,
            'penalty' => $request->penalty,
            'penalty_balance' => $request->penalty_balance,
            'contact_numbers' => $request->contact_numbers ?? '',
            'loan_description' => $request->loan_description ?? '',
            'loan_status' => $request->loan_status ?? '',
            'agent' => $request->agent ?? '',
            'interest_rate' => $request->interest_rate ?? '',
            'is_void' => $request->is_void ?? '',
            'void_date' => $request->void_date ?? '',
            'remarks' => $request->remarks ?? '',
            'status' => $request->status ?? '',
            'date_cleared' => $request->date_cleared ?? '',
            'bank_name' => $request->bank_name ?? '',
            'cheque_number' => $request->cheque_number ?? '',
            'loan_id' => $request->loan_id ?? '',
        ]);
        
        return "Success!";

    }

    public function getPayment(Request $request){
       $payment = Payment::all();

        return $payment ;
    }

    public function addNewLoan(Request $request){
        $newloan = Loan::create([
            'document_no' => $request->document_no,
            'borrower' => $request->borrower,
            'amount' => $request->amount,
            'total_balance' => $request->total_balance,
            'outstanding_balance' => $request->outstanding_balance,
            'receivable' => $request->receivable,
            'total_payment' => $request->total_payment,
            'short_over' => $request->short_over,
            'payment_start_date' => $request->payment_start_date,
            'maturity_date' => $request->maturity_date,
            'payment_type' => $request->payment_type,
            'payment_date' => $request->payment_date,
            'penalty' => $request->penalty,
            'penalty_balance' => $request->penalty_balance,
            'contact_numbers' => $request->contact_numbers,
            'agent' => $request->agent,
            'interest_rate' => $request->interest_rate,
            'loan_description' => $request->loan_description,
            'loan_status' => $request->loan_status,
            'type' => $request->type,
            'terms' => $request->terms,
            'frequency' => $request->frequency,
            'remarks' => $request->remarks,
            'date_released' => $request->date_released,
            'agent_id' => $request->agent_id,
            
        ]);

        return $newloan;
    }


    public function getLoansByID(Request $request){
        $loansid = Loan::query()
            ->where('id', $request->id)
            ->first();

        return $loansid;
    }

    public function getLoans(Request $request){
        $loans = Loan::all();

        return $loans;
    }

    public function addPaymentSchedule(Request $request){
            PaymentSchedule::create([
                'borrower' => $request->borrower,
                'due_date' => $request->due_date,
                'day_of_week' => $request->day_of_week,
                'cheque_details' => $request->cheque_details,
                'due_amount' => $request->due_amount,
                'loan_id' => $request->loan_id,
                'collector_id' => $request->collector_id,
                'borrowers_id' => $request->borrowers_id,
                'payment_id' => $request->payment_id,
                'creditassessment_id' => $request->creditassessment_id,
                'maturity_date' => $request->maturity_date,
                'payment_date' => $request->payment_date,
                'payment_start_date' => $request->payment_start_date,
            ]);

            return "Add Payment Schedule Success!";
    }

    public function getPaymentSchedule(Request $request){                   
        $paymentschedule = PaymentSchedule::all();

        return $paymentschedule;
    }

    public function getPaymentSchedulePage(Request $request){
        $records = PaymentSchedule::query()
            ->with('Loan', 'Borrower', 'Collector')
            ->where('due_date', '=', date('Y-m-d'))
            ->get();
            // dd($records);
            // $status = DB::table('loans')->get()->first();
            // dd($status->status);
            
        return view('admin.workspace.daily_collection_reconciliation', compact('records'))->render();
    }

    public function getPaymentSchedule1ReportPage($id){
        return PaymentSchedule::findOrFail($id);
    }

    public function getPaymentScheduleReportPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = PaymentSchedule::query()
            ->with('Loan', 'Borrower', 'Collector', 'CreditAssessment', 'Payment')
            ->get();

        // $borrowers = DB::table('borrowers')->get()->first();
            // dd($records);
        if(Auth::check()){
        return view('admin.report.daily_collection_reconciliation', compact('records'))->render();
        }
    }

    // public function paymentStatus(Request $request, $id){
    //     $data = User::find($id);
    //     if ($data->status ==0){
    //         $data->status=1;
    //     }else{
    //         $data->status=0;
    //     }
    //     $data->save();
    
    //     return Redirect::to('admin/rights-management/user')->with('success', 'Status Has Been Changed');
    // }

    public function getPenaltyHistoryPage(Request $request){
        $records = Payment::query()
            ->with('Loan', 'Loan.Borrower')
            ->where('penalty', '>', 0)
            ->get();

        return view('admin.report.penalty_history', compact('records'))->render();
    }

    public function getSalesPage(Request $request){
        $records = Loan::all();

        return view('admin.report.sales', compact('records'))->render();
    }

    public function getAgentCommissionsPage(Request $request){
        $records = Loan::query()
            ->with('Agent', 'Borrower')
            ->get(); //dd($records);

        return view('admin.report.agent_itinerary', compact('records'))->render();
    }

    public function getClosedLoansPage(){
        $records = Loan::query()    
            ->where('loan_status', 'closed')
            ->get();

        return view('admin.report.closed_loan', compact('records'))->render();
    }

    public function getPrintChequePage(Request $request){
        $cheque = Loan::all();

        return view('admin.funding.print_cheque', compact('cheque'))->render();
    }

    public function getPrintContractUIPage(Request $request){
        $records = Loan::query()
            ->with('Agents')
            ->get();

       return view('admin.funding.print_contract', compact('records'))->render();
    }

    public function getCashPaymentPage(Request $request){
        $totalbalance = Payment::all()->sum('total_balance');
        $cashpayment = Payment::query()
            // ->where('payment_type', 'cash')
            ->get();
        // dd($Tblance = $totalbalance);
        return view('admin.workspace.cash_payment', compact('cashpayment', 'totalbalance'))->render();
    }

    public function getChequePaymentPage(Request $request){
        $totalbalance = Payment::all()->sum('total_balance');
        $chequepayment = Payment::query()
        // ->where('payment_type', 'cheque')
        ->get();

        return view('admin.workspace.cheque_payment', compact('chequepayment', 'totalbalance'))->render();
    }

    public function registerLoanRecord(Request $request){
        $registerloadrecord = Loan::all();

        return $registerloadrecord;
    }

    public function getTotalAmortizationPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $amounts = Payment::all()->sum('payment_start_date');
        $amort = Loan::all()->sum('amount');
        // $alls = Loan::all()->toArray();
            //  dd($alls);
        if(Auth::check()){
            return view('admin.report.total_amortization', compact('amounts', 'amort'))->render();
        }
    }

    public function getTotalActualPaymentsPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $actualpayments = Payment::all()->sum('payment_start_date');

        $tocollect = Loan::all()->sum('amount');
        // $alls = Loan::all()->toArray();
            //  dd($actualpayments);
        if(Auth::check()){
            return view('admin.report.total_actual_payments', compact('actualpayments', 'tocollect'))->render();
        }
    }

    public function getCollectionEfficiencyPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $actualpayments = Payment::all()->sum('payment_start_date');

        $tocollect = Loan::all()->sum('amount');
        // $alls = Loan::all()->toArray();
            //  dd($actualpayments);
        if(Auth::check()){
            return view('admin.report.collection_efficiency', compact('actualpayments', 'tocollect'))->render();
        }
    }

    public function registerNewLoan(Request $request){
        $agent = Agent::query()
        ->where('id', '=', $request->agent_id)
        ->first();

        $collector = Collector::query()
        ->where('id', '=', $request->collector_id)
        ->first();

        $creditassessment = app(CreditAssessmentController::class)->addCreditAssessment($request);

        $request->payment_start_date = date('Y-m-d', strtotime("+". 7*1 ." day"));
        $request->payment_date = date('Y-m-d', strtotime("+". 7*1 ." day"));
        $request->maturity_date = date('Y-m-d', strtotime("+". 7*($request->credit_terms) ." day"));

        $request->document_no = $request->form_number;
        $request->borrower = $request->client_name;
        $request->amount = $request->approve_loan_amount;
        $request->total_balance = 0;
        $request->outstanding_balance = 0;
        $request->receivable = $request->credit_approve_amount;
        $request->total_payment = 0;
        $request->short_over = 0;
        // $request->payment_start_date = date('Y-m-d', strtotime("+". 7*1 ." day"));
        // $request->maturity_date = date('Y-m-d', strtotime("+". 7*($request->credit_terms) ." day"));
        $request->payment_type = $request->payment_mode;
        // $request->payment_date = date('Y-m-d', strtotime("+". 7*1 ." day"));
        $request->penalty = 0;
        $request->penalty_balance = 0;
        $request->contact_numbers = $request->contact_number;
        $request->agent = 0;
        $request->interest_rate = 0;
        $request->loan_description = 0;
        $request->loan_status = strtolower($request->special_notes);
        $request->type = $request->loan_purpose;
        $request->terms = $request->credit_terms;
        $request->frequency = 0;
        $request->remarks = 0;
        $request->date_released = null;
        $request->agent_id = $creditassessment->agent_id;
        // $request->collector_id = $creditassessment->collector_id;
        // $request->borrowers_id = $creditassessment->borrowers_id;
        // $request->creditassessment_id = $creditassessment->creditassessment_id;

        if(str_contains(strtolower($request->special_notes), "approved")){
            $newLoanRecord = $this->addNewLoan($request);

            $request->document_no = $request->form_number;
            $request->borrower = $request->client_name;
            $request->agent = $agent->name;
            $request->loan_worth = $request->approve_loan_amount;
            $request->loan_interest = 0;
            $request->receivable = $request->credit_approve_amount;
            $request->total_deduction = 0;
            $request->bank = 0;
            $request->cheque_no = 0;
            $request->cheque_amount = $request->approve_loan_amount;

            $cheque = app(ChequeController::class)->addCheque($request);
            

            for($i = 1; $i <= $request->terms; $i++){
                $request->payment_start_date = date('Y-m-d', strtotime("+". 7*1 ." day"));
                $request->payment_date = date('Y-m-d', strtotime("+". 7* ($i) ." day"));
                $request->maturity_date = date('Y-m-d', strtotime("+". 7*($request->credit_terms) ." day"));
                $request->due_date = date('Y-m-d', strtotime("+". 7* ($i) ." day"));
                $request->day_of_week = date("D");
                $request->cheque_details = "";
                $request->due_amount = ($newLoanRecord->amount + ($newLoanRecord->amount * 0.03)) / $request->terms;
                $request->borrower = $request->client_name;
                $request->loan_id = $newLoanRecord->id;
                $this->addPaymentSchedule($request);
            }


        }

        return "Registered New Loan with ID# ".$creditassessment->id;
    }

    public function getPrintContractPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $loan = Loan::query()
        ->where('id', $request->id)
        ->first();

        // $amount = $loan->amount / $loan->terms + ;
        $amount = ($loan->amount + ($loan->amount * 0.03)) / $loan->terms;
        $amountToWord = self::convertNumberToWord($amount);
        $loanAmountToWord = self::convertNumberToWord($loan->amount);
        if(Auth::check()){
        return view('admin.funding.business', compact('loan', 'amount', 'amountToWord', 'loanAmountToWord'))->render();
        }
    }

    function convertNumberToWord($num = false)
    {
        $num = str_replace(array(',', ' '), '' , trim($num));
        if(! $num) {
            return false;
        }
        $num = (int) $num;
        $words = array();
        $list1 = array('', 'ONE', 'TWO', 'THREE', 'FOUR', 'FIVE', 'SIX', 'SEVEN', 'EIGHT', 'NINE', 'TEN', 'ELVEN',
            'TWELVE', 'THIRTEEN', 'FOURTEEN', 'FIFTEEN', 'SIXTEEN', 'SEVENTEEN', 'EIGHTEEN', 'NINETEEN'
        );
        $list2 = array('', 'TEN', 'TWENTY', 'THIRTY', 'FORTY', 'FIFTY', 'SIXTY', 'SEVENTY', 'EIGHTY', 'NINETY', 'HUNDRED');
        $list3 = array('', 'THOUSAND', 'MILLION', 'BILLION', 'TRILLION', 'QUADRILLION', 'QUINTILLION', 'sextillion', 'septillion',
            'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
            'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
        );
        $num_length = strlen($num);
        $levels = (int) (($num_length + 2) / 3);
        $max_length = $levels * 3;
        $num = substr('00' . $num, -$max_length);
        $num_levels = str_split($num, 3);
        for ($i = 0; $i < count($num_levels); $i++) {
            $levels--;
            $hundreds = (int) ($num_levels[$i] / 100);
            $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' HUNDRED' . ' ' : '');
            $tens = (int) ($num_levels[$i] % 100);
            $singles = '';
            if ( $tens < 20 ) {
                $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
            } else {
                $tens = (int)($tens / 10);
                $tens = ' ' . $list2[$tens] . ' ';
                $singles = (int) ($num_levels[$i] % 10);
                $singles = ' ' . $list1[$singles] . ' ';
            }
            $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
        } //end for loop
        $commas = count($words);
        if ($commas > 1) {
            $commas = $commas - 1;
        }
        return implode(' ', $words);
    }
}
