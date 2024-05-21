<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light py-1">
        <div class="container d-flex align-items-center">
            <a href="/index.php"><img src="/source_proyect/fians.png" alt="" style="height: 150px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav " style="padding-top: 30px; padding-left: 25px;">
                    <li class="nav-item">
                        <a class="nav-link active py-" href="plantillas.html" aria-current="page">
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <!-- ========== Start Section
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Nuestros Productos
                        </a>
                        
                        
                        
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Software de Punto de venta (POS)</a></li>
                            <li><a class="dropdown-item" href="MenuDigital.html">Menu Digital
                                    <div class="  d-inline-block  " style="background-color: #f70000; 
                                width: 120px; 
                                border-radius: 3px; 
                                text-align: center;
                                font-weight: bold;
                                color: white;
                                font-size: 15px;
                                ">Proximamente
                                    </div>
                                </a> </li>
                            <li><a class="dropdown-item" href="InvitacionDigital.html">Invitacion Digital
                                    <div class="  d-inline-block  " style="background-color: #f70000; 
                                width: 120px; 
                                border-radius: 3px; 
                                text-align: center;
                                font-weight: bold;
                                color: white;
                                font-size: 15px;
                                ">Proximamente
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                    ========== -->
                </ul>
                <style>
                    .bi-facebook:hover {
                        color: #2e00fd;
                    }

                    .bi-instagram:hover {
                        color: #e7074a;
                    }

                    .bi-whatsapp:hover {
                        color: #009732;
                    }

                    .dropdown-menu {
                        display: none;
                        transition: display 0.3s ease;
                    }

                    .dropdown-toggle:hover+.dropdown-menu,
                    .dropdown-menu:hover {
                        display: block;
                    }

                    .dropdown-item:hover {
                        transition: display 0.3s ease;
                        color: gray;
                    }

                    .modal-body li {
                        list-style: none;
                    }
                </style>
                <div class="ms-auto" style="padding-top: 30px;">
                    <div class="d-inline-block me-2">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                        </a>
                    </div>
                    <div class="d-inline-block me-2 ">
                        <a class="nav-link" href="https://www.facebook.com/profile.php?id=61554292154685">
                        </a>
                    </div>
                    <div class="d-inline-block me-2">
                        <a class="nav-link" href="#">

                        </a>
                    </div>

                </div>
            </div>

        </div>
    </nav>


    <!-- Modal integrantes de equipo -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Integrantes del Equipo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> <strong>a2193330272</strong> Moreno Wilches Fernando</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> <strong>a2193330129
                            </strong> Aros Charles Angel Alberto</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> <strong>a2163226011</strong> Hernandez Balleza Jose Eduardo</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> <strong>a2193330268</strong>
                            Larraga Izaguirre Joan Emmanuel</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> <strong>a2193330277</strong> Ortiz Hernandez Alan Guadalupe</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> <strong>a2193330294</strong> Torres Hipolito Carlos Manuel</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</header>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
    // Detectar el scroll y llamar a la función checkScroll
    function checkScrollText() {
        let elements = document.querySelectorAll('[id^="scrollEffectText"]');

        elements.forEach(element => {
            let position = element.getBoundingClientRect();

            if (position.top < window.innerHeight - 200) {
                element.classList.add('show');
            } else {
                element.classList.remove('show');
            }
        });
    }

    // Detectar el scroll y llamar a la función checkScrollText
    window.addEventListener('scroll', checkScrollText);
</script>

<script>
    // Espera a que el documento esté cargado
    document.addEventListener('DOMContentLoaded', function() {
        // Selecciona todos los elementos con la clase fade-in
        var fadeIns = document.querySelectorAll('.fade-in');

        // Agrega la clase 'active' a cada elemento después de un pequeño retraso
        fadeIns.forEach(function(element, index) {
            setTimeout(function() {
                element.classList.add('active');
            }, 100 * index); // Cambia este valor para ajustar la velocidad de aparición
        });
    });
</script>

<body>
    <div class="container-fluid px-4 py-10 my-5 text-center ">
        <div class="lc-block d-block mx-auto mb-4 fade-in">
            <img src="/source_proyect/perfil.png" alt="" style="height: 150px; width: 150px; box-shadow: gray;">
        </div>
        <div class="lc-block">
            <div editable="rich">
                <!-- ========== <h2 class="display-5 fw-bold"> <?php echo ", $nombre_usuario!"; ?>Tu Nombre</h2> ========== -->
                <h2 class="display-5 fw-bold fade-in">Tu Sistema</h2>

            </div>
        </div>
        <div class="lc-block col-lg-6 mx-auto mb-4">
            <div editable="rich">


            </div>
        </div>

        <style>

        </style>
        <a href=""></a>

        <!----Barra de Navegacion--->
        <?php require '/Embebidos_Proyect/Barra_Menu/Barra_menu.php'; ?>
        <hr class="hr-minimalista">


        <div editable="rich">
            <!-- ========== <h2 class="display-5 fw-bold"> <?php echo ", $nombre_usuario!"; ?>Tu Nombre</h2> ========== -->


        </div>
        <!-- ========== Tarjetas Mis dispositivos ========== -->


        <div class="" id="scrollEffectText1">
            <div class="">
                <div class="px-3">
                    <h3 class="fw-bold">Crear un Nuevo Dispositivo</h3>
                    <form action="/Funciones_Device/Create_Device.php" method="post">
                        <label for="deviceName">Nombre del Dispositivo:</label>
                        <input type="text" id="deviceName" name="deviceName" required>
                        <button class="btn btn-primary" type="submit">Agregar Dispositivo</button>
                    </form>
                </div>
            </div>
        </div>
        <hr class="hr-minimalista">



        <style>
            .btn-estado {
                padding: 0.5rem 1rem;
                border: 2px solid transparent;
                border-radius: 5px;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .btn-activo {
                background-color: #28a745;
                color: #fff;
                border-color: #28a745;
            }

            .btn-inactivo {
                background-color: #dc3545;
                color: #fff;
                border-color: #dc3545;
            }

            .btn-estado:hover {
                opacity: 0.8;
            }

            .icono-activo:before {
                content: "\f3fd";
                /* Icono de check */
                font-family: 'Font Awesome 5 Free';
                margin-right: 0.5rem;
            }

            .icono-inactivo:before {
                content: "\f5c8";
                /* Icono de equis */
                font-family: 'Font Awesome 5 Free';
                margin-right: 0.5rem;
            }

            .circulo {
                width: 20px;
                height: 20px;
                border-radius: 50%;
                display: inline-block;
                margin-right: 10px;
                /* Espacio entre los círculos */
            }

            .circulo-rojo {
                background-color: #dc3545;
                /* Rojo */
            }

            .circulo-verde {
                background-color: #28a745;
                /* Verde */
            }



            /*********************************************  Linea de Tiempo Podria ocuparla despues

           

            .timeline {
                position: relative;
                max-width: 800px;
                margin: 50px auto;
                padding: 20px;
                background-color: #f1f1f1;
                border-radius: 10px;
            }

            .timeline::after {
                content: '';
                position: absolute;
                width: 6px;
                background-color: black;
                top: 0;
                bottom: 0;
                right: 97%;
                
            }

            .event {
                position: relative;
                margin-bottom: 30px;
            }

            .event::after {
                content: '';
                display: table;
                clear: both;
            }

            .event .date {
                float: left;
                width: 120px;
                padding-right: 20px;
                text-align: right;
            }

            .event .content {
                margin-left: 140px;
            }

            .event h3 {
                margin-top: 0;
                font-size: 18px;
            }

            .event p {
                margin: 5px 0;
            }

            .event .circle {
                position: absolute;
                left: -10px;
                top: 10px;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                background-color: black;
            }***********************/
        </style>


        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>