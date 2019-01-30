<?php

use Illuminate\Database\Seeder;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Roles */
        $coach_role = App\Role::where('slug','coach')->first();
        $client_role = App\Role::where('slug','client')->first();
        $admin_role = App\Role::where('slug', 'manager')->first();
        
        $updateProfile = new App\Permission();
        $updateProfile->slug = 'update-profile';
        $updateProfile->name = 'Update Profile';
        $updateProfile->save();
//        $updateProfile->roles()->attach($client_role);
//        $updateProfile->roles()->attach($coach_role);
//        $updateProfile->roles()->attach($admin_role);

        $createClient = new App\Permission();
        $createClient->slug = 'create-client';
        $createClient->name = 'Create Client';
        $createClient->save();

        $updateClient = new App\Permission();
        $updateClient->slug = 'update-client';
        $updateClient->name = 'Update Client';
        $updateClient->save();

        $deactiveClient = new App\Permission();
        $deactiveClient->slug = 'deactivate-client';
        $deactiveClient->name = 'Deactivate Client';
        $deactiveClient->save();

        $deleteClient = new App\Permission();
        $deleteClient->slug = 'delete-client';
        $deleteClient->name = 'Delete Client';
        $deleteClient->save();

        $createCoach = new App\Permission();
        $createCoach->slug = 'create-coach';
        $createCoach->name = 'Create Coach';
        $createCoach->save();

        $updateCoach = new App\Permission();
        $updateCoach->slug = 'update-coach';
        $updateCoach->name = 'Update Coach';
        $updateCoach->save();

        $deactiveCoach = new App\Permission();
        $deactiveCoach->slug = 'deactivate-coach';
        $deactiveCoach->name = 'Deactivate Coach';
        $deactiveCoach->save();

        $deleteCoach = new App\Permission();
        $deleteCoach->slug = 'delete-coach';
        $deleteCoach->name = 'Delete Coach';
        $deleteCoach->save();


        $editUsers = new App\Permission();
        $editUsers->slug = 'edit-users';
        $editUsers->name = 'Edit Users';
        $editUsers->save();

        $deleteUsers = new App\Permission();
        $deleteUsers->slug = 'edit-users';
        $deleteUsers->name = 'Delete Users';

    }
}
