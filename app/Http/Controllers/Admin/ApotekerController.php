<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApotekerController extends Controller
{
    public function index()
    {
        $apotekers = User::role('apoteker')->get();
        return view('admin.apoteker.index', compact('apotekers'));
    }

    public function create()
    {
        return view('admin.apoteker.create');
    }

    public function store(Request $request) 
    {

        $attr = $request->all();
        $attr['password'] = Hash::make('password');

        $user = User::create($attr);

        $user->assignRole('apoteker');

        return back();
    }
}
