<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $obats = Drug::all();
        return view('dashboard', compact('obats'));
    }
}
