<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript" src="js/vue.js"></script>
	<link rel="stylesheet" href="css/starlog.css">
    <title>Registro</title>
  </head>
  <body>
    <div class="wrapper fadeInDown" id="login">
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
            <form method="POST" action="{{route('apiusuario')}}" enctype="multipart/form-data">
                @csrf
                    <div class="col">
                        <input type="text" id="id_usuario" class="fadeIn second" name="id_usuario" placeholder="matricula"  value="{{old('id_usuario')}}"  >
                    </div>
                    <div class="col">
                        <input type="text" id="id_rol" class="fadeIn second" name="id_rol" placeholder="id_rol" value="{{old('id_rol')}}" >
                    </div>
                    <div class="col">
                        <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="nombre"  value="{{old('nombre')}}"  >   
                    </div>
                    <div class="col">
                        <input type="text" id="apellido_p" class="fadeIn second" name="apellido_p" placeholder="contraseña"  value="{{old('apellido_p')}}">
                    </div>
                    <div class="col">
                        <input type="text" id="apellido_m" class="fadeIn second" name="apellido_m" placeholder="apellido"  value="{{old('apellido_m')}}" >
                    </div>
                    <div class="col">
                        <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="usuario"  value="{{old('usuario')}}" >
                    </div>
                    <div class="col">
                        <input type="text" id="password" class="fadeIn second" name="password" placeholder="contraseña"  value="{{old('password')}}" >
                    </div>
                    <div class="col">
                        <input type="file" id="imagen" class="fadeIn " name="grupo" placeholder="imagen">
                    </div>
                    <input type="submit" class="fadeIn fourth" value="Log In" @Click="enviar()">
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/vue.js" ></script>

</body>
</html>