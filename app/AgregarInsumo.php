<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class AgregarInsumo extends Model
{
    protected $table = 'agregar_insumos';

    protected $primaryKey = 'id_agreg_insumos';

    protected $fillable = ['numero_orden', 'fecha_desp', 'fecha_inven', 'tipo_insumo_id', 'marca_id', 'insumos_id', 'almacen_id', 'medida_id', 'cantidad', 'monto_compra'];

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
