<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Kost\KostRequest;
use App\Models\AlamatDetail;
use App\Models\Album;
use App\Models\Facility;
use App\Models\Kost;
use App\Models\KostDetail;
use App\Models\KostFacility;
use App\Models\Picture;
use App\Models\Province;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function create()
    {
        $provinces = Province::all();
        $facilities = Facility::all();
        return view('owner.create-kost', compact('provinces', 'facilities'));
    }

    public function store(KostRequest $request)
    {
        $provinsi_id = Province::find($request->provinsi_id);

        $alamat = AlamatDetail::create([
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi_id' => $provinsi_id->id,
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
            'cover_id' => $cover->id
        ]);

        $facilities = $request->facility;
        foreach ($facilities as $facility) {
            KostFacility::create([
                'kost_id' => $kost->id,
                'facility_id' => $facility
            ]);
        }

        return redirect('owner/kosts');
    }

    public function update($id)
    {
        $kost = Kost::find($id);
        $provinces = Province::all();
        $facilities = Facility::all();
        return view('owner.update-kost', compact('kost', 'provinces', 'facilities'));
    }

    public function storeUpdate(KostRequest $request)
    {
        $provinsi_id = Province::find($request->provinsi_id);
        $alamat = AlamatDetail::where('id', '=', $request->alamat_id)->update([
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi_id' => $provinsi_id->id,
            'kode_pos' => $request->kode_pos
        ]);
        $alamat->save();

        $kost = Kost::where('id', '=', $request->kost_id)->update([
            'name' => $request->name,
            'owner_id' => Auth::user()->id,
            'price' => $request->price,
        ]);
        $kost->save();

        $imagePath = $request->file('image')->store('/public/images/kost/' . $request->name . '/cover');
        $imagePath = str_replace('public/', '', $imagePath);
        $cover = Picture::create([
            'path' => $imagePath
        ]);
        $album = Album::where('kost_id', '=', $kost->id)->update([
            'cover_id' => $cover->id
        ]);
        $album->save();

        KostDetail::where('kost_id', '=', $kost->id)->update([
            'kost_id' => $kost->id,
            'description' => $request->description,
            'tipe_kost' => $request->tipe_kost,
            'jumlah_kamar' => $request->jumlah_kamar,
            'jumlah_penghuni' => $request->jumlah_penghuni,
            'ukuran_kamar' => $request->ukuran_kamar,
            'jatuh_tempo' => $request->jatuh_tempo,
            'alamat_id' => $alamat->id,
            'favourites' => 0,
            'cover_id' => $cover->id
        ]);

        $old_facilities = KostFacility::where('kost_id', '=', $kost->id)->get();
        $facilities = $request->facility;
        for($i = 0; $i < $facilities->count(); $i++)
        {
            for($j = 0; $j < $i ;$j++)
            {
                if($old_facilities[$j] != $facilities[$i])
                {
                    $delete_facilities = KostFacility::find($old_facilities[$j]);
                    $delete_facilities->delete();
                }
                if($j+1 == $i)
                {
                    KostFacility::create([
                        'kost_id' => $kost->id,
                        'facility_id' => $facilities[$i]
                    ]);
                }
            }
        }

        return redirect('owner/kosts');
    }

    public function delete($id)
    {
        $kost = Kost::find($id);
        $kost->delete();

        return redirect('owner/kost');
    }

    public function createPictures($id)
    {
        $album = Album::where('kost_id', '=', $id)->first();

        return view('owner.add-pictures', compact('album'));
    }

    public function storePictures(Request $request)
    {
        $request->validate([
            'image' => ['required', 'mimes: jpg, png, jpeg, gif']
        ]);

        $images = $request->image;
        foreach ($images as $image) {
            $imagePath = $image->store('/public/images/kost/' . $request->name . '/pictures');
            $imagePath = str_replace('public/', '', $imagePath);
    
            $album = Album::find($request->album_id);
            Picture::create([
                'album_id' => $album->id,
                'path' => $imagePath
            ]);
        }


        return redirect('owner/kosts');
    }

    public function deletePicture($id)
    {
        $picture = Picture::find($id);
        $picture->delete();

        return redirect('owner/kosts');
    }
}
