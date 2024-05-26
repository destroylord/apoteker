<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $obats = Drug::all();
        return view('user.dashboard', compact('obats'));
    }
}
