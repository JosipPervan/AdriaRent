<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Equipment;
use App\Models\Offer;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $offers = Offer::all();
        return view('welcome', compact('categories','offers'));

    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
