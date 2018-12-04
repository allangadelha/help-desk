<?php

use Illuminate\Database\Seeder;

use App\SetorCliente;

class SetorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SetorCliente::create([
            'setor'      => 'Setor Geral'
        ]);
    }
}
