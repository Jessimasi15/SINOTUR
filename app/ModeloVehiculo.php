<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class ModeloVehiculo extends Model
{
    protected $table = 'modelo_vehiculos';

    protected $primaryKey = 'id_modelo';

    protected $fillable = ['nom_modelo', 'marca_id', 'tipo_vehic_id', 'chasis', 'carroceria', 'caucho_id', 'cantidad_caucho', 'aceite_id', 'cantidad_litros', 'bateria_id', 'capacidad'];

    public function vehiculos()
    {
    	return $this->hasMany(Vehiculo::class);
    }

    public function tipo_vehiculo()
    {
    	return $this->belongsTo(TipoVehiculo::class, 'tipo_vehic_id');
    }

    public function marca_vehiculo()
    {
        return $this->belongsTo(MarcaVehiculo::class, 'marca_id');
    }

    public function detalle_insumo()
    {
        return $this->belongsTo(DetalleInsumo::class); // caucho_id aceite_id bateria_id
    }
}
