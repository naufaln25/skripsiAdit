<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\VenueDetail;
use Illuminate\Http\Request;
use App\Models\Venue;
use Illuminate\Support\Facades\Auth;

class VenueDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Venue $venue)
    {
        return view('venue-detail', [
            'venue' => $venue
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Venue $venue)
    {
        // mapping request data
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['venue_id'] = $venue->id;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VenueDetail  $venueDetail
     * @return \Illuminate\Http\Response
     */
    public function show(VenueDetail $venueDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VenueDetail  $venueDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(VenueDetail $venueDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VenueDetail  $venueDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VenueDetail $venueDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VenueDetail  $venueDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(VenueDetail $venueDetail)
    {
        //
    }
}
