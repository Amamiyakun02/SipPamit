<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use App\Models\invest;
use App\Models\UserAccount;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Dian Lucky",
            'email' => "dianlucky69@gmail.com",
            'address' => "Jln Gang Mawar, Dsn Panggung, Ds. Panggung, Kecamatan Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan",
            'contact_phone' => "087863946025",
            'descript' => "Seorang pembeli",
            'username' => "dianlucky13",
            'password' => bcrypt("pembeli123"),
            'role' => "pembeli"
        ]);

        User::create([
            'name' => "David Hadi",
            'email' => "davidhadi69@gmail.com",
            'address' => "Jln Gang Mawar, Dsn Panggung, Ds. Panggung, Kecamatan Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan",
            'contact_phone' => "087863946232",
            'descript' => "Seorang admin",
            'username' => "david6969",
            'password' => bcrypt("admin123"),
            'role' => "admin"
        ]);

        User::create([
            'name' => "Latief Naufal",
            'nama_peternakan' => "Latief Farm",
            'email' => "latif69@gmail.com",
            'address' => "Jln Gang Mawar, Dsn Panggung, Ds. Panggung, Kecamatan Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan",
            'contact_phone' => "087863932141",
            'descript' => "Seorang peternak",
            'username' => "latif132",
            'password' => bcrypt("peternak123"),
            'role' => "peternak"
        ]);

        User::create([
            'name' => "Maireza",
            'nama_peternakan' => "Maireza farm",
            'email' => "maireza123@gmail.com",
            'address' => "Bajuin",
            'contact_phone' => "087863932141",
            'descript' => "Seorang peternak lorem",
            'username' => "maireza13",
            'password' => bcrypt("peternak123"),
            'role' => "peternak"
        ]);

        User::create([
            'name' => "Aryo Prasetyo",
            'nama_peternakan' => "Aryo Farm",
            'email' => "aryo123@gmail.com",
            'address' => "Nyit Kunyit",
            'contact_phone' => "087863932141",
            'descript' => "Seorang peternak lorem ipsum",
            'username' => "aryo13",
            'password' => bcrypt("peternak123"),
            'role' => "peternak"
        ]);

        invest::create([
            'user_id' => 4,
            'profit_sharing' => 3,
            'funding_target' => 20000000,
            'period' => 6
        ]);

        invest::create([
            'user_id' => 5,
            'profit_sharing' => 2,
            'funding_target' => 25000000,
            'period' => 12
        ]);

        invest::create([
            'user_id' => 3,
            'profit_sharing' => 7,
            'funding_target' => 36000000,
            'period' => 10
        ]);

    }
}
