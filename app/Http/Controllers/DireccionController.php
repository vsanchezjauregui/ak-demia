<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Canton;
use App\Distrito;

class DireccionController extends Controller
{
    public function getCantones(Request $request, $provincia)
    {
        if($request->ajax()){
            $cantones = Canton::cantones($provincia);
            return response()->json($cantones);
        }
        
    }
    public function getDistritos(Request $request, $canton)
    {
        if($request->ajax()){
            $distritos = Distrito::where('numeroCanton', '=', $canton)->get();
            return response()->json($distritos);
        }
    } 
}