<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OfferStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Offer;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index',compact('reservations'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offers = Offer::where('status', OfferStatus::Available)->get();
        return view('admin.reservations.create',compact('offers'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        Reservation::create($request->validated());

        return to_route('admin.reservations.index')->with('success','Rezervacija kreirana!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        $offers = Offer::where('status', OfferStatus::Available)->get();
        return view('admin.reservations.edit', compact('reservation','offers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $reservation->update($request->validated());

        return to_route('admin.reservations.index')->with('success','Rezervacija promjenjena!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return to_route('admin.reservations.index')->with('warning','Rezervacija izbrisana!');


    }
}
