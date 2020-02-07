<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table='roles';
    protected $primaryKey='id_rol';


    public $fillable=[
    	'id_rol',
    	'rol'
    ];
}
