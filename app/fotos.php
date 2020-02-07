<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fotos extends Model
{
    //
    protected $table='productos';
    protected $primaryKey='id_producto';

     public $timestamps=false;
    // public $incrementing=false;

    public $fillable=[
    	'id_producto',
    	'nombre',
    	'tipo',
    	'descripcion',
    	'foto',

    ];

}
