<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountryLang;

class CountryLangController extends Controller
{
    public function index() {
        return response()->json(CountryLang::get(), 200);
    }

    public function show(CountryLang $country) {
        return response()->json($country, 200);
    }

    public function store(Request $request) {
        $country = CountryLang::create($request->all());
        return response()->json($country, 201);
    }
}
