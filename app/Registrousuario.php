<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrousuario extends Model
{
     protected $table ="usuarios";

    protected $fillable = ['nombre','email','password',]; 

    protected $primaryKey = 'id';
}
