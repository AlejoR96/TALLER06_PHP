<!--Formulario para registrar usuarrios nuevos // vista crud Datos boton registrar usuarios-->
<form class="row g-3" action="../controllers/controllerRegistrarU.php" method="post">

    <div class="col-12">
        <label class="form-label">id</label>
        <input type="text" class="form-control" name="id" placeholder="00" value="<?php if(isset($id)){echo $id;}  ?>" required>
    </div>

    <?php
        
        if (isset($errorId)) {
            echo "<div class='alert alert-danger' role='alert'> $errorId </div>";
        }
    ?>

    <div class="col-12">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese un nombre y apellido" value="<?php if(isset($nombre)){echo $nombre;} ?>"  required>
    </div>

    <div class="col-12">
        <label class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo" placeholder="example@mail.com" value="<?php if(isset($correo)){echo $correo;}?>" required>
    </div>

    <div class="col-12">
        <label class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contrasena" placeholder="xxxxxxx" value="<?php if(isset($contrasena)){echo $contrasena;}?>"  required>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>


</form>