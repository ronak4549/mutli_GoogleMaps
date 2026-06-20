<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function index()
    {
        $locations = [
            ['Mumbai', 19.0760, 72.8777],
            ['Pune', 18.5204, 73.8567],
            ['Bhopal', 23.2599, 77.4126],
            ['Agra', 27.1767, 78.0081],
            ['Delhi', 28.7041, 77.1025],
            ['Rajkot', 22.2734719, 70.7512559],
            ['Ahmedabad', 23.033863, 72.585022],
            ['Surat', 21.170240, 72.831062],
            ['Kolkata', 22.572645, 88.363892],
            ['Goa', 15.29933, 74.12400],
            ['Nepal', 28.3974, 84.125],
            ['Jammu and Kashmir', 34.083656, 74.797371]
        ];
        return view('googleAutocomplete', compact('locations'));
    }
}
