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
        User::create(
            ['name' => 'Dusanka', 'email' => 'duda@duda.com', 'password' => bcrypt('duda')],
            ['name' => 'Olja', 'email' => 'olja@olja.com', 'password' => bcrypt('olja')],
        );
    }
}
