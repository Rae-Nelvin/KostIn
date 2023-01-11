<?php

namespace Database\Seeders;

use App\Models\AlamatDetail;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin'
        ]);

        Role::create([
            'name' => 'Owner'
        ]);

        Role::create([
            'name' => 'User'
        ]);

        AlamatDetail::create([
            'alamat' => 'Jl. Cendrawasih Raya No. 17, Pesanggrahan, DKI Jakarta, Indonesia',
            'kecamatan' => 'Pesanggrahan',
            'kabupaten' => 'Pesanggrahan',
            'provinsi_id' => 1,
            'kode_pos' => '61321'
        ]);

        User::create([
            'name' => 'Admin 1',
            'email' => 'admin@admin.com',
            'password' => 'admin123',
            'alamat_id' => 1,
            'phone' => '081231231231',
            'role_id' => 1,
        ]);

        AlamatDetail::create([
            'alamat' => 'Jl. Cendrawasih Raya No. 17, Pesanggrahan, DKI Jakarta, Indonesia',
            'kecamatan' => 'Pesanggrahan',
            'kabupaten' => 'Pesanggrahan',
            'provinsi_id' => 1,
            'kode_pos' => '61321'
        ]);

        User::create([
            'name' => 'Owner 1',
            'email' => 'owner@owner.com',
            'password' => 'owner123',
            'alamat_id' => 2,
            'phone' => '081231231231',
            'role_id' => 3,
        ]);
        
        AlamatDetail::create([
            'alamat' => 'Jl. Cendrawasih Raya No. 17, Pesanggrahan, DKI Jakarta, Indonesia',
            'kecamatan' => 'Pesanggrahan',
            'kabupaten' => 'Pesanggrahan',
            'provinsi_id' => 1,
            'kode_pos' => '61321'
        ]);

        User::create([
            'name' => 'User 1',
            'email' => 'user@user.com',
            'password' => 'user123',
            'alamat_id' => 2,
            'phone' => '081231231231',
            'role_id' => 3,
        ]);
    }
}
