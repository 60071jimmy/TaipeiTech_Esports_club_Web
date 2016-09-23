<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ttes',
            'email' => 'esportntut'.'@gmail.com',
            'password' => bcrypt('ttes_secret'),
            'isAdmin' => '1',
        ]);
    }
}
