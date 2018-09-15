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
            'first_name' => 'Philip',
            'surname' => 'Boeken',
            'email' => 'test1@test.com',
            'password' => bcrypt('password'),
        ]);
    }
}
