<?php

namespace App\Http\Controllers;


use App\Models\Trip;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TicketController extends Controller {

    public function getTickets() {
        return view( 'ticket' );
    }
    public function storeTickets(Request $request) {
        $this->validate($request, [
            'distance' => 'required',
            'date' => 'required',
            'time' => 'required',
            'seat' => 'required',
        ]);
        Booking::create($request->input());
        $all_seat = Trip::where('id','1')->select('remaining_tickets')->get();

        $remain = $all_seat[0]->remaining_tickets -1;
        
        Trip::where('id', 1)->update(['remaining_tickets' => $remain]);
        return redirect()->back()->with('stored', 'booking Added Successfully');
    }
}
