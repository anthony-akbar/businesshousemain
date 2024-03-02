<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppartmentController extends Controller
{
    public function index() {

        return view('appartments.index');
    }
}
