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
    <div class="class container">
    <div class="class row">
    <h1>PAGOS</h1>
    <p class="mb-2" >CERRAR SESIÓN <a href="<?=base_url('cerrar_sesion')?>"class="btn btn-success"><i class="bi bi-power"></i></a></p>
    <p class="mb-2" >REGRESAR <a href="<?=base_url('menu_admin')?>"class="btn btn-success"><i class="bi bi-arrow-90deg-left"></i></a></p>
     <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar Pago
  <i class="bi bi-person-fill-add"></i>
</button>
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Integrante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('agregar_pago');?>" method="post">
        <label for="txt_codigo" class="form-label"> Id Pagos </label>
        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
         <label for="txt_pago" class="form-label"> fecha de Pago</label>
        <input type="date" name="txt_pago" id="txt_pago" class="form-control">
         <label for="txt_monto" class="form-label"> Monto </label>
        <input type="number" name="txt_monto" id="txt_monto" class="form-control">
         <label for="txt_metodo" class="form-label"> Id Metodo Pago </label>
        <input type="number" name="txt_metodo" id="txt_metodo" class="form-control">
         <label for="txt_estado" class="form-label"> Id Estado</label>
        <input type="number" name="txt_estado" id="txt_estado" class="form-control">
         <label for="txt_cliente" class="form-label"> Id Cliente</label>
        <input type="number" name="txt_cliente" id="txt_cliente" class="form-control">
        
        <button type="submit" class="form-control btn btn-danger mt-2">Guardar</button>
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
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
                            <a href="<?=base_url('eliminar_pago/').$pago['id_pagos'];?>" class="btn btn-success"><i class="bi bi-trash3"></i></a>
                            <a href="<?=base_url('buscar_pago/').$pago['id_pagos'];?>"class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
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