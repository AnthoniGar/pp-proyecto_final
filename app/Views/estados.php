<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESTADOS DE PAGO </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
     <div class="class container">
    <div class="class row">

    <h1>ESTADOS</h1>
    <p class="mb-2" >CERRAR SESIÓN <a href="<?=base_url('cerrar_sesion')?>"class="btn btn-success"><i class="bi bi-power"></i></a></p>
    <p class="mb-2" >REGRESAR <a href="<?=base_url('menu_admin')?>"class="btn btn-success"><i class="bi bi-arrow-90deg-left"></i></a></p>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id Estado</th>
                        <th>Nombre de Estado</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
            
                        foreach ($datos as $estado){

                       
                    ?>
                    <tr>
                        <td> <?=$estado ['id_estado']; ?> </td>
                        <td>  <?=$estado ['nombre']; ?>      </td>
                        <td>
                         
                        </td>
                    </tr>
                    <?php
                     }
                    ?>
                </tbody>
            </table>
     </div>
    </div>       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>