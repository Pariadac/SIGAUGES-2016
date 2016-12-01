<?php

namespace SISAUGES;

use Illuminate\Database\Eloquent\Model;
use SISAUGES\Http\Controllers\InstitucionController;

class Departamento extends Model
{
    public $timestamps = false;
    protected  $table = "departamento";
    protected  $primaryKey = "id_departamento";
    protected $fillable = ['descripcion_departamento','status'];
    protected $guarded = ['id_departamento','id_institucion'];


    public function institucion()
    {
        return $this->hasMany(Institucion::class,'id_institucion','id_departamento');
    }
}
