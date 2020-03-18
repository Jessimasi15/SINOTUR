<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    protected $table = 'bloques';

    protected $primaryKey = 'id_bloque';

    protected $fillable = ['nom_bloque', 'nom_resp_principal', 'apell_resp_principal', 'telef_resp_principal', 'nom_resp_suplente', 'apell_resp_suplente', 'telef_resp_suplente'];

    public function organizacions()
    {
    	return $this->hasMany(Organizacion::class);
    }

    public function vehiculos()
    {
    	return $this->hasMany(Vehiculo::class);
    }
}
