<div class="card">
    <div class="card-header">
    <a class="btn btn-success" href="?controlador=usuarios&accion=crear" role="button">Agregar usuario</a>
    </div>
    <div class="card-body table-responsive">
    <table class="table table-bordered ">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>ROL</th>
            <th>ACCION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?php echo $usuario->id;  ?></td>
                <td><?php echo $usuario->nombre;  ?></td>
                <td><?php echo $usuario->apellidos;  ?></td>
                <td><?php echo $usuario->email;  ?></td>
                <td><?php echo $usuario->username;  ?></td>
                <td><?php echo $usuario->password;  ?></td>
                <td><?php echo $usuario->rol;  ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controlador=usuarios&accion=editar&id=<?php echo $usuario->id;  ?>" class="btn btn-info">Editar</a>
                        <a href="?controlador=usuarios&accion=borrar&id=<?php echo $usuario->id;  ?>" class="btn btn-danger">Borrar</a>
                    </div>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>

    </div>

</div>

