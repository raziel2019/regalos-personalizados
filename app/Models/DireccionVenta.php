<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DireccionVenta extends Model
{
    use HasFactory;
    protected $table = 'direccion_ventas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'smza_id',
        'mza',
        'lote',
        'calle',
        'colonia',
        'noExterior',
        'noInterior',
        'cpp'
    ];
    public function smza() {
        return $this->belongsTo(Smza::class, 'smza_id', 'id');

    }
}
