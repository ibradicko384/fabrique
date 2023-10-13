<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apprenant;

class ApprenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apprenantRecords = [
            [
                'id' => 1,
                'nom' => 'Yaro',
                'prenom' => 'Mahamadou',
                'lettre' => 'bonsoir commen aller vous ',
                'telephone' => '57531441',
                'email' => 'yaronasirou5@gmail.com',
                'password' => '$2a$10$AatoYNoNZAlVx91lw/tGLuRGIe7sCEYRYW/Q05IId.2vUJscVUKRS',
                'status' => 1,
            ],
        ];
        Apprenant::insert($apprenantRecords);
    }
}
