<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'usuarios';

    protected $primaryKey = 'id';

    public $timestamps = true;
    
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'password',
        'perfil_id'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class);
    }
}