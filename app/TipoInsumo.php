<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class TipoInsumo extends Model
{
    protected $table = 'tipo_insumos';

    protected $primaryKey = 'id_tipo_insumo';

    protected $fillable = ['nom_tipo_insumo'];

    public function detalle_insumos()
    {
    	return $this->hasMany(DetalleInsumo::class);
    }

    public function unidad_medidas()
    {
    	return $this->hasMany(UnidadMedida::class);
    }

    public function marca_insumos()
    {
        return $this->hasMany(MarcaInsumo::class);
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
        return $this->hasMany(AsignarBeneficiario::class);
    }

    public function entrega_insumos()
    {
        return $this->hasMany(EntregaInsumo::class);
    }
}
