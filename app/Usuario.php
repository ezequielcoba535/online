<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='users';
    protected $primaryKey='nick';
    protected $with=['rol'];
    // public $timestamps=false;
    public $incrementing=false;


    public $fillable=[
    	'nick',
    	'password',
    	'nombre',
    	'apellidos',
    	'id_rol',
       
    ];
    public function rol(){
    	return $this->belongsTo(Rol::class,'id_rol','id_rol');
    }
}
