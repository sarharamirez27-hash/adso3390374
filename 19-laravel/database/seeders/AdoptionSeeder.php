<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Adoption;

class AdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adoption = new Adoption;
        $adoption -> user_id = 2;
        $adoption -> pet_id = 3;
        if($adoption -> save()){
            $pet = \App\Models\Pet::find(3);
            $pet -> is_active = 0;
            $pet -> is_adopted = 1;
            $pet -> save();
        }
    }
}
