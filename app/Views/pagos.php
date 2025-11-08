<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAGOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    <h1>PAGOS</h1>
    
            <table class="table">
                <thead>
                    <tr>
                        <th>Id Pagos</th>
                        <th>Fecha Pagos</th>
                        <th>Monto</th>
                        <th>Id Metodo Pago</th>
                        <th>Id Estado</th>
                        <th>Id Cliente</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    

                        foreach ($datos as $pago){

                       
                    ?>
                    <tr>
                        <td>  <?=$pago['id_pagos']; ?> </td>
                        <td>  <?=$pago ['fecha_pagos']; ?>      </td>
                        <td>  <?=$pago ['monto']; ?>      </td>
                        <td>  <?=$pago ['id_metodo_pago']; ?>      </td>
                        <td>  <?=$pago ['id_estado']; ?>      </td>
                        <td>  <?=$pago ['id_cliente']; ?>      </td>
                        
                        <td>

                        </td>
                    </tr>
                    <?php
                     } //fin del ciclo
                    ?>
                </tbody>
            </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>