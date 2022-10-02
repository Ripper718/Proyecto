<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bitacora
 *
 * @property $id
 * @property $folio
 * @property $Solicitante
 * @property $ResponsableSistema
 * @property $FactibilidadTarea
 * @property $SistemaAfectado
 * @property $DependenciaSistema
 * @property $NombreTarea
 * @property $Descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bitacora extends Model
{
    
    static $rules = [
		'folio' => 'required',
		'Solicitante' => 'required',
		'ResponsableSistema' => 'required',
		'FactibilidadTarea' => 'required',
		'SistemaAfectado' => 'required',
		'DependenciaSistema' => 'required',
		'NombreTarea' => 'required',
		'Descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','Solicitante','ResponsableSistema','FactibilidadTarea','SistemaAfectado','DependenciaSistema','NombreTarea','Descripcion'];



}
