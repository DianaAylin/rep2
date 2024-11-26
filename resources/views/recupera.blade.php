<html>
    <body>
        <h1>Estimado Usuario</h1>
        <br>
        Se ha realizado un cambio de contraseña de tu cuenta, 
        por favor regresa al sitio y accesa con la siguiente información
        <br>
        Usuario: {{$usuario}}
        <br>
        Clave: {{$nuevaclave}}
        <br>
        Ocupar estos accesos en la URL de acceso al sistema 
        <a href="{{ route('login') }}">Clic aquí</a>
    </body>
</html>