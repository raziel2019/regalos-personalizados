<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $fillable = [
        'estado_id',
        'numero',
        'nombre'
    ];
    public function estados() {
        return $this->belongsTo(Estados::class,'estado_id','id');
    }
}
