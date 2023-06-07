<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgentItinerary;
use Auth;

class AgentItineraryController extends Controller
{
    public function addAgentItinerary(Request $request){
        AgentItinerary::create([
            'borrower' => $request->borrower,
            'contact_numbers' => $request->contact_numbers,
            'maturity_date' => $request->maturity_date,
            'outstanding_balance' => $request->outstanding_balance,
            'penalty_balance' => $request->penalty_balance,
            'weekly_payment' => $request->weekly_payment,
            'short_over' => $request->short_over,
            'amount_paid' => $request->amount_paid,
        ]);

        return "Success!";
    }

    public function getAgentItinerary(Request $request){
        $agentitnerary = AgentItinerary::all();
 
         return $agentitnerary;
     }
    
    public function getAgentItineraryPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $agentitnerary = AgentItinerary::all();
        
         //return $agentitnerary;
        if(Auth::check()){
        return view('admin.report.agent_itinerary', compact('agentitnerary'))->render();
        }
    }
}
