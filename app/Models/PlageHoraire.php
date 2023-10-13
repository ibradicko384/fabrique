<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlageHoraire extends Model
{
    use HasFactory;
    public static function plage_horaires(){
        $getPlage_horaires = PlageHoraire::with('demandes')->where('status', 1)->get()->toArray();
        return $getPlage_horaires; 
    }
}
