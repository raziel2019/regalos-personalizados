<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smza extends Model
{
    use HasFactory;
    protected $table = 'smzas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'municipio_id',
        'costo_zona_id',
        'smza',
    ];
    public function costo_zonas() {
        return $this->belongsTo(CostoZona::class, 'costo_zona_id', 'id');

    }
    public function municipios() {
        return $this->belongsTo(Municipio::class,'municipio_id','id');
    }
}
