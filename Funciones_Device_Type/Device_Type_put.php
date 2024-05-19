<?php

require '/Embebidos_Proyect/Apis/Apis.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $device_id = $_POST['device_id'];
    $new_name = $_POST['new_name'];

    // URL de la API de actualización de dispositivos
    $update_url = 'https://fe85-148-237-98-221.ngrok-free.app/api/device-type/update-device-type';

    // Datos a enviar en la solicitud POST JSON
    $post_data = json_encode(array(
        'deviceTypeId' => $device_id,
        'deviceTypeName' => $new_name
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
?>
