<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(3)->create();
        User::create([
            'username' => 'elbiz',
            'email' => 'lukmanbudimantrue@gmail.com',
            'password' =>bcrypt('12345')
        ]);
        // User::create([
        //     'username' => 'noanoa',
        //     'email' => 'noanoa@gmail.com',
        //     'password' =>bcrypt('12345')
        // ]);
    }
}
