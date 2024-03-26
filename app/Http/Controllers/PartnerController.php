<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index() {
        $partners = Partner::all();
        return view('partner.index', compact('partners'));
    }

    public function create() {

        return view('partner.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $image = Storage::put('/images', $data['image']);
        unset($data['image']);
        $data['image'] = $image;
        Partner::create($data);
        return redirect()->route('partner.index');
    }
}
