<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kost;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function index()
    {
        $kosts = Kost::orderBy('status', 'ASC')->get();
        
        return view('admin.kosts', compact('kosts'));
    }

    public function acceptKost($id)
    {
        $kost = Kost::find($id);
        $kost->status = 2;
        $kost->save();

        return redirect('admin/kosts');
    }

    public function declineKost($id)
    {
        $kost = Kost::find($id);
        $kost->status = 1;
        $kost->save();

        return redirect('admin/kosts');
    }
}
