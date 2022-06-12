<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaProducto extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'ventasproductos';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'frase_producto',
        'usuarios_id',
        'productos_id',
        'estatusventa_id',
        'direccion_ventas_id'
    ];
    public function users()
        {
            return $this->belongsTo(User::class,'usuarios_id','id');
        }
    public function productos()
        {
            return $this->belongsTo(Producto::class);
        }
    public function estatusventas()
        {
            return $this->belongsTo(EstatusVenta::class,'estatusventa_id','id');
        }
    public function direccion_ventas()
    {
        return $this->belongsTo(DireccionVenta::class);
    }    
}
