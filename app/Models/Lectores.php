<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lectores extends Model
{
    use HasFactory;
    protected $table='lectores';
    protected $primaryakey='id';
    protected $fillable=['nombre,apellidos,telefono,direccion'];
    protected $guarded=[];
    public $timestamps=false;
}
