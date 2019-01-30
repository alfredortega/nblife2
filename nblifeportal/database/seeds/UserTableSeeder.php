<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = App\Role::where('slug','admin')->first();
        $coach_role = App\Role::where('slug', 'coach')->first();
        $client_role = App\Role::where('slug', 'client')->first();
        $deleteclientPermission = App\Permission::where('slug','delete-client')->first();

        $developer = new App\User();
        $developer->name = 'Alfred Ortega';
        $developer->email = 'alfredortegaiii@gmail.com';
        $developer->password = bcrypt('rmn109NIV');
        $developer->save();
        $developer->roles()->attach($admin_role);
        
        
        $leslie = new App\User();
        $leslie->name = 'Leslie Brown';
        $leslie->email = 'leslie.b@thetopdog.com';
        $leslie->password = bcrypt('secret');
        $leslie->save();
        $leslie->roles()->attach($client_role);
        $leslie->roles()->attach($coach_role);    
        $leslie->permissions()->attach($deleteclientPermission);
    }
}
