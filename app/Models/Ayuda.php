<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ayuda
 *
 * @property $id
 * @property $folio
 * @property $NombreSolicitante
 * @property $TipoFalla
 * @property $DescripcionFalla
 * @property $CorreoContacto
 * @property $NumeroContacto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ayuda extends Model
{
    
    static $rules = [
		'folio' => 'required',
		'NombreSolicitante' => 'required',
		'TipoFalla' => 'required',
		'DescripcionFalla' => 'required',
		'CorreoContacto' => 'required',
		'NumeroContacto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','NombreSolicitante','TipoFalla','DescripcionFalla','CorreoContacto','NumeroContacto'];



}
