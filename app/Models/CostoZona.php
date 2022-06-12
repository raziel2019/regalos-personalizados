<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostoZona extends Model
{
    use HasFactory;
    protected $table = 'costo_zonas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'zona',
        'costo',
    ];
    public function municipios() {
        return $this->belongsToMany(Municipio::class,'municipio_id','id');
    }
}
