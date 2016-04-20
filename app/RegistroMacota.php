<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroMacota extends Model
{
    protected $table="mascotas";
	protected $fillable=['nombre', 'edad', 'tipo', 'color',];
	protected $primaryKey='id';
}
