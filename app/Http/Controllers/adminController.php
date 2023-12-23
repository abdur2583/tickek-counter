<?php

namespace App\Http\Controllers;

use view;
use App\Models\cls;
use App\Models\Trip;
use App\Models\booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data = booking::get();
        $seat = Trip::select('remaining_tickets')->where('id', 1)->get();
        return view('admin', compact('data', 'seat'));
    }
}
