<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          =>'Administrador',
            'email'         =>'administrador@gmail.com',
            'id_tipo_users' => 1,
            'setor_id'      => 1,
            'ativo'         => 1,
            'password'      =>bcrypt('123456')
        ]);
    }
}
