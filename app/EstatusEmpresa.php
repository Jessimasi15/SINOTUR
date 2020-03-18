<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class EstatusEmpresa extends Model
{
    protected $table = 'estatus_empresas';

    protected $primaryKey = 'id_estatus';

    protected $fillable = ['nom_estatus'];

    public function empresas()
    {
    	return $this->hasMany(Empresa::class);
    }
}
