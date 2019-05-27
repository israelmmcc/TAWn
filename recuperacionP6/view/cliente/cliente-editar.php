<h1 class="page-header">
    <?php echo $cliente->id != null ? $cliente->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Cliente</a></li>
  <li class="active"><?php echo $cliente->id != null ? $cliente->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $cliente->id; ?>" />
      <div class="form-group">
        <label>Matricula</label>
        <input type="text" name="mat" value="<?php echo $cliente->mat; ?>" class="form-control" placeholder="Ingrese su matricula" required>
    </div>
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $cliente->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $cliente->Apellido; ?>" class="form-control" placeholder="Ingrese su apellido" required>
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="Correo" value="<?php echo $cliente->Correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" required>
    </div>
     <div class="form-group">
        <label>Carrera</label>
        <input type="text" name="carrera" value="<?php echo $cliente->Carrera; ?>" class="form-control" placeholder="Ingrese su carrera" required>
    </div>
        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>