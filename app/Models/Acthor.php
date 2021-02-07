<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acthor extends Model{
    use HasFactory;
    protected $table = 'acthors';
    protected $primaryKey = 'id';
    protected $fillable = ['name','country'];
}
