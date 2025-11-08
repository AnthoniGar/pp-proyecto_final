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
    public function agregarEstado()
    {
        $estado = new EstadosModel();
        $datos=[
            'id_estado'=>$this->request->getpost('txt_codigo'),
            'nombre'=>$this->request->getpost('txt_nombre'),
        ];
        
        $estado->insert($datos);
        return $this->index();
        }
    public function eliminarEstado($id)
    {
        $estado = new EstadosModel();
        $estado->delete($id);
        return $this->index();
    }

    }