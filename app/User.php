<?php

namespace SISAUGES;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = false;
    protected $table="usuario";
    protected $primaryKey = "id_usuario";
    protected $fillable = ['username', 'password','status'];
    protected $casts = ['su' => 'boolean'];
    protected $guarded = ['id_usuario'];
    protected $hidden = ['password', 'remember_token'];

    public function muestra()
    {
        return $this->hasMany(Muestra::class,'id_muestra','id_usuario');
    }

    public function rol()
    {
        return $this->belongsTo(RolUsuario::class,'id_rol','id_usuario');
    }


}
