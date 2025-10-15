<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // Nom de la table associée au modèle
    protected $table = 'feedback';

    // Attributs qui peuvent être assignés en masse (mass assignable)
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'feedback'
    ];
}
