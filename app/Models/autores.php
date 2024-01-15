<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autores extends Model
{
    use HasFactory;
    protected $table='autores';
    protected $primarykey='id';
    protected $fillable=['autor'];
    protected $guarded=[];
    public $timestamps=false;

}
