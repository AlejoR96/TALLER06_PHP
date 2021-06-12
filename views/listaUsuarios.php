<!--- Sub vista tabla-->
<h2 class="h2 mb-3 text-center">USUARIOS REGISTRADOS</h2>

<!--- Inicio Tabla -->
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Contraseña</th> 
        </tr>
    </thead>

    <tbody>
    <?php 
        foreach ($listaU as $usuario) {
            
    ?>
        <tr>
            <th scope="row"><?php echo $usuario['id']?></th>
            <td><?php echo $usuario['nombre']?></td>
            <td><?php echo $usuario['correo']?></td>
            <td><?php echo $usuario['contrasena']?></td>
        </tr>
    <?php 
    }
    ?>
    </tbody>
</table>
<!--- Final Tabla -->