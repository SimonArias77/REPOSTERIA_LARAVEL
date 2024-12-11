<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Importa el trait HasFactory

class Order extends Model
{
    use HasFactory; // Usa el trait HasFactory

    // Relación: Una orden pertenece a un cliente
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customers_id');
    }

    // Relación: Una orden pertenece a un trabajador
    public function worker()
    {
        return $this->belongsTo(Worker::class, 'workers_id');
    }
}
