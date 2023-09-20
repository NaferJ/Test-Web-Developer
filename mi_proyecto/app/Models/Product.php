<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $placa
 * @property $marca
 * @property $modelo
 * @property $numero_de_puertas
 * @property $tipo_de_vehiculo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'placa' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'numero_de_puertas' => 'required',
		'tipo_de_vehiculo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['placa','marca','modelo','numero_de_puertas','tipo_de_vehiculo'];

    public function people()
    {
        return $this->belongsToMany(Person::class, 'person_product', 'product_id', 'person_id')->withTimestamps();
    }




}
