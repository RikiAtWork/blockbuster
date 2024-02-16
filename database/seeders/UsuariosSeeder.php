<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

use Faker\Factory as Faker;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 10; $i++){
            $usuario = new User();
            $usuario->email = $faker->email;
            $usuario->name = $faker->name;
            $usuario->save();
        }
    }
}
