<div class="container">
    <div class="row mt-4">
        <div class="text-center mb-4">
            <img class="imglogo" src="../../build/img/guia2.svg" alt="Guia Práctica de Fonética" width="130">
        </div>
        <h1 class="text-center">Olvide Contraseña</h1>
        <p class="text-center">Restablece tu contraseña ingresando tu correo electrónico a continuación.</p>

        <div class="mt-4 formulario">
            <div class="col-12">
                <?php include_once __DIR__ . "/../templates/alertas.php"; ?>
                <form class="formulario" action="/olvide" method="POST">
                    <div class="campo">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input
                            type="email"
                            id="email"
                            class="form-control"
                            name="email"
                            placeholder="Correo Electrónico"
                        />
                    </div>
                    <input type="submit" class="boton btn btn-outline-primary mt-4" value="Enviar Instrucciones">
                </form>

                <div class="acciones mt-4">
                    <a href="/">¿Ya tienes una cuenta? Iniciar Sesión</a>
                    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
                </div>
            </div>
        </div>
    </div>
</div>



