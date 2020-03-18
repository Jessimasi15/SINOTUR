<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventarios';

    protected $primaryKey = 'id_inventario';

    protected $fillable = ['almacen_id', 'tipo_insumo_id', 'marca_id', 'insumos_id', 'medida_id', 'cantidad_total'];

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

    // QUERY SCOPE
    public function scopeAlmacen($query, $almacen)
    {
        if ($almacen) {
            $query->whereHas("almacen", function($query) use ($almacen){
                return $query->where('nom_almacen', 'ILIKE', "%$almacen%");
            });
        }
    }

    public function scopeTipo($query, $tinsumos)
    {
        if ($tinsumos) {
            $query->whereHas("tipo_insumo", function($query) use ($tinsumos){
                return $query->where('nom_tipo_insumo', 'ILIKE', "%$tinsumos%");
            });
        }
    }
}
