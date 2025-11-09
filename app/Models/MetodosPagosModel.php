<?php

namespace App\Models;

use CodeIgniter\Model;
// datos de la tabla Metodos de pago
class MetodosPagosModel extends Model
{
    protected $table         = 'metodos_pagos';
    protected $primaryKey = 'id_metodo_pago';
    protected $allowedFields = [
        'id_metodo_pago', 'tarjeta', 'transferencia'
    ];
  
}