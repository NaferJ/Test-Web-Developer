<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $fecha_nacimiento
 * @property $identificacion
 * @property $profesion_u_oficio
 * @property $es_casado
 * @property $ingresos_mensuales
 * @property $vehiculo_actual
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Person extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'fecha_nacimiento' => 'required',
		'identificacion' => 'required',
		'profesion_u_oficio' => 'required',
		'es_casado' => 'required',
		'ingresos_mensuales' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','fecha_nacimiento','identificacion','profesion_u_oficio','es_casado','ingresos_mensuales','vehiculo_actual'];



}
