<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index() {
        $partners = Partner::all();
        return $partners->toArray();
    }
}
