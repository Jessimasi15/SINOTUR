<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class MarcaInsumo extends Model
{
    protected $table = 'marca_insumos';

    protected $primaryKey = 'id_marca_insumo';

    protected $fillable = ['nom_marca_insumo', 'tipo_insumo_id'];

    public function tipo_insumo()
    {
    	return $this->belongsTo(TipoInsumo::class, 'tipo_insumo_id');
    }

    public function agregar_insumos()
    {
    	return $this->hasMany(AgregarInsumo::class);
    }

    public function movimiento_insumos()
    {
        return $this->hasMany(MovimientoInsumo::class);
    }

    public function inventarios()
    {
        return $this->hasMany(Inventario::class);
    }
}
