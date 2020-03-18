<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    protected $table = 'tipo_vehiculos';

    protected $primaryKey = 'id_tipo_vehiculo';

    protected $fillable = ['nom_tipo_vehiculo'];

    public function modelo_vehiculos()
    {
    	return $this->hasMany(ModeloVehiculo::class);
    }
}
