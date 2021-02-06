<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use Illuminate\Http\Request;

class CheckoutContrller extends Controller
{
    public function getDistrict(Request $request)
    {
        $district  = ShipDistrict::where('division_id',$request->division_id)->get();
        return response()->json($district);
    }
    public function getState(Request $request)
    {
        $state  = ShipState::where('district_id',$request->district_id)->get();
        return response()->json($state);
    }
}
