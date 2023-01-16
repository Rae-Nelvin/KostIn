<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Kost\KostRequest;
use App\Models\AlamatDetail;
use App\Models\Album;
use App\Models\Facility;
use App\Models\Kabupaten;
use App\Models\Kost;
use App\Models\KostDetail;
use App\Models\KostFacility;
use App\Models\Picture;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function create()
    {
        $request = Request::where('user_id', '=', Auth::user()->id)->first();
        if($request) {
            return redirect()->back();
        }
        $kabupatens = Kabupaten::all();
        $facilities = Facility::all();
        
        return view('user.add-kost', compact('kabupatens', 'facilities'));
    }

    public function store(KostRequest $request)
    {
        Request::create([
            'user_id' => Auth::user()->id,
            'status' => 'Pending'
        ]);

        $kabupaten_id = Kabupaten::find($request->kabupaten_id);

        $alamat = AlamatDetail::create([
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kabupaten_id' => $kabupaten_id->id,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos
        ]);

        $kost = Kost::create([
            'name' => $request->name,
            'owner_id' => Auth::user()->id,
            'status' => 0,
            'price' => $request->price,
        ]);

        $imagePath = $request->file('image')->store('/public/images/kost/' . $request->name . '/cover');
        $imagePath = str_replace('public/', '', $imagePath);

        $cover = Picture::create([
            'path' => $imagePath
        ]);
        $album = Album::create([
            'kost_id' => $kost->id,
            'cover_id' => $cover->id
        ]);
        $cover->album_id = $album->id;
        $cover->save();

        KostDetail::create([
            'kost_id' => $kost->id,
            'description' => $request->description,
            'tipe_kost' => $request->tipe_kost,
            'jumlah_kamar' => $request->jumlah_kamar,
            'jumlah_penghuni' => $request->jumlah_penghuni,
            'ukuran_kamar' => $request->ukuran_kamar,
            'jatuh_tempo' => $request->jatuh_tempo,
            'alamat_id' => $alamat->id,
            'favourites' => 0,
            'cover_id' => $album->cover_id
        ]);

        $facilities = $request->facility_id;
        foreach ($facilities as $facility) {
            KostFacility::create([
                'kost_id' => $kost->id,
                'facility_id' => $facility
            ]);
        }

        return redirect('user/dashboard');
    }
}
