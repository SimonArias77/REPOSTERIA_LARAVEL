<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Importa el trait HasFactory

class Worker extends Model
{
    use HasFactory; // Usa el trait HasFactory

    // Relación: Un trabajador puede tener muchas órdenes
    public function orders()
    {
        return $this->hasMany(Order::class, 'workers_id');
    }
}
