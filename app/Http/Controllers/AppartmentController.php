<?php

namespace App\Http\Controllers;

use App\Http\Requests\Appartment;
use Illuminate\Support\Facades\Storage;

class AppartmentController extends Controller
{
    public function index()
    {
        $appartments = \App\Models\back\Appartment::all();
        return view('appartments.index', compact('appartments'));
    }

    public function create()
    {

        return view('appartments.create');
    }

    public function store(Appartment $request)
    {
        $data = $request->validated();
        $image = Storage::put('/images', $data['image']);
        unset($data['image']);
        $data['image'] = $image;
        \App\Models\back\Appartment::create($data);
        return redirect()->back();
    }
}
