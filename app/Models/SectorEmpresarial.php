<?php

namespace App\Models;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

use App\Models\ClausulaAutorizacion;
use App\Models\FormularioDatoPersonal;
use App\Models\Corporativo;

class SectorEmpresarial extends Model
{
    use Translatable;

    protected $translatable = ['see_id'];

    protected $table = 'sectores_empresariales';

    protected $primaryKey ='see_id';

    protected $fillable = ['see_id', 'see_nombre', 'corporativo_sector_id'];

    // comentario

    public function clausulas(){
    	return $this->hasMany('App\Models\ClausulaAutorizacion', 'sector_clausula_id', 'see_id');
    }

    public function formularios(){
    	return $this->hasMany('App\Models\FormularioDatoPersonal', 'sector_empresarial_id', 'see_id');
    }

    public function corporativo(){
    	return $this->belongsTo('App\Models\Corporativo', 'corporativo_sector_id', 'cor_id');
    }

}