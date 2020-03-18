<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    protected $table = 'unidad_medidas';

    protected $primaryKey = 'id_medida';

    protected $fillable = ['nom_medida', 'id_tipo_insumo'];

    public function tipo_insumo()
    {
    	return $this->belongsTo(TipoInsumo::class, 'id_tipo_insumo');
    }

    public function agregar_insumos()
    {
    	return $this->hasMany(AgregarInsumo::class);
    }

    public function movimiento_insumos()
    {
        return $this->hasMany(MovimientoInsumo::class);
    }

    public function asignar_beneficiarios()
    {
        return $this->hasMany(AsignarBeneficiarios::class);
    }

    public function entrega_insumos()
    {
        return $this->hasMany(EntregaInsumo::class);
    }
}
