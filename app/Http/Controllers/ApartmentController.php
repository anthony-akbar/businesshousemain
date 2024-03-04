<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApartmentRequest;
use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::all();
        return view('apartment.index', compact('apartments'));
    }

    public function create()
    {

        return view('apartment.create');
    }

    public function store(ApartmentRequest $request)
    {
        $data = $request->validated();
        $image = Storage::put('/images', $data['image']);
        unset($data['image']);
        $data['image'] = $image;
        Apartment::create($data);
        return redirect()->route('apartment.index');
    }
}
