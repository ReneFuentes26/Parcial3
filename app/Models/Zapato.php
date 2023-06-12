<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Zapato
 *
 * @property $id
 * @property $name
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
		'name' => 'required',
		'descripcion' => 'required',
		'price' => 'required',
		'cantidad' => 'required',
        'image'=>'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['model','descripcion','price','cantidad'];



}
