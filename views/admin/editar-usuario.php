<?php
include_once __DIR__ . "/../templates/headerAdmin.php";
require '../models/Usuario.php';

// Obtener el ID del usuario
$id = $_GET['id'];
$usuario = \Model\Usuario::obtenerPorId($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Actualizar los datos del usuario
    $usuario->nombre = $_POST['nombre'];
    $usuario->apellido = $_POST['apellido'];
    $usuario->email = $_POST['email'];
    $usuario->institucion = $_POST['institucion'];
    $usuario->confirmado = $_POST['confirmado'];
    $usuario->token = $_POST['token'];
    $usuario->admin = $_POST['admin'];
    $usuario->fecha_expiracion = $_POST['fecha_expiracion'];
    $usuario->ficha_pago = $_POST['ficha_pago'];

    // Guardar los cambios
    $usuario->guardar();
    header('Location: /admin');
    
}
?>

<section class="container mt-5">
    <h1 class="mb-4 fw-light">Editar Usuario</h1>
    <form method="POST">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($usuario->nombre); ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo htmlspecialchars($usuario->apellido); ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($usuario->email); ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="institucion" class="form-label">Institución</label>
                <input type="text" class="form-control" id="institucion" name="institucion" value="<?php echo htmlspecialchars($usuario->institucion); ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="confirmado" class="form-label">Confirmado</label>
                <input type="text" class="form-control" id="confirmado" name="confirmado" value="<?php echo htmlspecialchars($usuario->confirmado); ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="token" class="form-label">Token</label>
                <input type="text" class="form-control" id="token" name="token" value="<?php echo htmlspecialchars($usuario->token); ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="admin" class="form-label">Admin</label>
                <input type="text" class="form-control" id="admin" name="admin" value="<?php echo htmlspecialchars($usuario->admin); ?>" required>
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="ficha_pago" class="form-label">Ficha de Pago</label>
                <input type="text" class="form-control" id="ficha_pago" name="ficha_pago" value="<?php echo htmlspecialchars($usuario->ficha_pago); ?>" required>
                
            </div>
        </div>
        <div class="form-group">
            <label for="fecha_expiracion">Fecha de Expiración</label>
            <input type="date" class="form-control" id="fecha_expiracion" name="fecha_expiracion" value="<?php echo date('Y-m-d', strtotime($usuario->fecha_expiracion)); ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Guardar Cambios</button>
    </form>
</section>
