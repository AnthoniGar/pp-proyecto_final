<?php

namespace App\Controllers;
use App\Models\ClientesModel;
class ClientesController extends BaseController
{
    public function index(): string
    {
        $cliente = new ClientesModel();
        $datos ['datos'] = $cliente->findAll();
        return view('clientes',$datos);
    }
    public function agregarCliente()
    {
        $cliente = new ClientesModel();
        $datos=[
            'id_cliente'=>$this->request->getpost('txt_codigo'),
            'nombre'=>$this->request->getpost('txt_nombre'),
            'apellido'=>$this->request->getpost('txt_apellido'),
            'direccion'=>$this->request->getpost('txt_direccion'),
            'no_telefono'=>$this->request->getpost('txt_telefono'),
            'email'=>$this->request->getpost('txt_email'),
        ];
        
        $cliente->insert($datos);
        return $this->index();
        }
    public function eliminarCliente($id)
    {
        $cliente = new ClientesModel();
        $cliente->delete($id);
        return $this->index();
    }
    public function buscarCliente($codigo)
    {
        $cliente = new ClientesModel();
        $datos['datos']=$cliente->where('id_cliente',$codigo)->first();
        return view('form_editar_cliente',$datos);
    }
    public function modificarCliente()
        {
            $cliente= new ClientesModel();
            $datos=[
                
                'nombre'=>$this->request->getpost('txt_nombre'),
                'apellido'=>$this->request->getpost('txt_apellido'),
                'direccion'=>$this->request->getpost('txt_direccion'),
                'no_telefono'=>$this->request->getpost('txt_telefono'),
                'email'=>$this->request->getpost('txt_email'),
            ];

            $codigo = $this->request->getPost('txt_codigo');
            $cliente->update($codigo,$datos);
            return $this ->index();
        }

    }