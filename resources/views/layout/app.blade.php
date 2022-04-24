<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Students Information</title>

    <style>
      header, footer {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: auto;
      }

      footer {
        top: auto;
        bottom: 0;
      }
      .main-section{
        padding: 100px  0px;
      }
    </style>
  </head>
  <body>
    {{-- Header  --}}
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="/">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              @guest
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('register') }}">Register</a>
              </li>
              @else
                <li class="nav-item">
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input type="hidden" method="_POST" value="DELETE">
                    <button class="btn btn-danger" type="submit">Logout</button>
                  </form>
                </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
    </header>

    {{-- content  --}}
    <div class="main-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            @yield('content')
          </div>
        </div>
      </div>
    </div>


    {{-- Footer  --}}
    <footer class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p class="p-0 m-0">Copyright@rawshan.com</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>