<?php

use Illuminate\Database\Seeder;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345'),
            'level' => 1
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Cliente',
            'email' => 'cliente@cliente.com',
            'password' => bcrypt('12345'),
            'level' => 2
        ]);
    }
}
