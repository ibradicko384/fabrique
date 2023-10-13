<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Demande;

class DemandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $demandeRecords = [
            [
                'id' => 1,
                'apprenant_id' => 1,
                'demande' => 'inscription',
                'status' => 1,
            ],
        ];
        Demande::insert($demandeRecords);
    }
}
