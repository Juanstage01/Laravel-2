<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $table = "users";
    // protected $fillable = ['name','descripcion','categoria'];  //de esta manera descargar un poco la suciedad en controller aqui se guarla lo que se señala

    // protected $guarded = ['status']; //aqui se guarda todo y se señala lo que no
    protected $guarded = [];

    public function getRouteKeyName()
    {
        // return $this->getKeyName();
        return 'slug';  
    }
}
