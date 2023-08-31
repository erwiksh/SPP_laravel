<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/siswa.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Rubik:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>StudentPaymentTuition</title>
</head>
<body>
    <nav class="navbar" style="background-color: #141E61;">
        <!-- Navbar content ... -->
        <div class="container-fluid">
            <a class="navbar-brand" href="https://smkn1tanjungpandan.sch.id/">
                <img src="img/logo-smkN1TP.png" alt="Logo SMKN1TP" width="80px">
            </a>
            <p class="text-center text-light fs-3">@yield('navSiswa')</p>
            <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column justify-content-between">
                <ul class="navbar-nav">
                    <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="{{ url('/siswa') }}"><button class="btn custom-button">Dashboard</a></button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/student') }}"><button class="btn custom-button">Data Pembayaran Bulanan</a></button>
                    </li>
                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="mt-auto d-flex justify-content-end">
                    <a class="nav-link" href="{{ url('/login') }}">
                        Logout
                    </a>
                </div>

            </div>


            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('siswa')
    
    <!-- End Content -->

    <h3> @yield('as')</h3>


    <!-- Scripts ... -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

