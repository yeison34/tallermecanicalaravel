<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heladeria Udenar</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navegacion" style="height:20%">
            <div class="container px-5">
                <a class="navbar-brand" href="{{route('Index')}}">Heladeria</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('Index')}}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('ListadoProductos')}}">Lista Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('ventas')}}">Ventas</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        
        <!-- Features section-->
        <section class="py-5 border-bottom cuerpo" id="features">
            <center><h2 class="h4 fw-bolder">{{$arrayDatos[0]}}</h2></center>
            <div class="d-flex justify-content-center px-5 my-5">
                
                        
                        <div>
                            <img src="{{asset('imagenes/'.$arrayDatos[3])}}" style="height:300px;width:250px;">
                        </div>                    
            </div>
            <div class="d-flex justify-content-center">
            <p>Descripcion: {{$arrayDatos[1]}}</p>
            </div>
            <div class="d-flex justify-content-center">
            <p>Precio: {{$arrayDatos[2]}}</p>
            </div>
        </section>
        
        <!-- Footer-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>