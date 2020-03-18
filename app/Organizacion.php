<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    protected $table = 'organizacions';

    protected $primaryKey = 'rif_organizacion';

    public $incrementing = false;

    protected $fillable = ['rif_organizacion', 'nom_organizacion', 'tipo_organ_id', 'ci_presidente', 'nom_presidente', 'apell_presidente', 'correo_organ', 'telef_local', 'telef_celular', 'estado_id', 'munic_id', 'parroq_id', 'bloque_id', 'ruta_organ', 'direc_organ'];

    public function estado()
    {
    	return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function municipio()
    {
    	return $this->belongsTo(Municipio::class, 'munic_id');
    }

    public function parroquia()
    {
    	return $this->belongsTo(Parroquia::class, 'parroq_id');
    }

    public function bloque()
    {
    	return $this->belongsTo(Bloque::class, 'bloque_id');
    }

    public function tipo_organizacion()
    {
    	return $this->belongsTo(TipoOrganizacion::class, 'tipo_organ_id');
    }

    public function beneficiarios() // REVISAR
    {
        return $this->hasMany(Beneficiario::class);
    }

    public function vehiculos() // REVISAR
    {
        return $this->hasMany(Vehiculo::class);
    }

    // QUERY SCOPE
    public function scopeRif($query, $rif_organizacion)
    {
        if ($rif_organizacion) {
            return $query->where('rif_organizacion', 'ILIKE', "%$rif_organizacion%");
        }
    }
}
