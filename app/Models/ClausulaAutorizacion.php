<?php

namespace App\Models;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

use App\Models\SectorEmpresarial;

class ClausulaAutorizacion extends Model
{
    use Translatable;

    protected $translatable = ['caa_id'];

    protected $table = 'clausulas_autorizaciones';

    protected $primaryKey ='caa_id';

    protected $fillable = ['caa_id', 'caa_clausula', 'sector_clausula_id'];

    // comentario

    public function sector(){
    	return $this->belongsTo('App\Models\SectorEmpresarial', 'sector_clausula_id', 'see_id');
    }

}