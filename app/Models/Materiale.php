<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiale extends Model
{
    use HasFactory;
    protected $table = 'materiales';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'nombreMaterial',
        'descripcionMaterial',
        'imagenMaterial',
        'cantidad'
    ];
    public function producto()
    {
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }
}
