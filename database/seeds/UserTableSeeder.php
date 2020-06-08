<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();

	    $admin = new User();
	    $admin->name = 'Admininstrator';
	    $admin->email = 'admin@obituary.online';
	    $admin->password = bcrypt('ob1tu412y');
	    $admin->save();
	    $admin->roles()->attach($role_admin);

    }
}
