<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumentos extends Model
{
    //
    protected $fillable = ['id','nombre_instrumento', 'marca', 'precio', 'modelo'];

    public function Users()
    {
    	return $this->belongsTo('App\User');
    }
}
