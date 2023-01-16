<?php

namespace App\Http\Controllers;

use App\Models\AlamatDetail;
use App\Models\Kabupaten;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function create()
    {
        $user = User::find(Auth::user()->id);
        $kabupatens = Kabupaten::get();

        return view('manage-profile', compact('user', 'kabupatens'));
    }

    public function store(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if($request->password)
        {
            $user->password = Hash::make($request->password);
        }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();
        $alamat = AlamatDetail::find($user->alamat_id);
        $alamat->kecamatan = $request->kecamatan;
        $alamat->kabupaten_id = $request->kabupaten_id;
        $alamat->provinsi = $request->provinsi;
        $alamat->kode_pos = $request->kode_pos;
        $alamat->alamat = $request->alamat;
        $alamat->save();

        return redirect('manage-profile');
    }
}
