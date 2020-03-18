<?php

namespace Sinotur;

use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    protected $table = 'tipo_servicios';

    protected $primaryKey = 'id_tipo_serv';

    protected $fillable = ['nom_tipo_serv'];
}
