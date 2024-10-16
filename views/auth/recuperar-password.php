<div class="container">
    <div class="row mt-4">
        <div class="text-center mb-4">
            <img class="imglogo" src="../../build/img/guia2.svg" alt="Guia Práctica de Fonética" width="130">
        </div>
        <h1 class="text-center">Recuperar Contraseña</h1>
        <p class="text-center">Coloca tu nueva contraseña a continuación</p>
        <div class="row mt-4 formulario">
            <div class="col-12">
                <?php include_once __DIR__ . "/../templates/alertas.php"; ?>
                <!-- <?php if($error) return; ?> -->
                <form class="formulario" method="POST">
                    <div class="campo">
                        <label for="password" class="form-label">Contraseña</label>
                        <input
                            type="password"
                            id="password"
                            class="form-control"
                            name="password"
                            placeholder="Nueva contraseña"
                        />
                    </div>
                    <input type="submit" class="boton btn btn-outline-primary mt-4" value="Guardar Nuevo Password">

                </form>

                <div class="acciones mt-4">
                    <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
                    <a href="/crear-cuenta">¿Aún no tienes cuenta? Obtener una</a>
                </div>
            </div>
        </div>

    </div>
</div>







