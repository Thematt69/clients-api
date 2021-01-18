<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Matthieu',
            'role' => 'admin',
            'email' => 'devilliers.matthieu@gmail.com',
            'password' => password_hash("matthieu", PASSWORD_DEFAULT),
        ]);
        DB::table('users')->insert([
            'name' => 'Tom',
            'role' => 'admin',
            'email' => 'gros.rageux@jetemmerde.fr',
            'password' => password_hash("salut", PASSWORD_DEFAULT),
        ]);
        DB::table('users')->insert([
            'name' => 'Test',
            'role' => 'user',
            'email' => 'test@mars.fr',
            'password' => password_hash("1234", PASSWORD_DEFAULT),
        ]);
    }
}
