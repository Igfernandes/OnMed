<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professores extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'professores';
    protected $fillable = [
        'nome',
        'matricula',
        'materia',
        'horario',
        'fotografia'
    ];
}
