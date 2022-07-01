<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $gerencia
 * @property $cargo
 * @property $nombre
 * @property $appaterno
 * @property $apmaterno
 * @property $carnet
 * @property $face
 * @property $insta
 * @property $twi
 * @property $regional
 * @property $cel
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    static $rules = [
		'gerencia' => 'required',
		'cargo' => 'required',
		'nombre' => 'required',
		'appaterno' => 'required',
		'apmaterno' => 'required',
		'carnet' => 'required',
		'face' => 'required',
		'insta' => 'required',
		'twi' => 'required',
		'regional' => 'required',
		'cel' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['gerencia','cargo','nombre','appaterno','apmaterno','carnet','face','insta','twi','regional','cel','email'];



}
