<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use Auth;

class AgentController extends Controller
{
    public function addAgent(Request $request){
        Agent::create([
            'name' => $request->name,
            'address' => $request->address,
            'valid_id_number' => $request->valid_id_number,
            'total_commissions' => $request->total_commissions,
            'total_released_commissions' => $request->total_released_commissions,
            'total_receivable_commissions' => $request->total_receivable_commissions,
            'total_referred_loans' => $request->total_referred_loans,
            'designated_area' => $request->designated_area,
        ]);

        return "Success!";
    }

    public function getAgent(Request $request){
        $agent = Agent::all();

         return $agent;
    }

    public function getAgentPage(Request $request){
        $agent = Agent::all();

        return view('admin.master.agent_list', compact('agent'))->render();
    }

    public function getAgentProfilePage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }

        $record = Agent::query()
                    ->where('id', '=', $request->id)
                    ->first();
        if(Auth::check()){
        return view('admin.page_forms.agent_profile', compact('record'))->render();
        }
    }

    public function getAgentProfile(Request $request){
        $agent = Agent::query()
            ->where('id', $request->id)
            ->with(['loans'])
            ->first();

        $totalReferredLoans = count($agent->loans);

        $sumCommisions = $agent->loans->sum('amount') * .12;
        $sumReceivableCommisions = $agent->loans->sum('amount') * .12;
        // $sumReleasedCommisions = $agent->loans->sum();

        return response()->json([
            'total_referred_loans' => $totalReferredLoans,
            'total_commssions' => $sumCommisions,
            // 'total_receivable_commssions' => $sumReceivableCommisions,
            'name' => $agent->name,
            'address' => $agent->address,
            'valid_id_number' =>$agent->valid_id_number,
        ]);
    }
}
