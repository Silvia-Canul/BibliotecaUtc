<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <script type="text/javascript" src="js/vue.js"></script>
  <script type="text/javascript" src="js/vue-resource.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<link rel="stylesheet" href="css/starlog.css">
    <title>Registro</title>
  </head>
  <body>
    <div class="wrapper fadeInDown" id="clases" id="login">
        <div id="formContent">
            <div class="fadeIn first">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><i>{{ $error }}</i></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <br>
            <!-- Formulario -->
            
            <form method="POST" action="{{route('apireg')}}" >
                @csrf
                    <div class="col">
                        <input type="text" id="id_usuario" class="fadeIn second" name="id_usuario" placeholder="Escribir matricula o Cedula"   >
                    </div>
                    <br>
                    <select name="SistemasOperativos" id="SistemasOperativos" size=9 id="OS" >
                    <option selected value="0"> Elige una opción </option>
                        <optgroup label="Actividad"> 
                        <option value="1">Investigacion</option> 
                        <option value="2">Clase</option> 
                        <option value="3">Libro</option> 
                    </optgroup> 

                    </select>


                    <select name="ClasificacionWvista" id="ClasificacionWvista" size=9 id="Vista">
                    <option selected value="0"> Elige una opción </option>
                        <optgroup label="Actividad a realizar" id="grupo_1">
                        <option value="1"></option> 
                        <option value="2">Prestamo de equipo de computo</option> 
                        <option value="3">servicio de wifi</option>
                    </optgroup>
                    <optgroup label="Microsoft" id="grupo_2"> 
                        <option value="1">clase 1</option> 
                        <option value="2">clase 2</option> 
                        <option value="3">clase 3</option>
                    </optgroup> 
                    </select>
                    <input type="submit" class="fadeIn fourth" value="Registrarse">
            </form>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            


            $("#SistemasOperativos").change(function(){
                var valor = $(this).val();
                
                $("#ClasificacionWvista optgroup").css('display', 'none');
                $("#grupo_" + valor).css('display', 'block');

            })
        })

    </script>

    <script src="js/vue.js" ></script>
    <script src="js/regclase.js"></script>

</body>
</html>