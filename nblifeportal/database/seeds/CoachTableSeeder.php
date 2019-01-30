<?php

use Illuminate\Database\Seeder;

class CoachTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::where('id',2)->first();
        
        $coach = new App\Coach();
        $coach->firstname = 'Leslie';
        $coach->lastname = 'Brown';
        $coach->email = 'leslie.b@thetopdog.com';
        $coach->phone = '816-885-0098';
        $coach->save();
        $coach->user()->save($user);
    }
}
