<?php

namespace App\Controllers;
use App\Models\MetodosPagosModel;
class MetodosPagosController extends BaseController
{
    public function index(): string
    {
        $metodos_pagos = new MetodosPagosModel();
        $datos ['datos'] = $metodos_pagos->findAll();
        return view('metodos_pagos',$datos);
    }
    public function agregarMetodosPagos()
    {
        $metodos_pagos = new MetodosPagosModel();
        $datos=[
            'id_metodo_pago'=>$this->request->getpost('txt_codigo'),
            'tarjeta'=>$this->request->getpost('txt_tarjeta'),
            'transferencia'=>$this->request->getpost('txt_transferencia'),
        ];
        
        $metodos_pagos->insert($datos);
        return $this->index();
        }
    public function eliminarMetodosPagos($id)
    {
        $metodos_pagos = new MetodosPagosModel();
        $metodos_pagos->delete($id);
        return $this->index();
    }
    public function buscarMetodosPagos($codigo)
    {
        $metodos_pagos = new MetodosPagosModel();
        $datos['datos']=$metodos_pagos->where('id_metodo_pago',$codigo)->first();
        return view('form_editar_metodo_pago',$datos);
    }
    public function modificarMetodosPagos()
        {
            $metodos_pagos= new MetodosPagosModel();
            $datos=[
                
                'tarjeta'=>$this->request->getpost('txt_tarjeta'),
                'transferencia'=>$this->request->getpost('txt_transferencia'),
            ];

            $codigo = $this->request->getPost('txt_codigo');
            $metodos_pagos->update($codigo,$datos);
            return $this ->index();
        }

    }