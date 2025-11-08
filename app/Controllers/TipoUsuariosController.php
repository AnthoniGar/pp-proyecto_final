<?php

namespace App\Controllers;
use App\Models\TipoUsuariosModel;
class TipoUsuariosController extends BaseController
{
    public function index(): string
    {
        
        $tusuario = new TipoUsuariosModel();
        $datos ['datos'] = $tusuario->findAll();
        return view('tipos_usuarios',$datos);
    }
    public function agregarTusuario()
    {
        $tusuario = new TipoUsuariosModel();
        $datos=[
            'tipo_usuario_id'=>$this->request->getpost('txt_codigo'),
            'tipo'=>$this->request->getpost('txt_tipo'),
            'descripcion'=>$this->request->getpost('txt_descripcion'),
            
        ];
    
        $tusuario->insert($datos);
        return $this->index();
        }
        
         public function eliminarTusuario($id)
         {
        $tusuario = new TipoUsuariosModel();
        $tusuario->delete($id);
        return $this->index();
    }
    public function buscarTusuario($codigo)
    {
        $tusuario = new TipoUsuariosModel();
        $datos['datos']=$tusuario->where('tipo_usuario_id',$codigo)->first();
        return view('form_editar_tusuario',$datos);
    }
    public function modificarTusuario()
    {
        $tusuario= new TipoUsuariosModel();
        $datos=[
            'tipo_usuario_id'=>$this->request->getpost('txt_codigo'),
            'tipo'=>$this->request->getpost('txt_tipo'),
            'descripcion'=>$this->request->getpost('txt_descripcion'),
            
        ];

        $codigo = $this->request->getPost('txt_codigo');
        $tusuario->update($codigo,$datos);
        return $this ->index();
        }
    }
    
    
