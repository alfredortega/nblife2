<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev_permission = App\Permission::where('slug','create-tasks')->first();
        $manager_permission = App\Permission::where('slug', 'edit-users')->first();
        
        //RoleTableSeeder.php
        $dev_role = new App\Role();
        $dev_role->slug = 'developer';
        $dev_role->name = 'Front-end Developer';
        $dev_role->save();
        $dev_role->permissions()->attach($dev_permission);
        
        $manager_role = new App\Role();
        $manager_role->slug = 'manager';
        $manager_role->name = 'Assistant Manager';
        $manager_role->save();
        $manager_role->permissions()->attach($manager_permission);
    }
}
