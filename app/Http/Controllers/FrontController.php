<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request): View
    {
        $countryCode = $request->headers->get('CF-IPCountry');
        /** @var Country|null $country  **/
        $country = $countryCode == null ?
            Country::find(1) :
            Country::where('code', $countryCode)->first();

        $countries = Country::all();
        return view("app", compact('country', 'countries'));
    }
}
