<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Persewaan Mobil</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/home"><i class="fa fa-home"></i> Aplikasi Persewaan Mobil</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="/mobil"><i class="fa fa-table"></i> Data Mobil</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="/peminjaman_mobil"><i class="fa fa-table"></i> Peminjaman Mobil</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="/pengembalian_mobil"><i class="fa fa-table"></i> Pengembalian Mobil</a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i> {{Auth::user()->nama}}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/akun/{{Auth::user()->id}}"><i class="fa fa-user"></i> Akun</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a class="dropdown-item" href="/actionlogout"><i class="fa fa-sign-out-alt"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->

          </div><!-- /.container-fluid -->
        </nav>
          @yield('konten')
        </div>
        </div>        
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>