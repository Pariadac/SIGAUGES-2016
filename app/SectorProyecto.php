<?php

namespace SISAUGES;

use Illuminate\Database\Eloquent\Model;

class SectorProyecto extends Model
{
    public $timestamps = false;
    protected $table = 'sector_proyecto';
    protected $primaryKey = 'id_sector_proyecto';
    protected $fillable = ['descripcion_sector'];
    protected $guarded = ['id_sector_pr'];

    public function proyecto()
    {
        return $this->hasMany(Proyecto::class,'id_sector_ac');
    }
}
