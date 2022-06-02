<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Atividade;

class AtividadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atividade::create([
            'title' => 'Prova de Matemática',
            'description' => 'Prova sobre números imaginários',
            'scheduledto' => '2022-07-01 13:15:00'
        ]);
    }
}
