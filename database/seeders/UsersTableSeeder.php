<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->count(5)->create();
        // User::create([
        //     'name'      => 'Jonas Alves',
        //     'email'     => 'jonas.pereira@digna.com.br',
        //     'password'  => bcrypt('teste123'),
        // ]);
    }
}
