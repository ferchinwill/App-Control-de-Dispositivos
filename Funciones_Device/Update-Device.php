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
