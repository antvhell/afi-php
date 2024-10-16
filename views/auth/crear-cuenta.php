<div class="container">
    <div class="row mt-4">
        <div class="text-center mb-4">
            <img class="imglogo" src="../../build/img/guia2.svg" alt="Guia Práctica de Fonética" width="130">
        </div>
        
        <h4 class="">Pasos a seguir para registrarse</h4>
        <p class="mt-2">1.- Realiza el pago mediante transferencia bancaria, depósito o PayPal</p>
        <div class="row mt-2  shadow p-3 mb-4 bg-body-tertiary rounded">
            <div class="col-xl-7 col-sm-12">
                <h5 class="text-center ">Información para transferencias o depósitos bancarios.</h5>
                <p class="mt-4 lh-1"><strong>Banco:</strong> BBVA Bancomer, S.A.</p>
                <p class="lh-1"><strong>Nombre exacto del beneficiario:</strong> El Colegio de México, A.C.</p>
                <p class="lh-1"><strong>Nombre de la cuenta:</strong> R11L8K COLMEX ING RECURSOS PROP SERVICIOS EDUCATIVOS BB</p>
                <p class="lh-1"><strong>Número de cuenta:</strong> 0120981656</p>
                <p class="lh-1"><strong>CLABE:</strong> 012180001209816562</p>
                <p class="lh-1"><strong>Donativo:</strong> $50.00 MXN</p>
            </div>
            <div class="col-xl-5 col-sm-12 text-center">
                <h5 class="text-center">Pago via PayPal</h5>
                    <style>.pp-Z8H6BVWUW25PE{text-align:center;border:none;border-radius:1.5rem;min-width:11.625rem;padding:0 2rem;height:2.625rem;font-weight:bold;background-color:#FFD140;color:#000000;font-family:"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.25rem;cursor:pointer;}</style>
                    <form action="https://www.paypal.com/ncp/payment/Z8H6BVWUW25PE" method="post" target="_top" style="display:inline-grid;justify-items:center;align-content:start;gap:0.5rem;">
                    <input class="pp-Z8H6BVWUW25PE" type="submit" value="Comprar ahora" />
                    <img src=https://www.paypalobjects.com/images/Debit_Credit_APM.svg alt="cards" />
                    <section> Con la tecnología de <img src="https://www.paypalobjects.com/paypal-ui/logos/svg/paypal-wordmark-color.svg" alt="paypal" style="height:0.875rem;vertical-align:middle;"/></section>
                    </form>
            </div>

        </div>
        <p class="mt-2">2.- Completa el siguiente formulario y adjunta el recibo de pago en la sección correspondiente.</p>

        <h1 class="text-center mt-4">Crear cuenta</h1>
        <p class="text-center">Llena el siguiente formulario para crear una cuenta</p>

        <div class="mt-4 formulario">
            <div class="col-12">
            <?php
            include_once __DIR__ . "/../templates/alertas.php"
        ?>
        <form class="formulario" method="POST" action="/crear-cuenta" enctype="multipart/form-data">
            <div class="campo">
                <label class="form-label" for="nombre">*Nombre</label>
                <input
                    class="form-control" 
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Nombre"
                    value="<?php echo s($usuario->nombre) ?>"
                />
            </div>
            <div class="campo mt-4">
                <label class="form-label" for="apellido">*Apellidos</label>
                <input
                    class="form-control"
                    type="text"
                    id="apellido"
                    name="apellido"
                    placeholder="Apellidos"
                    value="<?php echo s($usuario->apellido) ?>"
                />
            </div>

            <div class="campo mt-4">
                <label class="form-label" for="institucion">*Institución Educativa</label>
                <input
                    class="form-control" 
                    type="tel"
                    id="institucion"
                    name="institucion"
                    placeholder="Institución Educativa"
                    value="<?php echo s($usuario->institucion) ?>"
                />
            </div>

            <div class="campo mt-4">
                <label class="form-label" for="email">*Correo Electrónico</label>
                <input
                    class="form-control" 
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Correo Electrónico"
                    value="<?php echo s($usuario->email) ?>"
                />
            </div>

            <div class="campo mt-4">
                <label class="form-label" for="password">*Contraseña</label>
                <input
                    class="form-control" 
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Contraseña"
                />
            </div>

            <!-- TODO: Falta realizar la comprobación del pago -->
            <div class="campo mt-4">
                <label class="form-label" for="ficha_pago">*Comprobante de pago</label>
                <input
                    class="form-control"
                    type="file"
                    id="ficha_pago"
                    name="ficha_pago"
                    placeholder="Subir ficha de pago"
                />
               
            </div>
            <p class="text-body-secondary">Tamaño máximo: 32 MB. Extensiones permitidas: doc, rtf, pdf, jpg, jpeg, png</p>

            <input type="submit" class="boton btn btn-outline-primary mt-4" value="Crear cuenta">
        </form>

        <div class="acciones mt-4">
            <a href="/">¿Ya tienes una cuenta? Iniciar Sesión</a>
            <a href="/olvide">¿Olvidaste tu contraseña?</a>
        </div>


            </div>
        </div>
    </div>
</div>




