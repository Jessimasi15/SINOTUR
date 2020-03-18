<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';

    protected $primaryKey = 'id_munic';

    protected $fillable = ['nom_munic', 'estado_id'];

    public function estado()
    {
    	return $this->belongsTo(Estado::class, 'estado_id');
    }
    
    public function parroquias()
    {
    	return $this->hasMany(Parroquia::class);
    }

    public function beneficiarios()
    {
        return $this->hasMany(Beneficiario::class);
    }

    public function organizacions()
    {
        return $this->hasMany(Organizacion::class);
    }
}
