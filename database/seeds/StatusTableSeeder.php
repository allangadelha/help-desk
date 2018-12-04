<?php

use Illuminate\Database\Seeder;

use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'status'      => 'Em aberto',
        ]);
        Status::create([
            'status'      => 'Em atendimento',
        ]);
        Status::create([
            'status'      => 'Atendido',
        ]);
    }
}
