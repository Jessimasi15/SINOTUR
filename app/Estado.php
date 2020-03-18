<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';

    protected $primaryKey = 'id_estado';

    protected $fillable = ['nom_estado'];

    public function municipios()
    {
    	return $this->hasMany(Municipio::class);
    }

    public function almacens()
    {
    	return $this->hasMany(Almacen::class);
    }

    public function jornadas()
    {
    	return $this->hasMany(Jornada::class);
    }

    public function beneficiarios()
    {
        return $this->hasMany(Beneficiario::class);
    }

    public function organizacions()
    {
        return $this->hasMany(Organizacion::class);
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
