<?php

require '/Embebidos_Proyect/Apis/Apis.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el cuerpo de la solicitud POST
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['deviceId']) && isset($data['active'])) {
        $device_id = $data['deviceId'];
        $active = $data['active'];

        // URL de la API para actualizar el estado del dispositivo
        $update_url = $ApiLink . '/api/device/update-device';
        // Datos a enviar en la solicitud POST
        $post_data = array(
            'deviceId' => $device_id,
            'active' => $active
        );

        // Iniciar la solicitud cURL para actualizar el estado del dispositivo
        $update_curl = curl_init($update_url);
        curl_setopt($update_curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($update_curl, CURLOPT_POST, true);
        curl_setopt($update_curl, CURLOPT_POSTFIELDS, json_encode($post_data));
        curl_setopt($update_curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Accept: application/json',
        ));

        // Ejecutar la solicitud y obtener la respuesta
        $update_response = curl_exec($update_curl);
        $update_httpCode = curl_getinfo($update_curl, CURLINFO_HTTP_CODE);

        // Cerrar la conexión cURL
        curl_close($update_curl);

        // Verificar el código de estado HTTP de la respuesta
        if ($update_httpCode == 200) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'httpCode' => $update_httpCode]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Datos inválidos']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
}

?>






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


        <a href=""></a>

        <!----Barra de Navegacion--->
        <?php require '/Embebidos_Proyect/Barra_Menu/Barra_Menu_Dispositivos.php'; ?>
        <hr class="hr-minimalista">


        <div editable="rich">
            <!-- ========== <h2 class="display-5 fw-bold"> <?php echo ", $nombre_usuario!"; ?>Tu Nombre</h2> ========== -->


        </div>
        <!-- ========== Tarjetas Mis dispositivos ========== -->
        <div class="mx-auto col-xl-6" id="scrollEffectText1">
            <div class="lc-block d-sm-flex align-items-center mb-4 Tarjeta">
                <div class="px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-gear-fill" viewBox="0 0 16 16">
                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708z" />
                        <path d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.5 1.5 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03" />
                        <path d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                    </svg>
                </div>
                <div class="flex-grow-1">
                    <div class="lc-name d-flex align-items-center justify-content-between">
                        <div class="d-grid gap-2 d-md-flex justify-content-start">
                            <label for="device_id">Dispositivo </label>
                            <div class="input-group mb-3">
                                <input type="number" id="device_id" name="device_id" class="form-control" placeholder="Ingrese el ID" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2"></span>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-end">
                            <label class="switch">
                                <input type="checkbox" id="switch1" data-device-id="1" onchange="toggleDevice(this)">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function toggleDevice(element) {
                const deviceId = document.getElementById('device_id').value;
                const isActive = element.checked;

                if (!deviceId) {
                    alert("Por favor ingrese el ID del dispositivo.");
                    element.checked = !isActive; // Revertir el estado del interruptor si no hay ID de dispositivo
                    return;
                }

                const postData = {
                    deviceId: deviceId,
                    active: isActive
                };

                fetch('/Funciones_Device/Update-Device.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(postData)
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log("El estado del dispositivo se actualizó correctamente.");
                        } else {
                            console.error("Error al actualizar el estado del dispositivo. Código HTTP:", data.httpCode);
                            alert("Error al actualizar el estado del dispositivo.");
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert("Ocurrió un error al actualizar el estado del dispositivo.");
                    });
            }
        </script>






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