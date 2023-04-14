<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pet
 *
 * @property $nick
 * @property $password
 * @property $name
 * @property $dog_breed
 * @property $gender
 * @property $age
 * @property $human_name
 * @property $tel
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pet extends Model
{
    
    static $rules = [
		'nick' => 'required',
    'password' => 'required',
		'name' => 'required',
		'dog_breed' => 'required',
		'gender' => 'required',
		'age' => 'required',
		'human_name' => 'required',
		'tel' => 'required',
		'image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nick','password','name','dog_breed','gender','age','human_name','tel','image'];

    protected $primaryKey = 'nick';

}
