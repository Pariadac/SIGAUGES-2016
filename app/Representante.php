<?php

namespace SISAUGES;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    public $timestamps = false;
    protected $table = "representante";
    protected $primaryKey = "id_representante";
    protected $fillable = ['cedula','nombre','apellido','email','telefono'];
    protected $guarded = ['id_representante','id_persona'];

    public function institucion()
    {
        return $this->belongsTo(Departamento::class,
                                'id_institucion',
                                'id_representante');

    }
}
