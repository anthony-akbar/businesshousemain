<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index() {
        $apartments = Apartment::all();
        foreach ($apartments as $apartment) {
            $apartment['image'] = asset('storage/' . $apartment['image']);
        }
        return $apartments->toArray();
    }
}
