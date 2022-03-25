<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $carne
 * @property $nombre
 * @property $foto
 * @property $año
 * @property $sede
 * @property $carrera_id
 *
 * @property Carrera $carrera
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'carne' => 'required',
		'nombre' => 'required',
		'foto' => 'required',
		'año' => 'required',
		'sede' => 'required',
		'carrera_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['carne','nombre','foto','año','sede','carrera_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'id', 'carrera_id');
    }
    

}
