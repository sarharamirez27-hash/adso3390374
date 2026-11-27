<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pet = new \App\Models\Pet;
        $pet->name = 'Milu';
        $pet->kind = 'Dog';
        $pet->weight = 10.4;
        $pet->age = '1';
        $pet->breed = 'Golden';
        $pet->location = 'Manizales';
        $pet->description = 'Muerta de Hambre';
        $pet->save();

        $pet = new \App\Models\Pet;
        $pet->name = 'Luna';
        $pet->kind = 'Dog';
        $pet->weight = 4.2;
        $pet->age = '2';
        $pet->breed = 'Cocker';
        $pet->location = 'Manizales';
        $pet->description = 'Muerta de sueño';
        $pet->save();

        $pet = new \App\Models\Pet;
        $pet->name = 'Billy';
        $pet->kind = 'Cat';
        $pet->weight = 4.4;
        $pet->age = '1';
        $pet->breed = 'Vaca';
        $pet->location = 'Manizales';
        $pet->description = 'Ese color no tengo';
        $pet->save();
    }
}
