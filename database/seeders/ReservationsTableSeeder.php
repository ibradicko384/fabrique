<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;


class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservationRecords = [
            [
                'id' => 1,
                'apprenant_id' => 1,
                'jour_semaine' => 'Mardi',
                'heurs' => '9H 17H',
                'status' => 1,
            ],
        ];
        Reservation::insert($reservationRecords);
    }
}
