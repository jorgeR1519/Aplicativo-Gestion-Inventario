<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table ='articulos';

    protected $primarykey ='idarticulo';

    protected $fillable = [
        'idarticulo', 
        'categoria_id',
        'codigo',
        'nombre',
        'estado',
        'imagen',
        'descripcion',
        'stock'
    ];
}
