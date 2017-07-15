<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
   protected $table='persona';

    protected $primaryKey='idpersona';

    public $timestamps=false;


    protected $fillable =[
    	'tipo_persona',
		'nombre',
		'tipo_documento',
		'numero_documento',
		'direccion',
		'direccion',
    	'email'
    ];

    protected $guarded =[

    ];

}
