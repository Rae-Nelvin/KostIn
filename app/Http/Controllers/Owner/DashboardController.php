<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Kost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $kost = Kost::where('owner_id', '=', Auth::user()->id)->paginate(5);
        return view('owner.dashboard', compact('kost'));
    }
}
