<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DistrictRequest;
use App\Http\Requests\DivisionRequest;
use App\Http\Requests\StateRequest;
use App\Models\ShipDistrict;
use App\Models\ShipDivision;
use App\Models\ShipState;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShippingAreaController extends Controller
{
    public function index()
    {
        $division = ShipDivision::latest()->get();
        return view('admin.shipping-division.index',compact('division'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'division_name' => 'required|unique:ship_divisions,division_name',
        ]);
        $division = new ShipDivision();
        $division->division_name = $request->division_name;
        $division->created_at = Carbon::now();
        if($division->save()){
            $notification=array(
                'message'=>'Successfully Save Division',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function edit($id)
    {
        $editdata = ShipDivision::find($id);
        return view('admin.shipping-division.edit',compact('editdata'));
    }
    public function update(DivisionRequest $request,$id)
    {
        $division = ShipDivision::find($id);
        $division->division_name = $request->division_name;
        $division->created_at = Carbon::now();
        if($division->save()){
            $notification=array(
                'message'=>'Successfully Update Division',
                'alert-type'=>'success'
            );
            return redirect()->route('division')->with($notification);
        }

    }
    public function delete($id)
    {
        $division = ShipDivision::find($id);
        if($division->delete()){
            $notification=array(
                'message'=>'Successfully Delete Division',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
    // =================================district================
    public function disCreate()
    {
        $district = ShipDistrict::latest()->get();
        $division = ShipDivision::latest()->get();
        return view('admin.shipping-district.index',compact('district','division'));
    }
    public function disStore(Request $request)
    {
        $request->validate([
            'division_id' => 'required',
            'district_name' => 'required|unique:ship_districts,district_name',
        ]);
        $district = new ShipDistrict();
        $district->division_id = $request->division_id;
        $district->district_name = $request->district_name;
        $district->created_at = Carbon::now();
        if($district->save()){
            $notification=array(
                'message'=>'Successfully Save District',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function disEdit($id)
    {
        $editdata = ShipDistrict::find($id);
        $division = ShipDivision::latest()->get();
        return view('admin.shipping-district.edit',compact('editdata','division'));
    }
    public function disUpdate(DistrictRequest $request,$id)
    {
        $district = ShipDistrict::find($id);
        $district->division_id = $request->division_id;
        $district->district_name = $request->district_name;
        $district->updated_at = Carbon::now();
        if($district->save()){
            $notification=array(
                'message'=>'Successfully Update District',
                'alert-type'=>'success'
            );
            return redirect()->route('district')->with($notification);
        }

    }
    public function disDelete($id)
    {
        $district = ShipDistrict::find($id);
        if($district->delete()){
            $notification=array(
                'message'=>'Successfully Delete district',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
    // ===========================state===================
    public function stateCreate()
    {
        $state = ShipState::latest()->get();
        $division = ShipDivision::latest()->get();
        return view('admin.shipping-state.index',compact('state','division'));
    }
    public function getdistrict(Request $request)
    {
        $district  = ShipDistrict::where('division_id',$request->division_id)->get();
        return response()->json($district);
    } 
    public function stateStore(Request $request)
    {
        $request->validate([
            'division_id' => 'required',
            'district_id' => 'required',
            'state_name' => 'required|unique:ship_states,state_name',
        ]);
        $state = new ShipState();
        $state->division_id = $request->division_id;
        $state->district_id = $request->district_id;
        $state->state_name = $request->state_name;
        $state->created_at = Carbon::now();
        if($state->save()){
            $notification=array(
                'message'=>'Successfully Save State',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function stateEdit($id)
    {
        $editdata = ShipState::find($id);
        return view('admin.shipping-state.edit',compact('editdata'));
    }
    public function stateUpdate(StateRequest $request,$id)
    {
        $state = ShipState::find($id);
        $state->division_id = $request->division_id;
        $state->district_id = $request->district_id;
        $state->state_name = $request->state_name;
        $state->updated_at = Carbon::now();
        if($state->save()){
            $notification=array(
                'message'=>'Successfully Update State',
                'alert-type'=>'success'
            );
            return redirect()->route('state')->with($notification);
        }
    }
    public function stateDelete($id)
    {
        $state = ShipState::find($id);
        if($state->delete()){
            $notification=array(
                'message'=>'Successfully Delete state',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
