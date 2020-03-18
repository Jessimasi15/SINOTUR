<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';

    protected $primaryKey = 'placa';

    public $incrementing = false;

    protected $fillable = ['placa', 'organizacion_rif', 'benef_ci', 'estado_id', 'bloque_id', 'marca_id', 'modelo_id', 'serial_carroceria', 'serial_motor', 'color_id', 'año_carro'];

    public function color()
    {
    	return $this->belongsTo(Color::class, 'color_id');
    }

    public function estado()
    {
    	return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function bloque()
    {
    	return $this->belongsTo(Bloque::class, 'bloque_id');
    }

    public function marca_vehiculo()
    {
    	return $this->belongsTo(MarcaVehiculo::class, 'marca_id');
    }

    public function modelo_vehiculo()
    {
    	return $this->belongsTo(ModeloVehiculo::class, 'modelo_id');
    }

    public function beneficiario()
    {
    	return $this->belongsTo(Beneficiario::class, 'benef_ci');
    }

    public function organizacion() //REVISAR
    {
    	return $this->belongsTo(Organizacion::class, 'organizacion_rif');
    }

    public function asignar_beneficiarios() //REVISAR
    {
        return $this->hasMany(AsignarBeneficiario::class);
    }

    public function entrega_insumos()
    {
        return $this->hasMany(EntregaInsumo::class);
    }

    // QUERY SCOPE
    public function scopeRif($query, $organizacion_rif)
    {
        if ($organizacion_rif) {
            return $query->where('organizacion_rif', 'ILIKE', "%$organizacion_rif%");
        }
    }

    public function scopeCi($query, $benef_ci)
    {
        if ($benef_ci) {
            return $query->where('benef_ci', 'ILIKE', "%$benef_ci%");
        }
    }
}
