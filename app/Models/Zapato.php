<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Zapato
 *
 * @property $id
 * @property $model
 * @property $descripcion
 * @property $price
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Zapato extends Model
{
    
    static $rules = [
		'model' => 'required',
		'descripcion' => 'required',
		'price' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['model','descripcion','price','cantidad'];



}
