<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = new User();
        $superAdmin->role = 1;
        $superAdmin->name = "Admin Ridoy";
        $superAdmin->email = "admin@gmail.com";
        $superAdmin->password = Hash::make(123456);
        $superAdmin->save();


        $normaluser = new User();
        $normaluser->role = 0;
        $normaluser->name = "Ridoy";
        $normaluser->email = "ridoy@gmail.com";
        $normaluser->password = Hash::make(123456);
        $normaluser->save();
    }
}
