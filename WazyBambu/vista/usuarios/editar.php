<div class="card">
    <div class="card-header">
        Modificar usuario
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="" class="form-label">Id</label>
              <input readonly type="text" class="form-control" value="<?php echo $usuario->id;  ?>" name="id" aria-describedby="helpId" placeholder="id usuario">
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" value="<?php echo $usuario->nombre;  ?>" name="nombre" aria-describedby="helpId" placeholder="Ingresar nombre">
            </div>
            <div class="mb-3">
              <label for="apellidos" class="form-label">Apellidos</label>
              <input type="text" class="form-control" value="<?php echo $usuario->apellidos;  ?>" name="apellidos" aria-describedby="helpId" placeholder="Ingresar apellidos">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" value="<?php echo $usuario->email;  ?>" name="email" aria-describedby="emailHelpId" placeholder="Ingresar email">
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Nombre Usuario</label>
              <input required type="text" class="form-control" value="<?php echo $usuario->username;  ?>" name="username" aria-describedby="helpId" placeholder="Crear nombre usuario">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input required type="password" class="form-control" value="<?php echo $usuario->password;  ?>" name="password" placeholder="Crear contraseña">
            </div>
            <div class="mb-3">
              <label for="rol1" class="form-label">Rol</label>
              <input required type="text" class="form-control" value="<?php echo $usuario->rol;  ?>" name="rol1" aria-describedby="helpId" placeholder="Ingresar rol(minuscula)">
            </div>
            <input name="" id="" class="btn btn-success" type="submit" value="Modificar usuario">
            <a href="?controlador=usuarios&accion=inicio" class="btn btn-primary">Cancelar</a>



        </form>

    </div>

</div>