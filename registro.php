<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventarios</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="header">
        <h1>Italian Food</h1>
    </header>

    <div class="bg-nav">
        <nav class="navegacion-principal contenedor">
            <a href="#">Iniciar Sesion</a>
            <a href="registro.php">Registrarte</a>
            <a href="#">Nosotros</a>
        </nav>
    </div>

    <main class="contenedor shadow">

        <h2>Registrarse</h2>

        <form class="formulario" action="php/ingresarusuario.php" method="post">

            <fieldset>
                <div class="formulario-contenido">
                    <label for="nombreusuario">Nombre</label>
                    <input class="inputformulario" type="text" placeholder="Nombre..." name="usuarionuevo">
                </div>

                <div class="formulario-contenido">
                    <label for="claveusuario">Contraseña</label>
                    <input class="inputformulario" type="text" placeholder="Contraseña..." name="clavenueva">
                </div>
            </fieldset>

            <input class="boton" type="submit" value="Registrar al usuario">

        </form>

    </main>


    <footer class="footer">Todos los derechos reservados Mozzafiato Italian Food&copy;</footer>

</body>

</html>