<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegiados extends Model
{
     /**
     * tabla de Colegiados
     *
     * @var String
     */
    protected $table = 'colegiados';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres',
       	'apellido_paterno',
       	'apellido_materno',
       	'especialidad',
       	'region',
       	'departamento',
       	'universidad',
       	'sexo',
       	'dni',
       	'fechanac',
       	'correo',
       	'direccion',
       	'telefono',
    ];



     /**
     * datos asignados automaticamente
     *
     * @var String
     */
    protected $guarded = ['num_ctmp'];

}
