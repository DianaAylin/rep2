<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">  </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $("#guardar").click(function() {
            $("#mensaje").load('{{url('cambiapass')}}' + '?' + $(this).closest('form').serialize()) ;
        });

    });
    </script>
    <body>
        <h1>Reinicio de contraseña</h1>
        <br>
        <form>
            <input type='hidden' name="idu" value='{{$idu}}'>
            Introduce nueva contraseña
            <input type='password' name='pass' id='pass'>
            <br>
            Confirma nueva contraseña
            <input type="password" name="pass2" id="pass2">
            <br>
            <input type="button"  id="guardar" value="Guardar">
        </form>
        <div id="mensaje"></div>
    </body>
</html> 
            
            