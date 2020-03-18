<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class TipoOrganizacion extends Model
{
    protected $table = 'tipo_organizacions';

    protected $primaryKey = 'id_tipo_organ';

    protected $fillable = ['nom_tipo_organ'];

    public function organizacions()
    {
    	return $this->hasMany(Organizacion::class);
    }
}
