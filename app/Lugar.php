<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = 'destinos';
    protected $fillable =[
                'nombre' ,
                'descripccion',
                'latitud',
                'longitud' ,
                'giro',
                'link' ,
                'imagen',
                'galeria1',
                'galeria2',
                'galeria3',
                'galeria4',
    ];

    protected $hidden = [
        'created_at' , 'updated_at'
    ];
}
