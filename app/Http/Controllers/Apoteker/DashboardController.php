<?php

namespace App\Http\Controllers\Apoteker;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('apoteker.dashboard');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->removeRole($user->roles->first());
        $user->delete();
        
        return back();
    }
}
