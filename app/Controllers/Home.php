<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function verMenuAdmin()
    {
        return view('menu_admin');
    }
    public function verMenuEstudiante()
    {
        return view('menu_estudiante');
    }
    
}
