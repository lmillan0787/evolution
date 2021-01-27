<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipanteForsage extends Model
{
    use HasFactory;

    protected $table = 'participante_forsage';

     protected $fillable =  [
    'persona_id',
	'id_registro',
	'id_registro',
	'upline_id',
	'fecha_registro',
	'bloque_id'
                    ];


public $timestamps = true;
}
