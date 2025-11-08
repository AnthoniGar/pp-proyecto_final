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
    public function agregarPago()
    {
        $pago = new PagosModel();
        $datos=[
            'id_pagos'=>$this->request->getpost('txt_codigo'),
            'fecha_pagos'=>$this->request->getpost('txt_pago'),
             'monto'=>$this->request->getpost('txt_monto'),
            'id_metodo_pago'=>$this->request->getpost('txt_metodo'),
            'id_estado'=>$this->request->getpost('txt_estado'),
            'id_cliente'=>$this->request->getpost('txt_cliente'),
        ];
    
        $pago->insert($datos);
        return $this->index();
        }
        
         public function eliminarPago($id)
         {
        $pago = new PagosModel();
        $pago->delete($id);
        return $this->index();
    }
    }