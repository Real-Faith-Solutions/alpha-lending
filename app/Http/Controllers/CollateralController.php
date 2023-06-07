<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collateral;

class CollateralController extends Controller
{
    public function addCollateral(Request $request){
        Collateral::create([
            'type_brand_vehicle' => $request->type_brand_vehicle,
            'chassis_no' => $request->chassis_no,
            'engine_no' => $request->engine_no,
            'plate_no' => $request->plate_no,
            'cr_no' => $request->cr_no,
            'or_no' => $request->or_no,
        ]);

        return "Success!";
    }

    public function getCollateral(Request $request){
        $collateral = Collateral::all();
 
         return $collateral;
     }
}
