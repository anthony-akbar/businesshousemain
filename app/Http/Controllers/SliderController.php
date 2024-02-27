<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index() {

        $sliders = Slider::all();
        return view('slider.index', compact('sliders'));
    }

    public function create() {

        return view('slider.create');
    }

    public function store(SliderRequest $request) {
        $data = $request->validated();
        dd($data);
    }
}
