<?php

namespace Database\Seeders;

use App\Models\Picture;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $picture = Picture::create([
            'path' => 'images/province/Jakarta.jpg'
        ]);

        Province::create([
            'name' => 'DKI Jakarta',
            'picture_id' => $picture->id
        ]);

        $picture = Picture::create([
            'path' => 'images/province/Surabaya.jpg'
        ]);

        Province::create([
            'name' => 'Surabaya',
            'picture_id' => $picture->id
        ]);

        $picture = Picture::create([
            'path' => 'images/province/Semarang.jpg'
        ]);

        Province::create([
            'name' => 'Semarang',
            'picture_id' => $picture->id
        ]);

        $picture = Picture::create([
            'path' => 'images/province/Malang.jpg'
        ]);

        Province::create([
            'name' => 'Malang',
            'picture_id' => $picture->id
        ]);

        $picture = Picture::create([
            'path' => 'images/province/Bandung.jpg'
        ]);

        Province::create([
            'name' => 'Bandung',
            'picture_id' => $picture->id
        ]);

        $picture = Picture::create([
            'path' => 'images/province/Jogjakarta.jpg'
        ]);

        Province::create([
            'name' => 'DI Jogjakarta',
            'picture_id' => $picture->id
        ]);
    }
}
