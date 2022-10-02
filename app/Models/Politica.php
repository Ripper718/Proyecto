<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Politica
 *
 * @property $id
 * @property $folio
 * @property $NombrePolitica
 * @property $DescripcionPolitica
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Politica extends Model
{
    
    static $rules = [
		'folio' => 'required',
		'NombrePolitica' => 'required',
		'DescripcionPolitica' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','NombrePolitica','DescripcionPolitica'];



}
