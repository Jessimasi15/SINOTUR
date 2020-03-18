<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';

    protected $primaryKey = 'id_color';

    protected $fillable = ['nom_color'];

    public function vehiculos()
    {
    	return $this->hasMany(Vehiculo::class);
    }
}
