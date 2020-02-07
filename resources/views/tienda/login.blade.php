<!DOCTYPE html>
<html lang="en">
<head>

    <title>Mi primer Login</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="index">

</head>
<body background="img/negro.jpg">
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-12 main-section">
            <div class="modal-content">
                <br>
                <div class="col-12 user-img">
                    <img src="img/user.png">
                </div>
                <br>
                <form class="col-12" th:action="@{/index}" method="get">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" />
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" >
                    </div>
                   <a href="index"><button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button></a>
                   <br>
                   <br> 
                    

                    <a href="index"><button type="button" class="btn btn-success btn-lg btn-block">Boton inicio</button></a>
                </form>
                <br>
                <div class="col-12 forgot">
                    <a href=login>Recordar contrasena?</a>
                </div>
                <div class="col-12 forgot">
                    <a href=login>Crear una cuenta</a>
                </div>
                <br>
                
                <a class="reddit-ic" role="button"><i class="fab fa-4x fa-reddit-alien pr-3" style="color:F33A14"></i></a>
            </div>
        </div>
    </div>
</body>
</html>