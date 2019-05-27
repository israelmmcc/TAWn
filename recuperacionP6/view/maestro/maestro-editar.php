<h1 class="page-header">
    <?php echo $maestro->id != null ? $maestro->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=maestro">Cliente</a></li>
  <li class="active"><?php echo $maestro->id != null ? $maestro->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=maestro&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $maestro->id; ?>" />
      <div class="form-group">
        <label>Empleado</label>
        <input type="text" name="empleado" value="<?php echo $maestro->empleado; ?>" class="form-control" placeholder="Ingrese su numero de empleado" required>
    </div>
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $maestro->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $maestro->Apellido; ?>" class="form-control" placeholder="Ingrese su apellido" required>
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="Correo" value="<?php echo $maestro->Correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" required>
    </div>
     <div class="form-group">
        <label>Carrera</label>
        <input type="text" name="carrera" value="<?php echo $maestro->Carrera; ?>" class="form-control" placeholder="Ingrese su carrera" required>
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