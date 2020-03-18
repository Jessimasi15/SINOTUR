<?php

use Illuminate\Database\Seeder;
use Sinotur\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "admin";
        $role->save();

        $role = new Role();
        $role->name = "miembro";
        $role->save();
    }
}
