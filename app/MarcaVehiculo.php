<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class MarcaVehiculo extends Model
{
    protected $table = 'marca_vehiculos';

    protected $primaryKey = 'id_marca';

    protected $fillable = ['nom_marca'];

    public function vehiculos()
    {
    	return $this->hasMany(Vehiculo::class);
    }

    public function modelo_vehiculos()
    {
    	return $this->hasMany(ModeloVehiculo::class);
    }
}
