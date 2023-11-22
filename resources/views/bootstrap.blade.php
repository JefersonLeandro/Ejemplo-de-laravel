<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- <nav class="navbar" style="background-color: #e3f2fd;"> --}}
      <!-- Navbar content -->
      <nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd;" >
          <div class="container-fluid">
            <a class="navbar-brand link-primary" href="{{route('bootstrap')}}">Navbar bootstrap </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active "  aria-current="page" href="{{route('welcome')}}" >welcome</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('posts.index')}}">blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">about</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">contact</a>
                </li>
              </ul>
              <span class="navbar-text">
                Navbar text with an inline element
              </span>
            </div>
          </div>
{{-- </nav> --}}
    </nav>  


<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Bootstrap</h5>
    <p>esto es bootstrap por medio de <strong>vite</strong> </p>


    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>


</div>


</body>
</html>