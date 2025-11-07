<?php

namespace App\Models;

use CodeIgniter\Model;

class EstadosModel extends Model
{
    protected $table         = 'estados';
    protected $primaryKey = 'id_estado';
    protected $allowedFields = [
        'id_estado', 'nombre'
    ];
  
}