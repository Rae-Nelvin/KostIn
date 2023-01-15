<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facility::create([
            'name' => "Kasur",
            'logo' => "<i class='bx bx-bed' ></i>",
        ]);

        Facility::create([
            'name' => "KM Dalam",
            'logo' => "<i class='bx bx-bath' ></i>",
        ]);

        Facility::create([
            'name' => "KM Luar",
            'logo' => "<i class='bx bx-bath' ></i>",
        ]);

        Facility::create([
            'name' => "Internet",
            'logo' => "<i class='bx bx-wifi' ></i>",
        ]);

        Facility::create([
            'name' => "Laundry",
            'logo' => "<i class='bx bxs-washer'></i>",
        ]);

        Facility::create([
            'name' => "AC",
            'logo' => "<i class='bx bx-wind' ></i>",
        ]);

        Facility::create([
            'name' => "Lemari",
            'logo' => "<i class='bx bx-cabinet'></i>",
        ]);

        Facility::create([
            'name' => "Meja",
            'logo' => "<i class='bx bxs-dock-bottom'></i>",
        ]);

        Facility::create([
            'name' => "Kursi",
            'logo' => "<i class='bx bx-chair' ></i>",
        ]);

        Facility::create([
            'name' => "Lahan Parkir",
            'logo' => "<i class='bx bxs-parking' ></i>",
        ]);

        Facility::create([
            'name' => "Dapur",
            'logo' => "<i class='bx bx-fridge'></i>",
        ]);

        Facility::create([
            'name' => "Listrik",
            'logo' => "<i class='bx bxs-bolt-circle'></i>",
        ]);
    }
}
