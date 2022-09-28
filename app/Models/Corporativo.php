<?php

namespace App\Models;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

use App\Models\SectorEmpresarial;

class Corporativo extends Model
{
    use Translatable;

    protected $translatable = ['cor_id'];

    protected $table = 'corporativos';

    protected $primaryKey ='cor_id';

    protected $fillable = ['cor_id', 'cor_enlace', 'cor_logo', 'cor_color'];

    // comentario

    public function sectores(){
    	return $this->hasMany('App\Models\SectorEmpresarial', 'corporativo_sector_id', 'cor_id');
    }

}