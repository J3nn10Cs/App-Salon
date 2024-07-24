<h1 class="nomnbre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina"> Llena el siguiente formulario para crear una cuenta </p>

<form class="formulario" action="/crear-cuenta" method="POST">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input 
            type="text"
            name="nombre"
            id="nombre"
            placeholder="Tu nombre"
        >
    </div>
    
    <div class="campo">
        <label for="apellido"> Apellido </label>
        <input 
            type="text"
            name="apellido"
            id="apellido"
            placeholder="Tu apellido"
        >
    </div>

    <div class="campo">
        <label for="telefono">Telefono</label>
        <input 
            type="tel"
            name="telefono"
            id="telefono"
            placeholder="Tu telefono"
        >
    </div>

    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            name="email"
            id="email"
            placeholder="Tu email"
        >
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            name="password" 
            id="password"
            placeholder="Tu password"
        >
    </div>

    <input type="submit" value="Crear Cuenta" class="boton">

</form>

<div class="acciones">
    <a href="/"> ¿Ya tienes una cuenta? Inicia Sesión </a>
    <a href="/olvide"> ¿Olvidaste tu contraseña? </a>
</div>