    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuario </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="class col-4 offset-4">
                <h1>Editar Usuario</h1>
            <form action="<?=base_url('modificar_usuario')?>" method="post">
                <label for="txt_codigo" class="form-label">Usuario Id</label>
                <input type="number" name="txt_codigo" id="txt_codigo" class="form-control"
                    value="<?=$datos['usuario_id'];?>" readonly>
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                    value="<?=$datos['nombre'];?>">
                    <label for="txt_correo" class="form-label">Email</label>
                <input type="text" name="txt_correo" id="txt_correo" class="form-control"
                    value="<?=$datos['email'];?>">
                    <label for="txt_contra" class="form-label">Password</label>
                <input type="text" name="txt_contra" id="txt_contra" class="form-control"
                    value="<?=$datos['password'];?>">
                    <label for="txt_tipo" class="form-label">Tipo Usuario Id</label>
                <input type="number" name="txt_tipo" id="txt_tipo" class="form-control"
                    value="<?=$datos['tipo_usuario_id'];?>">
                    
                <button type="sumit" class="form-control btn btn-primary mt-2">Guardar Cambios </button>
            </form>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>