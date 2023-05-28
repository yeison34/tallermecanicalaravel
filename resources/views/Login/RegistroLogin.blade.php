<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/registro.css">
    <title>Formuario</title>
</head>
<body>
    <div class="container contenido">
        <div class="centro" >
          <h1>FORMULARIO INSCRIPCION</h1>
          <h2>Datos Del Usuario </h2>
        </div>

        <div>
            <form method="get" action="{{ route('login') }}" id="myForm">
                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Nombres</label>
                        <input type="text" id="nombre" name="nombre" class="form-control inText" placeholder="Name" required/>
                      </div>

                    <div class="col">
                      <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                      <input type="text" id="apellido" name="apellido" class="form-control inText" placeholder="App" required/>
                    </div>

                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Sexo</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="masculino">                          <label class="form-check-label" for="flexRadioDefault1">
                            Masculino
                          </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="femenino" checked>                          <label class="form-check-label" for="flexRadioDefault2">
                            Femenino
                          </label>
                        </div>
                        </div>
                      </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required>
                  </div>
                  <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">Tipo Identificación</label>
                    <select class="form-select" id="tipo_ide" name="tipo_ide" required>
                      <option selected disabled value="">Elegir...</option>
                      <option>T.I</option>
                      <option>C.C</option>
                      <option>C.E</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Numero identificación</label>
                    <input type="text" class="form-control" id="num_ide" name="num_ide" placeholder="xxxxxxxxxx" required>
                  </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="validationDefaultUsername" class="form-label">Correo</label>
                        <div class="input-group">
                          <span class="input-group-text" id="inputGroupPrepend2" style= "background-color: #795f09;">example@gmail.com</span>
                          <input type="email" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend2"
                            required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="tel" name="tel" placeholder="3002401111" required>
                      </div>
                      <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="cll 17 a 34 centro" required>
                      </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="******" required>
                        <div class="col-auto">
                            <span id="passwordHelpInline" class="form-text" style="color: gray;">
                              Minimo 8 - Max-20 caracteres.
                            </span>
                          </div>
                          </div>
                          <div class="col-md-4">
                            <label for="validationDefault02" class="form-label">Confirmar</label>
                            <input type="password" class="form-control" id="confirmar" name="confirmar" placeholder="******" required>
                          </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                </div>
            </form>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</div>

</body>
</html>
