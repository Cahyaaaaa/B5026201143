<!doctype html>
<html lang="en">

<head>

    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media-queries.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/icon/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/icon/apple-touch-icon-57-precomposed.png">

</head>

<body>

        <!-- Sidebar -->
        <nav class="sidebar" id="mySidebar">

            <!-- close sidebar menu -->
            <div class="dismiss">
                <i href="javascript:void(0)" class="fas fa-arrow-left" onclick="closeNav()"></i>
            </div>
            <br>
            <br>

            <!-- Top Sidebar -->
            <center>
                <img src="/gambar/pasfoto.jpg" class="rounded-circle" width="100px" height="100px">
                <br>
                <br>
                <h5>
                    Project Laravel<br>
                    Pemrograman Web
                </h5>
            </center>

            <!-- Menu Sidebar-->
            <ul class="list-unstyled menu-elements">
                <li class="active">
                    <a class="scroll-link" href="/pegawai"><i class="fas fa-home"></i> Pegawai </a>
                </li>
                <li>
                    <a class="scroll-link" href="/absen"><i class="fas fa-cog"></i> Absen </a>
                </li>
                <li>
                    <a class="scroll-link" href="#"><i class="fas fa-user"></i> Next Project</a>
                </li>

        </nav>
        <!-- End sidebar -->

        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button" onclick="openNav()">
            <i class="fas fa-align-left"></i> <span>My Project</span>
        </a>

        <br>

        <!-- header -->
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">

                        </div>
                        <div class="col-8">
                            <h1><strong>
                                Cahya Wulaningtyas <br>
                                {5026201143}
                            </strong></h1>
                        </div>
                        <div class="col-2">
                            <img src="/gambar/pasfoto.jpg" class="rounded-circle" width="130px" height="130px">
                        </div>
                    </div>
                </div>
            </header>

        <!-- Content -->
        <div class="container">
            <div class="content" id="main">
                <h2> <strong> @yield('judulhalaman') <strong> </h2>

                @section('isikonten')
                @show
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer-container">
            &copy; Cahya Wulaningtyas - 5026201143
        </footer>

    <!-- Javascript -->
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "100px";
        }
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }
    </script>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="/js/jquery.backstretch.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/scripts.js"></script>

</body>

</html>
