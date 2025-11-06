<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    //metodo para establecer el inicio de sesion
    public function index()
    {
        $email = $this->request->getPost('txt_usuario');
        $contra = $this->request->getPost('txt_contra');
        $usuarios = new UsuariosModel();
        /*select * from usuarios where email= .. and password= ...*/
        $datos= $usuarios->select('nombre,tipo_usuario_id')
            ->where('email',$email)
            ->where('password',$contra)
            ->first();
        if($datos){
            //print_r($datos);
            //echo ("<br>nombre: ". $datos['nombre']);
            //echo ("<br>Tipo usuario: ". $datos['tipo_usuario_id']);
           
            //array con los datos del usuario
            $sesion=[
                'nombre'=>$datos['nombre'],
                'tipo'=>$datos['tipo_usuario_id'],
                'activa'=>true //esta bandera servira para ver si se tiene acceso o no a las demas páginas
            ]; 
            //crear variables de sesion acceder a ellos desde cualquier página
            session()->set($sesion);

            if($datos['tipo_usuario_id']==100){
                return view('menu_admin');
            }elseif($datos['tipo_usuario_id']==101){
                return view('menu_estudiante');
            }else{
                echo ("Tipo de dato desconocido");
            }
        }else{
            return redirect()->to(base_url(''));
        }
        
        //echo ("Correo: ". $email);
        //echo ("contra: ". $contra);
        //return view('login');
    }
    public function cerrarSesion(){
        //destruye las variables de sesión
        session()->destroy();
        //lleva a la página de inicio
        return redirect()->to(base_url(''));
    }
    
}