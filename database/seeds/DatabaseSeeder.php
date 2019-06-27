<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        $this->call(notas::class){
          return [
      'titulo' => $faker->sentence(2),
      'epigrafe' => $faker->sentence(10),
      'cuerpo' => $faker->sentence(500)
    ];
  });
}
