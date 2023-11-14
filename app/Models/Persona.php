<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Persona
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Persona newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Persona newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Persona query()
 * @mixin \Eloquent
 */
class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'ciudad',
        'edad',
        'fecha_nacimiento',
        'genero',
    ];
}
