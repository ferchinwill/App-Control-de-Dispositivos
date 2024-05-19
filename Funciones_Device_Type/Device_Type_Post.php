<?php
require '/Embebidos_Proyect/Apis/Apis.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // URL de la API
    $url = $ApiLink.'/api/device-type/create-device-type';

    // Datos que deseas enviar
    $data = array(
        'DeviceTypeName' => $_POST['DeviceTypeName']
        //'DeviceTypeName' => 'digital', // Corregido: DeviceTypeName en lugar de nombre
        //'nombre' => 'Nombre del dispositivo',
        //'descripcion' => 'Descripción del dispositivo',
        // Agrega aquí los demás campos que necesites enviar
    );

    // Inicializa una nueva solicitud cURL
    $ch = curl_init($url);

    // Establece la opción para indicar que la solicitud es mediante POST
    curl_setopt($ch, CURLOPT_POST, 1);

    // Convierte los datos a formato JSON
    $json_data = json_encode($data);

    // Establece los datos a enviar
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

    // Establece las cabeceras adecuadas para enviar datos JSON
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Para recibir la respuesta de la API
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Ejecuta la solicitud y obtén la respuesta
    $response = curl_exec($ch);


    
    // Cierra la conexión cURL
    curl_close($ch);

    // La respuesta de la API estará en formato JSON, puedes procesarla según lo necesites
    echo $response;
    header('Location: AgregarD.php');
} else {
    // Si se intenta acceder directamente a submit.php sin enviar datos por POST, redirige al formulario
    header('Location: index.html');
    exit;
} 




/****
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // URL de la API para crear un nuevo tipo de dispositivo
    $url = 'https://c39c-187-254-102-83.ngrok-free.app/api/device-type/create-device-type';

    // Datos que deseas enviar a la API
    $data = array(
        'DeviceTypeName' => $_POST['DeviceTypeName']
        // Puedes agregar más datos aquí si es necesario
    );

    // Inicializa una nueva solicitud cURL
    $ch = curl_init($url);

    // Establece la opción para indicar que la solicitud es mediante POST
    curl_setopt($ch, CURLOPT_POST, 1);

    // Convierte los datos a formato JSON
    $json_data = json_encode($data);

    // Establece los datos a enviar
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

    // Establece las cabeceras adecuadas para enviar datos JSON
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Para recibir la respuesta de la API
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Ejecuta la solicitud y obtén la respuesta
    $response = curl_exec($ch);

    // Cierra la conexión cURL
    curl_close($ch);

    // La respuesta de la API estará en formato JSON, puedes procesarla según lo necesites
    $responseData = json_decode($response, true);

    // Verifica si la respuesta es válida
    if ($responseData !== null && isset($responseData['id'], $responseData['name'])) {
        // Llama a la función para crear la tarjeta con los datos recibidos
        createDeviceCard($responseData['id'], $responseData['name']);
    } else {
        echo "Error al procesar la respuesta de la API.";
    }
} else {
    // Si se intenta acceder directamente a Device_Type_Post.php sin enviar datos por POST, redirige al formulario
    header('Location: index.html');
    exit;
}

// Función para crear una nueva tarjeta de dispositivo
function createDeviceCard($deviceId, $deviceName)
{
    // Crea el contenido HTML de la tarjeta
    $cardHtml = "
        <div class='lc-block d-sm-flex align-items-center mb-4 Tarjeta'>
            <div class='px-3'>
                <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-house-gear-fill' viewBox='0 0 16 16'>
                    <!-- Ícono de la tarjeta -->
                </svg>
            </div>
            <div class='flex-grow-1'>
                <div class='lc-name d-flex align-items-center justify-content-between'>
                    <div class='d-grid gap-2 d-md-flex justify-content-start'>
                        Dispositivo: $deviceName
                    </div>
                    <div class='d-grid gap-2 d-md-flex justify-content-end'>
                        <label class='switch'>
                            <input type='checkbox' checked>
                            <span class='slider round'></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    ";

    // Imprime la tarjeta directamente en el HTML dentro del contenedor tarjetasContainer
    echo "<div id='tarjetasContainer'>$cardHtml</div>";
} */
?>