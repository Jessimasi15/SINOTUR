<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $table = 'jornadas';

    protected $primaryKey = 'id_jornada';

    protected $fillable = ['fecha_jornada', 'nom_jornada', 'estado_id', 'almacen_id', 'direc_jornada', 'rif_empresa', 'ci_resp_jorn', 'nom_apell_resp', 'estatus'];

    public function almacen()
    {
    	return $this->belongsTo(Almacen::class, 'almacen_id');
    }

    public function estado()
    {
    	return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function cierre_operativo()
    {
        return $this->hasOne(CierreOperativo::class);
    }

    public function asignar_beneficiarios()
    {
        return $this->hasMany(AsignarBenificiarios::class);
    }

    public function entrega_insumos()
    {
        return $this->hasMany(EntregaInsumo::class);
    }

    // QUERY SCOPE
    public function scopeFecha($query, $fecha_jornada)
    {
        if ($fecha_jornada) {
            return $query->where('fecha_jornada', 'ILIKE', "%$fecha_jornada%");
        }
    }

    public function scopeJornada($query, $jornada)
    {
        if ($jornada) {
            return $query->where('nom_jornada', 'ILIKE', "%$jornada%");
        }
    }
}
