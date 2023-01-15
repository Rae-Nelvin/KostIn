<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Kabupaten;
use App\Models\Kost;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $kosts = Kost::orderBy('id', 'ASC')->take(4)->get();
        $kabupatens = Kabupaten::take(4)->get();

        return view('welcome', compact('kosts', 'kabupatens'));
    }

    public function detail($id)
    {
        $kost = Kost::find($id);

        return view('kost-detail', compact('kost'));
    }
}
