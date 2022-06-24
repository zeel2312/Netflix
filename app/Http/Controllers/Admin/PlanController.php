<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function addPlanForm(){
        return view('admin.plan.add_plan_form');
    }

    public function uploadPlan(Request $request){
        
        $plan = new Plan;
        $plan->name = $request->name;
        $plan->price = $request->price;
        $plan->no_of_devices = $request->no_of_devices;
        $plan->description = $request->description;
        $plan->save();

        return redirect(route('admin.allPlans'));
    }

    public function allPlans(){

        $plan = Plan::where('is_delete', 0)->get();
        return view('admin.plan.all_plans',compact('plan'));
    }

    public function editPlan($id){

        $plan = Plan::where('id',$id)->first();
        return view('admin.plan.edit_plan',compact('plan'));
    }

    public function updatePlan(Request $request){
        
        $plan = Plan::findorfail($request->id);
        $plan->name = $request->name;
        $plan->price = $request->price;
        $plan->no_of_devices = $request->no_of_devices;
        $plan->description = $request->description;
        $plan->save();

        return redirect(route('admin.allPlans'));
    }

    public function deletePlan($id){

        $plan = Plan::where('id',$id)->update(['is_delete' => 1]);
        return redirect(route('admin.allPlans'));

    }
}
