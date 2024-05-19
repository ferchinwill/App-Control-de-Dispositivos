<?php

/* 
session_start();
require 'dbcon.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Verificar si el correo ya existe en la tabla
    $Correo = $_POST['Correo'];
    $sql_check = "SELECT COUNT(*) as count FROM registros WHERE Correo = '$Correo'";
    $result = $con->query($sql_check);

    if ($result) {
        $row = $result->fetch_assoc();
        $count = $row['count'];

        if ($count > 0) {
            echo "El correo ya está registrado. <a href='login.php'>Iniciar sesión</a>";
        } else {
            // El correo no existe, por lo que podemos insertar los datos
            $Nombre = $_POST['Nombre'];
            $Contraseña = $_POST['Contraseña'];

            $sql_insert = "INSERT INTO registros (Correo, Nombre, Contraseña) VALUES ('$Correo', '$Nombre', '$Contraseña')";
            $sql_insert = "INSERT INTO logins (Correo, Nombre, Contraseña) VALUES ('$Correo', '$Nombre', '$Contraseña')";

            if ($con->query($sql_insert) === TRUE) {
                echo '

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
                <div class="container text-center py-6">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5 mx-auto">
                            <div class="lc-block mb-3">
                            <br>
                            <br>
                            <br>
                                <img class="py-5  img-fluid wp-image-1892 breathe-animation" src="/source/fians1.png" width="" height="39" srcset="" sizes="" alt="">
                            </div>
                            <div class="lc-block mb-3">
                                <div editable="rich">
                                    <h1>Bienvenido al sistema</h1>
                                </div>
                            </div>
                            <div class="lc-block mb-5">
                                <div editable="rich">
                                    <p class="lead ">Esta pagina te redigira en...<span id="countdown">1</span><p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>';
                // Redirigir a otra página después de 3 segundos
                header("refresh:5;url=/login.php");
                exit; // Importante: detener la ejecución después de la redirección
            } else {
                echo "Error al ingresar datos: " . $con->error;
            }
        }
    } else {
        echo "Error al verificar el correo: " . $con->error;
    }
}

*/
?>

<style>
    @keyframes breathe {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    }

    .breathe-animation {
        animation: breathe 4s infinite ease-in-out;
    }
</style>
<script>
    // Función para la cuenta regresiva inversa
    function countdown() {
        let count = 1; // Inicia en 1 y termina en 5
        const countdownElement = document.getElementById('countdown');

        // Función que se ejecuta cada segundo
        const timer = setInterval(() => {
            countdownElement.textContent = count; // Actualiza el elemento con el número actual

            if (count === 5) {
                countdownElement.textContent = "¡Listo!"; // Cuando llega a 5, muestra un mensaje
                clearInterval(timer); // Detiene el temporizador
            }

            count++; // Incrementa el contador
        }, 1000); // 1000 milisegundos = 1 segundo
    }

    // Llama a la función de cuenta regresiva cuando se carga la página
    countdown;
</script>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Estilos/style-login.css">
    <link rel="stylesheet" href="bootsrap/css/.">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link rel="stylesheet" href="dessign.css">
    <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
    <script src="bootsrap/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<style>
    /* Estilos para la sección con fondo desenfocado */
    .blurry-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/source/ai.jpg');
        /* Reemplaza 'ruta/de/la/imagen-desenfocada.jpg' con la ruta real de tu imagen desenfocada */
        background-size: cover;
        filter: blur(5px);
        /* Cambia el valor de 'blur' según quieras más o menos desenfoque */
        z-index: -1;
        /* Asegura que el fondo desenfocado esté detrás de todo */
    }

    /* Estilos para el contenido de la página */
    .content {
        position: relative;
        z-index: 1;
        /* Asegura que el contenido esté delante del fondo desenfocado */
    }

    /* Estilos para el fondo rojo */
    .red-background {
        background-color: red;
    }

    .line {
        border-color: blue;

        border-width: 2px;
        height: 10px;
        width: auto;
    }

    /* Otros estilos según tu diseño */
</style>

<body>
    <div class="blurry-background"></div>
    <section class="vh-100">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="border-radius: 1rem;">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-5 d-flex justify-content-center align-items-center">
                            <img src="/source_proyect/fians.png" alt="logo" style="height: 200px;">
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                    <h5 class="fw-semibold mb-3 pb-3" style="letter-spacing: 1px; font-style: bold; font-weight: 100%;">Registrate</h5>
                                    <p class="lead">Agrega Tus Dispositivos Favoritos</p>
                                    <hr class="line">
                                    <div class="form-outline mb-4">
                                        <input type="text" name="UserName" id="UserName" class="form-control form-control-lg" required />
                                        <label class="form-label" for="UserName">Nombre de Usuario</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" name="Password" id="Password" class="form-control form-control-lg" required />
                                        <label class="form-label" for="Password">Contraseña</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" name="ConfirmPassword" id="ConfirmPassword" class="form-control form-control-lg" required />
                                        <label class="form-label" for="ConfirmPassword">Confirmar Contraseña</label>
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-success" type="submit" name="submit">Registrarse</button>
                                    </div>
                                </form>
                                <?php
                                require '/Embebidos_Proyect/Apis/Apis.php';
                                
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $userName = $_POST['UserName'];
                                    $password = $_POST['Password'];
                                    $confirmPassword = $_POST['ConfirmPassword'];

                                    if ($password === $confirmPassword) {
                                        // URL de la API
                                        $url = $ApiLink.'/api/register/create-account';
                                        // Datos a enviar en la solicitud
                                        $data = array(
                                            'UserName' => $userName,
                                            'Password' => $password
                                        );
                                        // Inicializar cURL
                                        $ch = curl_init($url);
                                        // Configurar opciones de cURL
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                        curl_setopt($ch, CURLOPT_POST, true);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                            'Content-Type: application/json',
                                            'Authorization: Bearer your_token_here'
                                        ));
                                        // Ejecutar la solicitud
                                        $response = curl_exec($ch);
                                        // Verificar si ocurrió un error
                                        if (curl_errno($ch)) {
                                            echo 'Error:' . curl_error($ch);
                                        } else {
                                            // Manejar la respuesta de la API
                                            echo 'Respuesta de la API: ' . $response;
                                        }
                                        // Cerrar cURL
                                        curl_close($ch);
                                    } else {
                                        echo 'Las contraseñas no coinciden.';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>