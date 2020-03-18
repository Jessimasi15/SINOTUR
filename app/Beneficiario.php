<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    protected $table = 'beneficiarios';

    protected $primaryKey = 'ci_beneficiario';

    public $incrementing = false;

    protected $fillable = ['ci_beneficiario', 'organizacion_rif', 'nom_benef', 'apell_benef', 'tipo_benef_id', 'estado_id', 'munic_id', 'parroq_id', 'telef_benef', 'correo_benef', 'direc_benef'];


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

    public function tipo_beneficiario()
    {
    	return $this->belongsTo(TipoBeneficiario::class, 'tipo_benef_id');
    }
    
    public function organizacion() // REVISAR
    {
    	return $this->belongsTo(Organizacion::class, 'organizacion_rif');
    }

    public function vehiculos() // REVISAR
    {
        return $this->hasMany(Vehiculo::class);
    }

    // QUERY SCOPE
    public function scopeRif($query, $organizacion_rif)
    {
        if ($organizacion_rif) {
            return $query->where('organizacion_rif', 'ILIKE', "%$organizacion_rif%");
        }
    }

    public function scopeCedula($query, $ci_beneficiario)
    {
        if ($ci_beneficiario) {
            return $query->where('ci_beneficiario', 'ILIKE', "%$ci_beneficiario%");
        }
    }

}
