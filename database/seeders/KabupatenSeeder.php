<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use App\Models\Picture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $picture = Picture::create([
            'path' => 'images/kabupaten/Jakarta.jpg'
        ]);

        Kabupaten::create([
            'name' => 'DKI Jakarta',
            'picture_id' => $picture->id
        ]);

        $picture = Picture::create([
            'path' => 'images/kabupaten/Surabaya.jpg'
        ]);

        Kabupaten::create([
            'name' => 'Surabaya',
            'picture_id' => $picture->id
        ]);

        $picture = Picture::create([
            'path' => 'images/kabupaten/Semarang.jpg'
        ]);

        Kabupaten::create([
            'name' => 'Semarang',
            'picture_id' => $picture->id
        ]);

        $picture = Picture::create([
            'path' => 'images/kabupaten/Malang.jpg'
        ]);

        Kabupaten::create([
            'name' => 'Malang',
            'picture_id' => $picture->id
        ]);

        $picture = Picture::create([
            'path' => 'images/kabupaten/Bandung.jpg'
        ]);

        Kabupaten::create([
            'name' => 'Bandung',
            'picture_id' => $picture->id
        ]);

        $picture = Picture::create([
            'path' => 'images/kabupaten/Jogjakarta.jpg'
        ]);

        Kabupaten::create([
            'name' => 'DI Jogjakarta',
            'picture_id' => $picture->id
        ]);
    }
}
