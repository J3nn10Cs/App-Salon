<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuación</p>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">E-mail</label>
        <input 
            type="email"
            name="email"
            id="email"
            placeholder="Tu email"
        >
    </div>

    <input type="submit" value="Enviar correo" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión </a>
    <a href="/crear-cuenta"> ¿Aun no tienes una cuenta? Crea una </a>
</div>