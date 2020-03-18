<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursals';

    protected $primaryKey = 'id_sucursal';

    protected $fillable = ['empresa_rif', 'nom_coord', 'telef_coord', 'direc_coord'];

    public function empresa()
    {
    	return $this->belongsTo(Empresa::class, 'empresa_rif');
    }
}
