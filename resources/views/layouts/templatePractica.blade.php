<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add custom CSS here -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">    
    <title>Template</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">TecNM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('solicitud')}}">Solicitud de Beca</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('personal')}}">Personal</a>
              </li>              
            </ul>
          </div>
        </div>
      </nav>  
       
      <div class="container">
        @yield('container')
      </div>
  <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; Pazuzu 2021</p>
            </div>
        </div>
    </div>
  </footer>
</body>
</html>