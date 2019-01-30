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
        $dev_role = App\Role::where('slug','developer')->first();
        $manager_role = App\Role::where('slug', 'manager')->first();
        $dev_perm = App\Permission::where('slug','create-tasks')->first();
        $manager_perm = App\Permission::where('slug','edit-users')->first();
        
        $developer = new App\User();
        $developer->name = 'Alfred Ortega';
        $developer->email = 'alfredortegaiii@gmail.com';
        $developer->password = bcrypt('rmn109NIV');
        $developer->roles()->attach($dev_role);
        $developer->permissions()->attach($dev_perm);
        $developer->save();
        
        
        $manager = new App\User();
        $manager->name = 'Leslie Brown';
        $manager->email = 'leslie.b@thetopdog.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($manager_role);
        $manager->permissions()->attach($manager_perm);    
    }
}
