<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class CierreOperativo extends Model
{
    protected $table = 'cierre_operativos';

    protected $primaryKey = 'id_cierre_ope';

    protected $fillable = ['jornada_id'];

    public function jornada()
    {
    	return $this->belongsTo(Jornada::class, 'jornada_id');
    }
}
