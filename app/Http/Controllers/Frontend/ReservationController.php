<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\OfferStatus;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Reservation;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();


        $offers = Offer::where('status', OfferStatus::Available)->get();

        return view('reservations.index', compact('reservation', 'min_date', 'max_date', 'offers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'tel_number' => ['required'],
            'res_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'offer_id' => ['required'],
            'quantity' => ['required']
        ]);

        if (empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }
        $reservation->fill($validated);
        $reservation->save();
        $request->session()->forget('reservation');


        return redirect()->route('thankyou');
    }
}
