<?php

namespace Database\Seeders;

use App\Models\EventosCulturales;
use Database\Seeders\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventosCulturalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = Faker::create();
       foreach(range(1,100) as $index) {
        EventosCulturales::create([
            'nombre' => $faker->sentence,
            'fecha' =>  $faker->date,
            'ubicacion' => $faker->city,
            'description' => $faker->paragraph,
            'imagen' => $faker->image(),
            'autor' => $faker->name
        ]);
       }
    }
}
