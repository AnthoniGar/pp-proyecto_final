<?php

namespace App\Controllers;
use App\Models\EstadosModel;
class EstadosController extends BaseController
{
    public function index(): string
    {
        $estado = new EstadosModel();
        $datos ['datos'] = $estado->findAll();
        return view('estados',$datos);
    }
    }
