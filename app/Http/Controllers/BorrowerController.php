<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrower;
use App\Models\BorrowerId;
use App\Models\CoMaker;
use App\Models\Collateral;
use App\Models\Reference;
use App\Models\CreditAssessment;
use Auth;

class BorrowerController extends Controller
{
    /**
     * @inheritDoc
     */
    protected function model()
    {
        return new Borrower;
    }

    public function addBorrower(Request $request){
        Borrower::create([
            'borrower_id' => $request->borrower_id,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'tin_id' => $request->tin_id,
            'nature_of_business' => $request->nature_of_business,
            'house_no_street_subdivision' => $request->house_no_street_subdivision,
            'barangay' => $request->barangay,
            'municipality' => $request->municipality,
            'province' => $request->province,
            'years_operating' => $request->years_operating,
            'branch' => $request->branch,
            'agent' => $request->agent,
            'credit_limit' => $request->credit_limit,
        ]);

        return "Creating Borrower Success!";
    }

    public function getBorrower(){
        $borrower = Borrower::all();

         return $borrower;
     }

    public function getBorrowers(){
        $borrower = Borrower::all();

         return $borrower;
    }

    // public function getBorrowerPage(Request $request){
    //     if(Auth::guest()){
    //         return redirect()->route('/');
    //     }
    //     $borrower = Borrower::all();
    //     if(Auth::check()){
    //     return view('admin.master.add_book', compact('borrower'))->render();
    //     }
    // }

    public function getBorrowerPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $borrower = CreditAssessment::all();
        if(Auth::check()){
        return view('admin.master.add_book', compact('borrower'))->render();
        }
    }

    public function getBorrowerEditPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $borrowerID = $request->id;
        $borrower = Borrower::query()
            ->where('id', $borrowerID)
            ->with(['comakers', 'references', 'borrowerids', 'collaterals'])
            ->first();

        $sumValues = $borrower->collaterals->sum('amount') * .12;
        if(Auth::check()){
        return view('admin.page_forms.edit_borrower',
            compact('borrower', 'borrowerID'))->render();
        }
        return response()->json([
            'borrower' => $borrower->name,
            'sum_values' => $sumValues,
            'borrower_comakers' => $borrower->comakers,
        ]);
    }

     public function addBorrowerId(Request $request){
        BorrowerId::create([
            'id_type' => $request->id_type,
            'id_no' => $request->id_no,
            'remarks' => $request->remarks,
            'borrower_id' => $request->borrower_id,
        ]);

        return "Success!";
    }

    public function getBorrowerIdByBorrowerId($borrowerID){
        $BorrowerID = BorrowerId::query()
            ->where('id', $borrowerID)
            ->first();

        return $BorrowerID;
    }

    public function addCollateral(Request $request){
        Collateral::create([
            'type_brand_vehicle' => $request->type_brand_vehicle,
            'chassis_no' => $request->chassis_no,
            'engine_no' => $request->engine_no,
            'plate_no' => $request->plate_no,
            'cr_no' => $request->cr_no,
            'or_no' => $request->or_no,
            'borrower_id' => 1,
        ]);

        return "Success!";
    }
    public function getCollateralByBorrowerID($borrowerID){
        $collateralbyborrowerid = Collateral::query()
            ->where('id', $borrowerID)
            ->first();

         return $collateralbyborrowerid;
    }

    public function addComakers(Request $request){
        CoMaker::create([
            'name' => $request->name,
            'address' => $request->address,
            'contact_numbers' => $request->contact_numbers,
            'id_no' => $request->id_no,
            'borrower_id' => $request->borrower_id,
        ]);

        return "Success!";
    }
    public function getComakersByBorrowerID($borrowerID){
        $comakers = Borrower::query()
            ->where('id', $borrowerID)
            ->get();

        return $comakers;
    }

    public function addReference(Request $request){
        $add = Reference::create([
            'name' => $request->name,
            'relationship' => $request->relationship,
            'borrower_id' => $request->borrower_id,
            'contact_numbers' => $request->contact_numbers,
        ]);

        return "Success!";
    }
    public function getReferenceByBorrowerID($borrowerID){
        $reference = Reference::query()
            ->where('id', $borrowerID)
            ->get();

        return $reference;
     }
}
