<?php

namespace SISAUGES;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    public $timestamps=false;
    protected $table="estudiante";
    protected $primaryKey="id_estudiante";
    protected $fillable=['carrera_estudiante', 'semestre_estudiante'];
    protected $guarded=['id_persona','id_estudiante'];

    public function actividad()
    {
        return $this->belongsTo(Proyecto::class,'id_proyecto','id_estudiante');
    }
}
