<?php



/*
{
  "deviceId": 0,
  "deviceName": "string",
  "deviceTypeId": 0
}

*/
require '/Embebidos_Proyect/Apis/Apis.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $deviceId = $_POST['device_Id'];
    $NewDevice_Name = $_POST['NewDevice_Name'];


    $update_url  = $ApiLink . '/api/device/update-device';   ///PUT
    // URL de la API de actualización de dispositivos

    // Datos a enviar en la solicitud POST JSON
    $post_data = json_encode(array(
        'deviceId' => $device_Id,
        'deviceName' => $NewDevice_Name
    ));

    // Iniciar la solicitud cURL para actualizar el dispositivo
    $update_curl = curl_init($update_url);
    curl_setopt($update_curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($update_curl, CURLOPT_CUSTOMREQUEST, 'PUT'); // Cambiar a PUT
    curl_setopt($update_curl, CURLOPT_POSTFIELDS, $post_data);
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
        echo "Dispositivo actualizado correctamente.";
    } else {
        echo "Error al actualizar el dispositivo. Código de estado HTTP: " . $update_httpCode;
    }
} else {
    echo "Acceso no permitido.";
}
