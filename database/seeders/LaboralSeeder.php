<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laboral;
class LaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laboral::create([
            'name'=>'DRECRETO 276',
            'description'=>'RECRETO 276',
            'status'=>'ACTIVO'
        ]);

        Laboral::create([
            'name'=>'DRECRETO 384',
            'description'=>'DRECRETO 384',
            'status'=>'INACTIVO'
        ]);

        Laboral::factory()->times(2000)->create();
    }
}
