<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'position', 'age'];  // Los campos que puedes rellenar de manera masiva
}
