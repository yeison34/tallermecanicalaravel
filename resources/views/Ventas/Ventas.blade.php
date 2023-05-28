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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="{{route('Index')}}">Heladeria</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Lista Productos</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
                <div class="container">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Imagen</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Producto</th>
      <th scope="col">Valor Unidad</th>
      <th scope="col">Total</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="{{asset('imagenes/chococono.png')}}" style="height:70px;width:60px;"></td>
      <th scope="row">2</th>
      <td>Choco Cono</td>
      <td>2500</td>
      <td>5000</td>
    </tr>
    <tr>
     <td><img src="{{asset('imagenes/paletas.jpg')}}" style="height:70px;width:60px;"></td>
      <th scope="row">5</th>
      <td>Paletas</td>
      <td>2000</td>
      <td>10000</td>

    </tr>
    <tr>
      <td><img src="{{asset('imagenes/helados.jpg')}}" style="height:70px;width:60px;"></td>  
      <th scope="row">10</th>
      <td>Helados</td>
      <td>3500</td>
      <td>35000</td>
    </tr>
  </tbody>
</table>
                </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
