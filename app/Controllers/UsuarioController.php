<?php

namespace App\Controllers;
use App\Models\UsuariosModel;
class UsuarioController extends BaseController
{
    public function index(): string
    {
        
        $usuario = new UsuariosModel();
        $datos ['datos'] = $usuario->findAll();
        return view('usuarios',$datos);
    }
    public function agregarUsuario()
    {
        $usuario = new UsuariosModel();
        $datos=[
            'usuario_id'=>$this->request->getpost('txt_codigo'),
            'nombre'=>$this->request->getpost('txt_nombre'),
            'email'=>$this->request->getpost('txt_correo'),
            'password'=>$this->request->getpost('txt_contra'),
            'tipo_usuario_id'=>$this->request->getpost('txt_tipo'),
            
        ];
    
        $usuario->insert($datos);
        return $this->index();
        }
        
         public function eliminarUsuario($id)
         {
        $usuario = new UsuariosModel();
        $usuario->delete($id);
        return $this->index();
    }
    public function buscarUsuario($codigo)
    {
        $usuario = new UsuariosModel();
        $datos['datos']=$usuario->where('usuario_id',$codigo)->first();
        return view('form_editar_usuario',$datos);
    }
    public function modificarUsuario()
    {
        $usuario= new UsuariosModel();
        $datos=[
            'nombre'=>$this->request->getpost('txt_nombre'),
            'email'=>$this->request->getpost('txt_correo'),
            'password'=>$this->request->getpost('txt_contra'),
            'tipo_usuario_id'=>$this->request->getpost('txt_tipo'),
            
        ];

        $codigo = $this->request->getPost('txt_codigo');
        $usuario->update($codigo,$datos);
        return $this ->index();
        }
    }
    
    
