<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deduction;

class DeductionController extends Controller
{
    public function addNewDeduction(Request $request){
        Deduction::create([
            'charge_type' => $request->charge_type,
            'amount' => $request->amount,
        ]);

        return "Success!";
}

    public function getDeductions(Request $request){
    $deduction = Deduction::all();

    return $deduction;
}
}
