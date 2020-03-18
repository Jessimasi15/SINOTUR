<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $primaryKey = 'rif_empresa';

    protected $fillable = ['rif_empresa', 'nom_empresa', 'telef_empresa', 'correo_empresa', 'sitio_web', 'estatus_id', 'twitter', 'instagram', 'facebook', 'direc_empresa'];

    public function estatus_empresa()
    {
    	return $this->belongsTo(EstatusEmpresa::class, 'estatus_id');
    }

    public function sucursals()
    {
    	return $this->hasMany(Sucursal::class);
    }
}
