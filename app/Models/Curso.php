<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Filable ignorar campos protegidos y solo agregar los campos que se coloquen
    //protected $fillable = ['name', 'descripcion', 'categoria'];

    // guarded - solo proteger los campos que se introduzcan
    protected $guarded = [];

}
