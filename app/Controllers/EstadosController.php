<?php

namespace App\Controllers;
//estoy haciendo uso del archivo GruposModel.php
use App\Models\EstadosModel;
class EstadosController extends BaseController
{
    public function index(): string
    {
        //instanciar la clase GruposModel= Crear un objeto
        $estado = new EstadosModel();
        // utilizar el método para seleccionar todos los datos 
        $datos ['datos'] = $estado->findAll();
        //grupos es una vista una pagina web 
        // //a la que el usuario ingresara
        return view('estados',$datos);
    }
    }
