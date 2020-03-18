<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $table = 'parroquias';

    protected $primaryKey = 'id_parroq';

    protected $fillable = ['nom_parroq', 'munic_id'];

    public function municipio()
    {
    	return $this->belongsTo(Municipio::class, 'munic_id');
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
