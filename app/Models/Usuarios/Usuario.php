<?php

namespace App\Models\Usuarios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  use HasFactory;

//  protected $table = 'usuarios';

//  public $timestamps = false;

  public $incrementing = false;

  protected $fillable = [
    'id',
    'usuario',
    'password'
  ];

  // created_at
  // updated_at
}
