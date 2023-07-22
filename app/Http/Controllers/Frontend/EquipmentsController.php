<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index(){
        return view('frontend.facilities.equipments');
    }
}
