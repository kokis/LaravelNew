<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;

use App\Http\Requests;

class ManufacturerController extends Controller
{
    public function show(Manufacturer $mnf)
    {
        return view('manufacturers.show', compact('mnf'));
    }
}
