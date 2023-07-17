<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountryLang;

class CountryLangController extends Controller
{
    public function index() {
        return response()->json(CountryLang::get(), 200);
    }
}
