<div class="container">
    <div class="row mt-4">
        <div class="text-center mb-4">
            <img class="imglogo" src="../../build/img/guia2.svg" alt="Guia Práctica de Fonética" width="130">
        </div>
        <h1 class="text-center">Iniciar sesión</h1>
        <p class="text-center">Inicia sesión con tus datos</p>
        <div class="col-12">
            <?php
                include_once __DIR__ . "/../templates/alertas.php"
            ?>
        <form class="formulario mt-4" method="POST" action="/">
        <div class="campo">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input
                type="email"
                id="email"
                class="form-control"
                placeholder="Correo Electrónico"
                name="email"
            />
        </div>

        <div class="campo mt-4">
            <label for="password" class="form-label">Contraseña</label>
            <input
                type="password"
                id="password"
                class="form-control"
                placeholder="Contraseña"
                name="password"
            />
        </div>
        <input type="submit" class="boton btn btn-outline-primary mt-4" value="Iniciar Sesión">
    </form>

    <div class="acciones mt-4">
        <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
        <a href="/olvide">¿Olvidaste tu contraseña?</a>
    </div>
        </div>

    </div>
</div>