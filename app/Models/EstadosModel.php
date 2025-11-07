<?php

namespace App\Models;

use CodeIgniter\Model;
// datos de la tabla de la base de datos
class EstadosModel extends Model
{
    protected $table         = 'estados';
    protected $primaryKey = 'id_estado';
    protected $allowedFields = [
        'id_estado', 'nombre'
    ];
  
}