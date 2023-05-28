<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>inicio de sesión</title>
</head>
<body>
    <div class="main_login">
        <h2>Iniciar sesión</h2>
        <br>
        <br>
        <br>
        <div>
            <form action="ReguistroLogin.blade.php" method="post">
                <label for="Nombre*">Correo</label> <br> <br>
                <input type="email" id="correo" name="correo" placeholder="example@gmail.com" required/> <br> <br>
                <label for="Nombre*">Contraseña</label> <br> <br>
                <input type="password" id="passwd" name="passwd" placeholder="********" required/> <br> <br>
                <button id="btn" type="submit">iniciar sesión</button>
                </form>
                <br>
                <br>
                <p>¿No tienes cuenta?<a href="{{ route('registrarse') }}">Regístrate</a>


        </div>
        
    </div>
</body>
</html>