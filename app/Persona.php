<?php

namespace SISAUGES;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $timestamps = false;
    protected $table = "persona";
    protected $primaryKey = "id_persona";
    protected $fillable = ['cedula','nombre','apellido','email','telefono','status','tipo_persona'];
    protected $guarded = ['id_persona','tipo_persona'];

    public function usuario()
    {
        return $this->belongsTo(User::class,'id_usuario','id_persona');
    }

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class,'id_estudiante','id_persona');
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class,'id_tutor','id_persona');
    }

}
