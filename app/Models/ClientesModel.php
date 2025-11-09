<?php

namespace App\Models;

use CodeIgniter\Model;
// datos de la tabla clientes
class ClientesModel extends Model
{
    protected $table         = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $allowedFields = [
        'id_cliente', 'nombre', 'apellido', 'direccion', 'no_telefono', 'email'
    ];
  
}