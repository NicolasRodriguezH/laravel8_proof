<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'coddep', 'codmun', 'codzon', 'codpuesto', 'departamento', 'municipio', 'puesto', 'mesa', 'codpar', 'cedula', 'nombre', 'email', 'telefono', 'cosescru', 'status', 'created_at', 'updated_at'];

   /*  public function getRouteKeyName()
    {
        return "slug";
    } */

    /* Aca iran las relaciones entre tablas */
}
