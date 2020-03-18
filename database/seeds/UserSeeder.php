<?php

use Illuminate\Database\Seeder;
use Sinotur\User;
use Sinotur\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'miembro')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'administrador';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('admin');
        $user->role_id = '1';
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'invitado';
        $user->email = 'invitado@mail.com';
        $user->password = bcrypt('invitado');
        $user->role_id = '2';
        $user->save();
        $user->roles()->attach($role_user);

        /*User::create([
    		'name' => 'administrador',
    		'email' => 'admin@mail.com',
    		'password' => Hash::make('admin'),
            'type' => 'admin',
    	]);
        User::create([
            'name' => 'invitado',
            'email' => 'invitado@mail.com',
            'password' => Hash::make('invitado'),
            'type' => 'miembro',
        ]);*/
    }
}
