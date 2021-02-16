<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelRegister extends Model
{
    protected $table='register';
    protected $fillable = ['firstname','lastname', 'email', 'cpf', 'phone', 'cep', 'address', 'password'];
}
