<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cruz extends Model
{
    //
    protected $table='administradores';
    protected $primaryKey='id_administrador';

     public $timestamps=false;
    // public $incrementing=false;

    public $fillable=[
    	'id_administrador',
    	'nombre',
    	'apellidos',
    	'telefono',
    	'direccion',
    	'email',

    ];

}
