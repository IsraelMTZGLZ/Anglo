<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('resources/register/fonts/material-icon/css/material-design-iconic-font.min.css');?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url('resources/register/css/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('resources/register/Button/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('resources/register/Button/stylefe.css');?>">
</head>
<body>

    <div class="main">

        <section class="">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Edad</label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="18">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Teléfono</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="4423818890">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Colegio de procedencia</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="Universidad">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Grado académico</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Secundaria, Preparatoria, Universidad">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">carrera(Optional)</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Ing. Software">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Programa de interés</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>Inglés</option>
                          <option>Cursos de verano</option>
                          <option>Prepa</option>
                          <option>Licenciatura</option>
                          <option>Maestría </option>
                          <option>doctorado</option>

                        </select>
                      </div>

                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Ciudad</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Qro">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Ocupación</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Estudiante, Trabajador">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">¿Depende económicamente de alguien?</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Papas</option>
                        <option>Otros</option>
                        <option>No</option>

                      </select>
                    </div>

                    <div class="form-group buttonOne">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                    </div>
                     <!-- <div class="form-group buton">

                        <div class="wrapper">
                        <div class="link_wrapper">
                          <a href="#">Hover Me!</a>
                          <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
                              <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z"/>
                            </svg>
                          </div>
                        </div>

                      </div>
                    </div> -->
                  </form>



                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?=base_url('resources/register/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?=base_url('resources/register/js/main.js');?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
