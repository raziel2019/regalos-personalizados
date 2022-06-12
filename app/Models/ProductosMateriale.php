<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosMateriale extends Model
{
    use HasFactory;
    protected $table = 'productos_materiales';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'productos_id',
        'materiales_id'
    ];
}
