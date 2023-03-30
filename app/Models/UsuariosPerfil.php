<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosPerfil extends Model
{
    use HasFactory;
    protected $table = 'usuarios_perfils';
    protected $primaryKey = 'id';

    protected $fillable = ['user_id','perfil_id'];
}
