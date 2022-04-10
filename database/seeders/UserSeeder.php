<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user            = new User();
        $user->firstname = "Robin";
        $user->lastname  = "Schoenmaker";
        $user->email     = "24046@ma-web.nl";
        $user->password  = Hash::make( 'xbseiylt' );
        $user->save();
    }
}
