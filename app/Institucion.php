<?php

namespace SISAUGES;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    public $timestamps=false;
    protected $table="institucion";
    protected $primaryKey="id_institucion";
    protected $fillable = ['nombre_institucion','direccion_institucion','telefono_institucion'];
    protected $guarded = ['id_institucion'];

    public function proyecto()
    {
        return $this->belongsToMany(Proyecto::class,
                                    'institucion_proyecto',
                                    'id_proyecto',
                                    'id_institucion');
    }

    public function representante()
    {
        return $this->belongsTo(  Representante::class,
                                'id_representante',
                                'id_institucion');
    }
}
?>