<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'correo', 'nro_telefono'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
