<?php

namespace Database\Seeders;

use App\Models\AlamatDetail;
use App\Models\Album;
use App\Models\Kost;
use App\Models\KostDetail;
use App\Models\KostFacility;
use App\Models\Picture;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kost = Kost::create([
            'name' => 'Kost Rumah Antene Kebayoran Baru Jakarta Selatan',
            'owner_id' => 2,
            'status' => 0,
            'price' => 2200000
        ]);

        AlamatDetail::create([
            'alamat' => 'Jl. Antene I No.9a, RT.10/RW.1, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140, Indonesia',
            'kecamatan' => 'Kebayoran Baru',
            'kabupaten_id' => 1,
            'provinsi' => 'DKI Jakarta',
            'kode_pos' => 12140
        ]);

        $picture = Picture::create([
            'path' => 'images/kost/Kost Rumah Antene Kebayoran Baru Jakarta Selatan/cover/listing-1494873132.jpg'
        ]);

        $album = Album::create([
            'kost_id' => $kost->id,
            'cover_id' => $picture->id,
        ]);

        $picture->album_id = $album->id;
        $picture->save();

        KostDetail::create([
            'kost_id' => $kost->id,
            'description' => 'Kost Rumah Antene Kebayoran Baru Jakarta Selatan (Campur)',
            'tipe_kost' => 'Campur',
            'jumlah_kamar' => 20,
            'jumlah_penghuni' => 0,
            'ukuran_kamar' => '4 x 5 M',
            'jatuh_tempo' => 'Tanggal 5',
            'alamat_id' => 3,
            'cover_id' => $picture->id
        ]);

        KostFacility::create([
            'kost_id' => $kost->id,
            'facility_id' => 1,
        ]);

        KostFacility::create([
            'kost_id' => $kost->id,
            'facility_id' => 2,
        ]);

        KostFacility::create([
            'kost_id' => $kost->id,
            'facility_id' => 4,
        ]);

        KostFacility::create([
            'kost_id' => $kost->id,
            'facility_id' => 6,
        ]);

        KostFacility::create([
            'kost_id' => $kost->id,
            'facility_id' => 7,
        ]);

        KostFacility::create([
            'kost_id' => $kost->id,
            'facility_id' => 8,
        ]);

        KostFacility::create([
            'kost_id' => $kost->id,
            'facility_id' => 9,
        ]);

        KostFacility::create([
            'kost_id' => $kost->id,
            'facility_id' => 12,
        ]);
    }
}
