<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SliderResource;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index() {
        $sliders = Slider::all();
        SliderResource::collection($sliders);
        return $sliders->toArray();
    }
}
