<?php

namespace SISAUGES;

use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model
{
    public $timestamps=false;
    protected $table='rol_usuario';
    protected $primaryKey='id_rol';

    public function usuarios()
    {
        return $this->hasMany(User::class,'id_usuario','id_rol');
    }

}
