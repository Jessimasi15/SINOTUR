<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class DetalleInsumo extends Model
{
    protected $table = 'detalle_insumos';

    protected $primaryKey = 'id_detalle_insumo';

    protected $fillable = ['nom_detalle_insumo', 'tipo_insumo_id'];

    public function tipo_insumo()
    {
    	return $this->belongsTo(TipoInsumo::class, 'tipo_insumo_id');
    }

    public function agregar_insumos()
    {
    	return $this->hasMany(AgregarInsumo::class);
    }

    public function modelo_vehiculos()
    {
        return $this->hasMany(ModeloVehiculo::class);
    }

    public function movimiento_insumos()
    {
        return $this->hasMany(MovimientoInsumo::class);
    }

    public function asignar_beneficiarios()
    {
        return $this->hasMany(AsignarBeneficiario::class);
    }

    public function entrega_insumos()
    {
        return $this->hasMany(EntregaInsumo::class);
    }
}
