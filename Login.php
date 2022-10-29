<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida login</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<?php
if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    if ($usuario=="resp_escolar" && $contraseña=="unadm_responsable") {
        header("Location: Administrativa.html?");
        
    }else { 
    }
}
?>
<body>
<div class="cuerpo">
        <div class="encabezado">
            <header>
                <h1>Usuario Incorrecto</h1>
            </header>
        </div>
        <form class="formulario" onclick="goBack()">
            <br /><br />
            <input type="submit" value="Regresar al formulario">
            <br /><br />
        </form>

        <script>function goBack() {window.history.back();}</script>
        
        <footer>
            Programación web I - PW1
        </footer>
</div>    
</body>
</html>












