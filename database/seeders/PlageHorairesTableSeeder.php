<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlageHoraire;


class PlageHorairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plagehoraireRecords = [
            [
                'id' => 1,
                'jour_semaine' => 'lundi',
                'heurs' => '9H 17H',
                'capcitermaxe' => 30,
            ],
            [
                'id' => 2,
                'jour_semaine' => 'Mardi',
                'heurs' => '9H 17H',
                'capcitermaxe' => 25,
            ],
            [
                'id' => 3,
                'jour_semaine' => 'mMercredi',
                'heurs' => '9H 17H',
                'capcitermaxe' => 20,
            ],
        ];
        PlageHoraire::insert($plagehoraireRecords);
    }
}
