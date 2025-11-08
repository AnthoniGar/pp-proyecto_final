<?php

namespace App\Controllers;
use App\Models\PagosModel;
class PagosController extends BaseController
{
    public function index(): string
    {
        
        $pago = new PagosModel();
        $datos ['datos'] = $pago->findAll();
        return view('pagos',$datos);
    }
    }