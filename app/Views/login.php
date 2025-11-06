<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>PROYECTO FINAL </title>
</head>
<body class="bg-info">
  <header class="bg-light text-dark text-center py-4">
        <h1>PROYECTOS DE PROGRAMACIÓN</h1>
        <h1></h1>
    </header>
<br>
  <div class="class container">
    <div class="class row">
          <center><h1 class="bg-secondary border border-dark mb-2" >INICIAR SESIÓN</h1></center><br>
    </div>
  </div>
   <br>
  <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <form action="<?=base_url('iniciar_sesion')?>" method="post">
                    <label for="txt_usuario" class="form-label">Usuario</label>
                    <input type="text" name="txt_usuario" id="txt_usuario" class="form-control">
                    <label for="txt_contra" class="form-label">Contraseña</label>
                    <input type="password" name="txt_contra" id="txt_contra" class="form-control">
                    
                    <button type="submit" class="form-control btn btn-primary mt-2">
                        Iniciar sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>