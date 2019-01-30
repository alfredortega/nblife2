<?php

use Illuminate\Database\Seeder;

class AgeRangeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ageU18 = new App\AgeRange();
        $ageU18->description = 'Under 18';
        $ageU18->save();

        $ageU24 = new App\AgeRange();
        $ageU24->description = '18-24';
        $ageU24->save();

        $ageU34 = new App\AgeRange();
        $ageU34->description = '25-34';
        $ageU34->save();

        $ageU44 = new App\AgeRange();
        $ageU44->description = '35-44';
        $ageU44->save();

        $ageU54 = new App\AgeRange();
        $ageU54->description = '45-54';
        $ageU54->save();

        $ageU64 = new App\AgeRange();
        $ageU64->description = '55-64';
        $ageU64->save();

        $ageU74 = new App\AgeRange();
        $ageU74->description = '65-74';
        $ageU74->save();

        $ageO74 = new App\AgeRange();
        $ageO74->description = '75 and above';
        $ageO74->save();

    }
}
