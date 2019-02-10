<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'                  =>  'Administrador',
            'email'                 =>  'admin@gmail.com',
            'profissao'             =>  'Engenheiro de Sistemas',
            'password'              =>  bcrypt('123123'),
            'email_verified_at'     =>  '2018-12-29 23:46:05',
            'created_at'            =>  '2018-12-29 23:46:05',
        ]);
    }
}
