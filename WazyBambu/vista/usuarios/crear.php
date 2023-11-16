<div class="card">
    <div class="card-header">
        Agregar Usuario
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Ingresar nombre">
            </div>
            <div class="mb-3">
              <label for="apellidos" class="form-label">Apellidos</label>
              <input type="text" class="form-control" name="apellidos" id="" aria-describedby="helpId" placeholder="Ingresar apellidos">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Ingresar email">
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Nombre Usuario</label>
              <input required type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Crear nombre usuario">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Crear contraseña</label>
              <input required type="password" class="form-control" name="password" id="" placeholder="Crear contraseña">
            </div>
            <div class="mb-3">
              <label for="rol1" class="form-label">Rol</label>
              <input required type="text" class="form-control" name="rol1" id="" aria-describedby="helpId" placeholder="Ingresar rol(minuscula)">
            </div>
            <input name="" id="" class="btn btn-success" type="submit" value="Agregar usuario">
            <a href="?controlador=usuarios&accion=inicio" class="btn btn-primary">Cancelar</a>



        </form>

    </div>

</div>