<?php

use Illuminate\Database\Seeder;

use App\TipoUsuario;

class TipoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoUsuario::create([
            'tipo'      => 'Administrador'
        ]);
        TipoUsuario::create([
            'tipo'      => 'Atendente'
        ]);
        TipoUsuario::create([
            'tipo'      => 'Cliente'
        ]);
    }
}
