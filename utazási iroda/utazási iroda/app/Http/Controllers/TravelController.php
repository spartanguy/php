<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $countries = Country::paginate(10);

        return view('index', compact('countries'));
    }

    public function show(Country $country)
    {
        $country->load('travels');

        return view('show', compact('country'));
    }
}
