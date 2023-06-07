<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collector;
use Illuminate\Support\Facades\Redirect;
use Auth;

class CollectorController extends Controller
{
    public function addCollector(Request $request){
        $create = Collector::create([
            'name' => $request->name,
            'address' => $request->address,
            'valid_id_number' => $request->valid_id_number,
            'designated_area' => $request->designated_area,
            'total_loans_handled' => $request->total_loans_handled,
            'total_handled_active_loans' => $request->total_handled_active_loans,
            'total_handled_matured_loans' => $request->total_handled_matured_loans,
            'total_ontime_collected' => $request->total_ontime_collected,
            'total_delayed_collected' => $request->total_delayed_collected,
        ]);

        return "Success!";
        // if(!$create){
        //     return redirect()->route('admin.master.collector_list')->with('error', 'error.');
        //     return Redirect::to('admin.master.collector')->with('success', 'The User Has Been success');
        // }
        //     return redirect()->route('admin.master.collector_list')->with('success', 'User Stored Successfully.');
        //     return Redirect::to('admin.master.collector')->with('error', 'The User Has Been error');
    }

    public function getCollector(Request $request){
        $collector = Collector::all();

         return $collector;
     }

     public function getCollectors(){
        $collector = Collector::all();

         return $collector;
     }

    public function getCollectorPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $collector = Collector::all();
        if(Auth::check()){
        return view('admin.master.collector_list', compact('collector'))->render();
        }
    }

    public function getCollectorProfilePage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $record = Collector::query()
                    ->where('id', '=', $request->id)
                    ->first();
        if(Auth::check()){
        return view('admin.page_forms.collector_profile', compact('record'))->render();
        }
    }

    public function getCollectorProfile(Request $request){
        $agent = Collector::query()
            ->where('id', $request->id)
            ->first();

        return $agent;
    }

    public function destroyL($id){
        $destroy = Collector::find($id);
        $destroy->delete();
        return Redirect::to('admin/master-file/collector')->with('success', 'The User Has Been Deleted');
    }
}
