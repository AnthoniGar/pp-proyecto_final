<?php

namespace App\Models;

use CodeIgniter\Model;

class PagosModel extends Model
{
    protected $table         = 'pagos';
    protected $primaryKey = 'id_pagos';
    protected $allowedFields = [
        'id_pagos', 'fecha_pagos', 'monto','id_metodo_pago','id_estado','id_cliente'
    ];
  
}