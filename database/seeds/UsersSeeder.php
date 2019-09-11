<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = date('Y-m-d H:i:s');
        DB::table('users')->insert([
            'email' => 'pedroberorato@gmail.com',
            'name' => 'Pedro Rorato',
            'password' => Hash::make('12345'),
            'status' => 'ATIVO',
            'created_at' => $data,
            'updated_at' => $data
        ]);
    }
}
