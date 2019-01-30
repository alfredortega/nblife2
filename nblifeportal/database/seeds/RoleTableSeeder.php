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
        $updateprofile = App\Permission::where('slug','update-profile')->first();
        $createclient = App\Permission::where('slug','create-client')->first();
        $updateclient = App\Permission::where('slug','update-client')->first();
        $deactivateclient = App\Permission::where('slug','deactivate-client')->first();
        $deleteclient = App\Permission::where('slug','delete-client')->first();
        $createcoach = App\Permission::where('slug','create-coach')->first();
        $updatecoach = App\Permission::where('slug','update-coach')->first();
        $deactivatecoach = App\Permission::where('slug','deactivate-coach')->first();
        $deletecoach = App\Permission::where('slug','delete-coach')->first();
        $editusers = App\Permission::where('slug','edit-users')->first();
        $deleteusers = App\Permission::where('slug','delete-users')->first();
        

        $clientRole = new App\Role();
        $clientRole->slug = 'client';
        $clientRole->name = 'Client';
        $clientRole->save();
        $clientRole->permissions()->attach($updateprofile);


        $coachRole = new App\Role();
        $coachRole->slug = 'coach';
        $coachRole->name = 'Coach';
        $coachRole->save();
        $coachRole->permissions()->attach($updateprofile);
        $coachRole->permissions()->attach($createclient);
        $coachRole->permissions()->attach($updateclient);
        $coachRole->permissions()->attach($deactivateclient);

        $adminRole = new App\Role();
        $adminRole->slug = 'admin';
        $adminRole->name = 'Admin';
        $adminRole->save();
        $adminRole->permissions()->attach($updateprofile);
        $adminRole->permissions()->attach($createclient);
        $adminRole->permissions()->attach($updateclient);
        $adminRole->permissions()->attach($deactivateclient);
        $adminRole->permissions()->attach($deleteclient);
        $adminRole->permissions()->attach($createcoach);
        $adminRole->permissions()->attach($updatecoach);
        $adminRole->permissions()->attach($deactivatecoach);
        $adminRole->permissions()->attach($deletecoach);
        $adminRole->permissions()->attach($editusers);
        $adminRole->permissions()->attach($deleteusers);



    }
}
