<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        // $this -> call(AdminsTableSeeder::class);
        $this -> call(ApprenantsTableSeeder::class);
        // $this -> call(DemandesTableSeeder::class);
        // $this -> call(PlageHorairesTableSeeder::class);
        // $this -> call(ReservationsTableSeeder::class);


    }
}
