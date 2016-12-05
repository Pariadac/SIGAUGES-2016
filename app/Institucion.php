<?php

namespace SISAUGES;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    public $timestamps=false;
    protected $table="institucion";
    protected $primaryKey="id_institucion";
    protected $fillable = ['nombre_institucion','direccion_institucion','correo_institucional','telefono_institucion','status'];
    protected $guarded = ['id_institucion'];

    public function proyecto()
    {
        return $this->belongsToMany(Proyecto::class,
                                    'institucion_proyecto',
                                    'id_institucion',
                                    'id_proyecto');
    }

}
?>