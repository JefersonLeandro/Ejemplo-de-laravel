<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    use HasFactory;

    // protected $guarded = []; campos que no se le quiere asignar 
    protected $fillable = ['nombreTitulo','body'];



}
