<?php

use Illuminate\Database\Seeder;

use App\Prioridade;

class PrioridadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prioridade::create([
            'prioridade'      => 'Normal'
        ]);
        Prioridade::create([
            'prioridade'      => 'Baixa'
        ]);
        Prioridade::create([
            'prioridade'      => 'Alta'
        ]);
        Prioridade::create([
            'prioridade'      => 'Urgente'
        ]);
    }
}
