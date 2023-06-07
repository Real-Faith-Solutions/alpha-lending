<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreditAssessment;
use Auth;

class CreditAssessmentController extends Controller
{
    public function addCreditAssessment(Request $request){
        $newCreditAssessment = CreditAssessment::create([
            'actions' => $request->actions,
            'form_number' => $request->form_number,
            'date' => $request->date,
            'client_name' => $request->client_name,
            'client_address' => $request->client_address,
            'contact_number' => $request->contact_number,
            'business_expected_income_per_day' => $request->business_expected_income_per_day,
            'credit_approve_amount' => $request->credit_approve_amount,
            'credit_terms' => $request->credit_terms,
            'payment_mode' => $request->payment_mode,
            'special_notes' => $request->special_notes,
            'agent_code' => $request->agent_code,
            'agent_name' => $request->agent_name,
            'asset_market_value' => $request->asset_market_value,
            'loan_purpose' => $request->loan_purpose,
            'total_revenue' => $request->total_revenue,
            'operating_expenses' => $request->operating_expenses,
            'net_operating_income' => $request->net_operating_income,
            'loan_payments' => $request->loan_payments,
            'debt_service_coverage_ratio' => $request->debt_service_coverage_ratio,
            'approve_loan_amount' => $request->approve_loan_amount,
            'loan_company' => $request->loan_company,
            'agent_id' => $request->agent_id,
            'collector_id' => $request->collector_id,
            'borrowers_id' => $request->borrowers_id,
            'creditassessment_id' => $request->creditassessment_id,
            'payment_id' => $request->payment_id,
            'payment_start_date' => $request->payment_start_date,
            'payment_date' => $request->payment_date,
            'maturity_date' => $request->maturity_date,
        ]);

        return $newCreditAssessment;
    }

    public function getCreditAssessment(Request $request){
        $creditassessment = CreditAssessment::all();

         return $creditassessment;
     }

    public function getCreditAssessmentPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $creditassessment = CreditAssessment::all();
        if(Auth::check()){
        return view('admin.master.credit_assessment', compact('creditassessment'))->render();
        }
    }

    public function getCreditApplicationPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $creditassessment = CreditAssessment::all();
        if(Auth::check()){
        return view('admin.master.credit_application', compact('creditassessment'))->render();
        }
    }

    public function getPrintOrCrPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $orcr = Creditassessment::query()
        ->where('id', $request->id)
        ->first();
        // dd($orcr);

        if(Auth::check()){
        return view('admin.funding.layout.chattel', compact('orcr'))->render();
        }
    }
}
