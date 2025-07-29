<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inicio de sesión</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <h1 class="text-center mt-4">Inicio de Sesión</h1>
      @csrf
      <form action="check" method="POST">
         <div class="row">
            <div class="col-md-4">
               <label for="email">Email</label>
               <input class="form-control" type="text" name="email" id="email" placeholder="Ingrese su Email">
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <label for="password">Contraseña</label>
               <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese su contraseña">
            </div>
         </div>
         <button class="btn btn-primary mt-4">Iniciar Sesión</button>
      </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>