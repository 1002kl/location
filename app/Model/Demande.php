<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = ['adresse', 'tel', 'dateDebut', 'nmbejour','total','reponse', 'voiture_id', 'user_id'];
}
