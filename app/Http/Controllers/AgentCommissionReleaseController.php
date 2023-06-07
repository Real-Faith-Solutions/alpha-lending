<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgentCommissionRelease;
use Auth;

class AgentCommissionReleaseController extends Controller
{
    public function addAgentCommissionRelease(Request $request){
        AgentCommissionRelease::create([
            'amount' => $request->amount,
            'date_released' => $request->date_released,
            'agent_id' => $request->agent_id,
            'loan_id' => $request->loan_id,
        ]);

        return "Success agent commission!";
    }

    public function getAgentCommissionRelease(Request $request){
        $agentcommissionrelease = AgentCommissionRelease::all();
 
         return $agentcommissionrelease;
     }

     public function getAgentCommissionReleasePage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $agentcommissionrelease = AgentCommissionRelease::all();
        if(Auth::check()){
        return view('admin.report.agent_commission_release', compact('agentcommissionrelease'))->render();
        }
    }
}
