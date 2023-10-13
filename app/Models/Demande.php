<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    public function plage_horaire()
    {
        return $this->belongsTo('App\Models\PlageHoraire', 'plage_horaires_id')->select('id', 'jour_semaine','capcitermaxe');
    }
    public function apprenant()
    {
        return $this->belongsTo('App\Models\Apprenant', 'apprenant_id')->select('id', 'nom','prenom');
    }
    // public function apprenant()
    // {
    //     return $this->belongsTo(Apprenant::class, 'apprenant_id');
    // }
    
}
