<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class TipoBeneficiario extends Model
{
    protected $table = 'tipo_beneficiarios';

    protected $primaryKey = 'id_tipo_benef';

    protected $fillable = ['nom_tipo_benef'];

    public function beneficiarios()
    {
    	return $this->hasMany(Beneficiario::class);
    }
}
