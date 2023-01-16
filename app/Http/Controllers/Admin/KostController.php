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
        
        return view('admin.manage-kosts', compact('kosts'));
    }

    public function detailKost($id)
    {
        $kost = Kost::find($id);

        return view('admin.kost-detail', compact('kost'));
    }

    public function acceptKost($id)
    {
        $kost = Kost::find($id);
        $kost->status = 1;
        $kost->save();

        return redirect('admin/manage-kosts');
    }

    public function declineKost($id)
    {
        $kost = Kost::find($id);
        $kost->status = 2;
        $kost->save();

        return redirect('admin/manage-kosts');
    }
}
