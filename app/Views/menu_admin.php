<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body>
    <?php 
        //si no existe la variable de sesion activa(la cual se crea al logearse correctamente)
        if(!session()->get('activa')){
            echo "no tiene acceso";
            //return redirect()->to(base_url('/'));
            
        }else{


    ?>
    <h1>Menu Administrador</h1>
    <h2>Bienvenido(a): <?=session()->get('nombre')?> <a href="<?=base_url('cerrar_sesion')?>" class="btn btn-success"><i
                class="bi bi-power"></i></a></h2>

    <?php
        } //fin del else que verifica si la sesion esta activa
    ?>
    <div class="class container">
        <div class="class row">
            <center>
                <h1 class="bg-secondary border border-dark mb-2">MENU PRINCIPAL</h1>
            </center><br>
            <div class="class col-6">
                <a href="clientes" class="btn btn-warning mt-4">1) Clientes </a><br>
                <a href="metodos_pagos" class="btn btn-warning mt-4">2) Metodos Pagos</a><br>
                <a href="estados" class="btn btn-warning mt-4">3) Estados de pago </a><br>

            </div>

            <div class="class col">
                <a href="pagos" class="btn btn-warning mt-4">5) Pagos </a><br>
                <a href="usuarios" class="btn btn-warning mt-4">6) Usuarios </a><br>
                <a href="tipos_usuarios" class="btn btn-warning mt-4">7) Tipos de Usuarios </a><br>
                

            </div>
        </div>
        <br>
        <p class="mb-2">CERRAR SESIÓN <a href="<?=base_url('cerrar_sesion')?>" class="btn btn-success"><i
                    class="bi bi-power"></i></a></p>
    </div>

    <script rc="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>