<?php

use Illuminate\Database\Seeder;

use App\TipoUsuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('TipoUsuarioTableSeeder');
        $this->call('PrioridadeTableSeeder');
        $this->call('StatusTableSeeder');
        $this->call('SetorTableSeeder');
        $this->call('UserTableSeeder');
    }
}
