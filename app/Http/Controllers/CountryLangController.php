<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountryLang;
use Illuminate\Support\Facades\Validator;

class CountryLangController extends Controller
{
    public function getCountries()
    {
        return response()->json(CountryLang::get(), 200);
    }

    public function getCountry($id)
    {
        $country = CountryLang::find($id);

        if (!$country) {
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }

        return response()->json($country, 200);
    }

    public function saveCountry(Request $request)
    {
        $rules = [
            'alias' => ['required', 'string', 'min:2', 'max:2'],
            'name' => ['required', 'string', 'min:3', 'max:32']
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        $country = CountryLang::create($request->all());
        return response()->json($country, 201);
    }

    public function updateCountry(Request $request, $id)
    {
        $rules = [
            'alias' => ['string', 'min:2', 'max:2'],
            'name' => ['string', 'min:3', 'max:32']
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $country = CountryLang::find($id);

        if (!$country) {
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }

        $country->update($request->all());
        return response()->json($country, 200);
    }

    public function deleteCountry($id)
    {
        $country = CountryLang::find($id);

        if (!$country) {
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }

        $country->delete();
        return response()->json('', 204);
    }
}
