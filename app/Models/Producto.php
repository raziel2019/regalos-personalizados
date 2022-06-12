<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'nombreProducto',
        'descripcionProducto',
        'precio',
        'cantidad',
        'foto'
    ];
    public function materiales()
    {
        return $this->belongsToMany(Materiale::class)->withTimestamps();
    }
    public function ventaProdcutos()
    {
        return $this->hasMany(VentaProducto::class);
    }
}
