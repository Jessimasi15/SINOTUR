<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class MovimientoInsumo extends Model
{
    protected $table = 'movimiento_insumos';

    protected $primaryKey = 'id_asignacion';

    protected $fillable = ['almacen_id', 'tipo_insumo_id', 'marca_id', 'insumos_id', 'medida_id', 'cantidad_movida', 'numero_orden', 'ganancia', 'monto_real'];

    public function tipo_insumo()
    {
    	return $this->belongsTo(TipoInsumo::class, 'tipo_insumo_id');
    }

    public function detalle_insumo()
    {
    	return $this->belongsTo(DetalleInsumo::class, 'insumos_id');
    }

    public function almacen()
    {
    	return $this->belongsTo(Almacen::class, 'almacen_id');
    }

    public function unidad_medida()
    {
    	return $this->belongsTo(UnidadMedida::class, 'medida_id');
    }

    public function marca_insumo()
    {
        return $this->belongsTo(MarcaInsumo::class, 'marca_id');
    }
}
