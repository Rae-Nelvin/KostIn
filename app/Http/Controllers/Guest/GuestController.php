<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Kabupaten;
use App\Models\Kost;
use App\Models\Picture;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $kosts = Kost::where('status', '=', 1)->orderBy('id', 'ASC')->take(4)->get();
        $kabupatens = Kabupaten::take(4)->get();

        return view('welcome', compact('kosts', 'kabupatens'));
    }

    public function detail($id)
    {
        $kost = Kost::find($id);
        $others = Kost::where('id', '!=', $kost->id)->take(2)->get();
        
        return view('kost-detail', compact('kost', 'others'));
    }

    public function area()
    {
        $kabupatensTop = Kabupaten::take(4)->get();
        $kabupatens = Kabupaten::all();

        return view('area', compact('kabupatensTop', 'kabupatens'));
    }

    public function search(Request $request)
    {
        $name = $request->name;
        $kabupaten = $request->kabupaten;
        $minimum_price = $request->minimum_price;
        $maximum_price = $request->maximum_price;
        if($request->minimum_price == null)
        {
            $minimum_price = 0;
        }
        if($request->maximum_price == null)
        {
            $maximum_price = 10000000;
        }

        $result = Kost::query()
                    ->join('kost_details', 'kosts.id', '=', 'kost_details.kost_id')
                    ->join('alamat_details', 'kost_details.alamat_id', '=', 'alamat_details.id')
                    ->join('kabupatens', 'alamat_details.kabupaten_id', '=', 'kabupatens.id')
                    ->where('kosts.name', 'LIKE', "%{$name}%")
                    ->where('kabupatens.name', 'LIKE', "%{$kabupaten}%")
                    ->where('kosts.price', '>=', $minimum_price)
                    ->where('kosts.price', '<=', $maximum_price)
                    ->select('kosts.*')
                    ->get();
        
        return view('search', compact('result'));
    }
}
