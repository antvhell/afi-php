<?php include_once __DIR__ . "/../templates/headerAdmin.php"; ?>

<?php
// Cargar la clase Usuario
require '../models/Usuario.php';

// Obtener todos los usuarios
$usuarios = \Model\Usuario::obtenerTodos();
?>

<section class="container">
  <div class="text-center slider animated fadeIn">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Guía Práctica de Fonética</h1>
        <h5>Administrador de cuentas</h5>
      </div>
    </div>
  </div>
  </section>

  <main class="flex-grow-1 container slider animated fadeIn">
  <table class="table">
  <thead>
    <tr class="text-center">
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo Electrónico</th>
      <!-- <th scope="col">Contraseña</th> -->
      <th scope="col">Institución</th>
      <th scope="col" class="text-danger">Confirmado</th>
      <th scope="col">Token</th>
      <th scope="col">Admin</th>
      <th scope="col">Inicio</th>
      <th scope="col">Expiración</th>
      <th scope="col">Ficha de pago</th>
      <th scope="col">Acciones</th>
      
    </tr>
  </thead>
  <tbody class="text-center">
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario->id; ?></td>
            <td><?php echo $usuario->nombre; ?></td>
            <td><?php echo $usuario->apellido; ?></td>
            <td><?php echo $usuario->email; ?></td>
            <td><?php echo $usuario->institucion; ?></td>
            <td class="text-danger"><?php echo $usuario->confirmado; ?></td>
            <td><?php echo $usuario->token; ?></td>
            <td><?php echo $usuario->admin; ?></td>
            <td><?php echo $usuario->fecha_inicio; ?></td>
            <td><?php echo $usuario->fecha_expiracion; ?></td>
            <td>
              <?php if (!empty($usuario->ficha_pago)): ?>
              <?php $ext = pathinfo($usuario->ficha_pago, PATHINFO_EXTENSION); ?>
              <?php if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])): ?>
                <a href="/build/uploads/<?php echo $usuario->ficha_pago; ?>" download="Ficha de pago">Descargar ficha de pago</a>
              <?php elseif ($ext === 'pdf'): ?>
                  <a href="/build/uploads/<?php echo $usuario->ficha_pago; ?>" target="_blank">Ver PDF</a>
              <?php else: ?>
                  <a href="/build/uploads/<?php echo $usuario->ficha_pago; ?>" target="_blank">Descargar archivo</a>
              <?php endif; ?>
          <?php else: ?>
              No disponible
          <?php endif; ?>

              </td>
              <td>
                <a href="/admin/editar-usuario?id=<?php echo $usuario->id; ?>" class="btn btn-primary">Editar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    
   
  </tbody>
</table>
 


      </main>
      <footer>
  </section>
</section>

