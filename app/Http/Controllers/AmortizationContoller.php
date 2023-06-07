<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amortization;

class AmortizationContoller extends Controller
{
     public function addAmortization(Request $request){
        Amortization::create([
            'date' => $request->date,
            'payment' => $request->payment,
            'interest_paid' => $request->interest_paid,
            'interest_amount' => $request->interest_amount,
            'principal' => $request->principal,
            'balance' => $request->balance,
        ]);

        return "Success!";
    }

    public function getAmortization(Request $request){
        $amortization = Amortization::all();
 
         return $amortization;
     }
}
