    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar tipo de Usuario </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="class col-4 offset-4">
                <h1>Editar Tipo de Usuario</h1>
            <form action="<?=base_url('modificar_tusuario')?>" method="post">
                <label for="txt_codigo" class="form-label">tipo Usuario Id</label>
                <input type="number" name="txt_codigo" id="txt_codigo" class="form-control"
                    value="<?=$datos['tipo_usuario_id'];?>" readonly>
                <label for="txt_tipo" class="form-label">Tipo</label>
                <input type="text" name="txt_tipo" id="txt_tipo" class="form-control"
                    value="<?=$datos['tipo'];?>">
                    <label for="txt_descripcion" class="form-label">Descripcion</label>
                <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control"
                    value="<?=$datos['descripcion'];?>">
                <button type="sumit" class="form-control btn btn-primary mt-2">Guardar Cambios </button>
            </form>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>