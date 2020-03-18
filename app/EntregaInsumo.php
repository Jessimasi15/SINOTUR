<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class EntregaInsumo extends Model
{
    protected $table = 'entrega_insumos';

    protected $primaryKey = 'id_entrega';

    protected $fillable = ['asignar_benef_id' ,'jornada_id', 'placa', 'tipo_insumo_id', 'insumos_id', 'medida_id', 'cantidad_entregada'];

    public function jornada()
    {
    	return $this->belongsTo(Jornada::class, 'jornada_id'); // REVISAR podria se belongsToMany
    }

    public function vehiculo()
    {
    	return $this->belongsTo(Vehiculo::class, 'placa');
    }

    public function tipo_insumo()
    {
    	return $this->belongsTo(TipoInsumo::class, 'tipo_insumo_id');
    }

    public function unidad_medida()
    {
    	return $this->belongsTo(UnidadMedida::class, 'medida_id');
    }

    public function detalle_insumo()
    {
        return $this->belongsTo(DetalleInsumo::class, 'insumos_id');
    }

    // QUERY SCOPE
    public function scopeJornada($query, $jornada)
    {
        if ($jornada) {
            $query->whereHas("jornada", function($query) use ($jornada){
                return $query->where('nom_jornada', 'ILIKE', "%$jornada%");
            });
        }
    }
}
