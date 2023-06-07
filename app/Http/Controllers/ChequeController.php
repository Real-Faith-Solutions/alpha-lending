<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cheque;
use App\Models\Loan;
use Auth;

class ChequeController extends Controller
{
    public function addCheque(Request $request){
        Cheque::create([
            'document_no' => $request->document_no,
            'borrower' => $request->borrower,
            'agent' => $request->agent,
            'loan_worth' => $request->loan_worth,
            'loan_interest' => $request->loan_interest,
            'receivable' => $request->receivable,
            'total_deduction' => $request->total_deduction,
            'bank' => $request->bank,
            'cheque_no' => $request->cheque_no,
            'cheque_amount' => $request->cheque_amount,
        ]);

        return "Creating Cheque Success!";
    }

    public function getCheque(Request $request){
        $cheque = Cheque::all();

         return $cheque;
     }

     public function getPrintChequePage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $cheque = Cheque::all();
        if(Auth::check()){
        return view('admin.funding.print_cheque', compact('cheque'))->render();
        }
     }

     public function getChequeFormat(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $cheque = Cheque::query()
        ->where('id', $request->id)
        ->first();

        $loanAmountToWord = self::convertNumberToWord($cheque->loan_worth);
        if(Auth::check()){
        return view('admin.funding.layout.cheque', compact('cheque', 'loanAmountToWord'))->render();
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
