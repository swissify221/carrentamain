<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $userrole = new Role();
        // $userrole->name = 'user';
        // $userrole->save();

        $userrole = new Role();
        $userrole->name = 'super-admin';
        $userrole->save();

        $userrole = new Role();
        $userrole->name = 'sub-admin';
        $userrole->save();

        $userrole = new Role();
        $userrole->name = 'admin';
        $userrole->save();
    }
}
