<?php

namespace App\Models;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

use App\Models\SectorEmpresarial;

class FormularioDatoPersonal extends Model
{
    use Translatable;

    protected $translatable = ['fdp_id'];

    protected $table = 'formularios_datos_personales';

    protected $primaryKey ='fdp_id';

    protected $fillable = ['fdp_id', 'fdp_identificacion', 'fdp_nombres', 'fdp_apellidos', 'fdp_direccion', 'fdp_ciudad', 'fdp_correo', 'fdp_numero_celular', 'sector_empresarial_id', 'usuarios'];

    // comentario

    public function sector(){
    	return $this->belongsTo('App\Models\SectorEmpresarial', 'sector_empresarial_id', 'see_id');
    }

    public function scopeCurrentUser($query){
        $query->where('usuarios', auth()->user()->id);
    }

}