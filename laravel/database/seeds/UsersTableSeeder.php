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
        // Seed users
        factory(\App\User::class)->create([
            'name' => 'Latheesan',
            'email' => 'latheesan.kanesamoorthy@mvfglobal.com'
        ]);
    }
}
