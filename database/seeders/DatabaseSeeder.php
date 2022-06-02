<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        //criando um registro
        $this->call(AtividadeTableSeeder::class);

        //criando vários registros com Faker
        \App\Models\Atividade::factory(1000)->create();
    }
}
