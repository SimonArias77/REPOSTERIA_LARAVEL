<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Importa el trait HasFactory

class Customer extends Model
{
    use HasFactory; // Usa el trait HasFactory

    // Relación: Un cliente puede tener muchas órdenes
    public function orders()
    {
        return $this->hasMany(Order::class, 'customers_id');
    }
}
