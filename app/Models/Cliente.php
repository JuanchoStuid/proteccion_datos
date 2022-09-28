<?php

namespace App\Models;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

// use App\Models\ClausulaAutorizacion;

class Cliente extends Model
{
    use Translatable;

    protected $translatable = ['cli_id'];

    protected $table = 'clientes';

    protected $primaryKey ='cli_id';

    protected $fillable = ['cli_id', 'cli_identificacion', 'cli_nombres', 'cli_apellidos', 'cli_telefono_celular', 'cli_direccion'];

    // comentario

    // public function clausulas(){
    // 	return $this->hasMany('App\Models\ClausulaAutorizacion', 'sector_clausula_id', 'see_id');
    // }

}