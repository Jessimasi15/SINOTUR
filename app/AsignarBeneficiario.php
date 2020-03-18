<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class AsignarBeneficiario extends Model
{
    protected $table = 'asignar_beneficiarios';

    protected $primaryKey = 'id_asignar_benef';

    protected $fillable = ['jornada_id', 'placa', 'tipo_insumo_id', 'insumos_id', 'medida_id', 'cantidad_entregar'];

    public function vehiculo()
    {
    	return $this->belongsTo(Vehiculo::class, 'placa');
    }

    public function tipo_insumo()
    {
    	return $this->belongsTo(TipoInsumo::class, 'tipo_insumo_id');
    }

    public function detalle_insumo()
    {
        return $this->belongsTo(DetalleInsumo::class, 'insumos_id');
    }

    public function unidad_medida()
    {
    	return $this->belongsTo(UnidadMedida::class, 'medida_id');
    }

    public function jornada()
    {
    	return $this->belongsTo(Jornada::class, 'jornada_id'); // REVISAR podria se belongsToMany
    }

    // QUERY SCOPE
    public function scopePlaca($query, $placa)
    {
        if ($placa) {
            return $query->where('placa', 'ILIKE', "%$placa%");
        }
    }

    public function scopeJornada($query, $jornada)
    {
        if ($jornada) {
            $query->whereHas("jornada", function($query) use ($jornada){
                return $query->where('nom_jornada', 'ILIKE', "%$jornada%");
            });
        }
    }
}
