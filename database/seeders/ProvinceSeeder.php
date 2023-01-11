<?php

namespace Database\Seeders;

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
        Province::class([
            'name' => 'DKI Jakarta',
            'picture_id' => 'images/province/Jakarta.jpg'
        ]);

        Province::class([
            'name' => 'Surabaya',
            'picture_id' => 'images/province/Surabaya.jpg'
        ]);

        Province::class([
            'name' => 'Semarang',
            'picture_id' => 'images/province/Semarang.jpg'
        ]);

        Province::class([
            'name' => 'Malang',
            'picture_id' => 'images/province/Malang.jpg'
        ]);

        Province::class([
            'name' => 'Bandung',
            'picture_id' => 'images/province/Bandung.jpg'
        ]);

        Province::class([
            'name' => 'DI Jogjakarta',
            'picture_id' => 'images/province/Jogjakarta.jpg'
        ]);
    }
}
