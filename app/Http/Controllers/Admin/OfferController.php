<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferStoreRequest;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::all();
        return view('admin.offers.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OfferStoreRequest $request)
    {
        Offer::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'status'=>$request->status,
        ]);

        return to_route('admin.offers.index')->with('success','Ponuda kreirana!');
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
    public function edit(Offer $offer)
    {
        return view('admin.offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OfferStoreRequest $request, Offer $offer)
    {
        $offer->update($request->validated());

        return to_route('admin.offers.index')->with('success','Ponuda promijenja!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        $offer->reservations()->delete();

        return to_route('admin.offers.index')->with('danger','Ponuda izbrisana!');
    }
}
