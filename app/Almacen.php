<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'almacens';

    protected $primaryKey = 'id_almacen';

    protected $fillable = ['nom_almacen', 'estado_id', 'direc_almacen'];

    public function estado()
    {
    	return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function jornadas()
    {
    	return $this->hasMany(Jornada::class);
    }

    public function agregar_insumos()
    {
        return $this->hasMany(AgregarInsumo::class);
    }

    public function movimiento_insumos()
    {
        return $this->hasMany(MovimientoInsumo::class);
    }

    // QUERY SCOPE
    public function scopeAlmacen($query, $nom_almacen)
    {
        if ($nom_almacen) {
            return $query->where('nom_almacen', 'ILIKE', "%$nom_almacen%");
        }
    }
}
