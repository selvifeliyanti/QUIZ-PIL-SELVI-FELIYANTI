    <!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title') Absensi Mahasiswa</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
        <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>
        
        <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('style/assets/js/main.js') }}"></script>

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="">Absensi Mahasiswa</a>
                    <a class="navbar-brand hidden" href="">A</a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse"> 
                    <ul class="nav navbar-nav">
                        <li>
                            <a href=""> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                        </li>
                        <li>
                            <a href=""> <i class="menu-icon fa fa-puzzle-piece"></i>Mahasiswa</a>
                        </li>
                        <li> 
                            <a href=""> <i class="menu-icon fa fa-puzzle-piece"></i>Mata Kuliah</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

                            </div>
                        </div>

                        <div class="language-select dropdown" id="language-select">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                                <i class="flag-icon flag-icon-us"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="language" >
                                <div class="dropdown-item">
                                    <span class="flag-icon flag-icon-id"></span>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-es"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-us"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-jp"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </header><!-- /header -->

            @yield('breadcrumbs')

            @yield('content')
            <div class="content mt-3">

            <div class="animated fadeIn">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    TAMBAHKAN DATA
    </button>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Mahasiswa</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Tlp</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Firdan Pramudya</td>
        <td>Pegajahan</td>
        <td>087744901134</td>
        <td>firdanp10@gmail.com</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Selvi Feliyanti</td>
        <td>Cirebon</td>
        <td>0867626328</td>
        <td>selvifeliyanti099@gmail.com</td>
        </tr>


    </tbody>
    </table>
            </div>

            </div>

        </div>

    </body>
    </html>
