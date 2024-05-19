<?php

/*  /api/device-type/delete-device-type  */
require '/Embebidos_Proyect/Apis/Apis.php';

// URL de la API para eliminar el dispositivo
$url = $ApiLink.'/api/device-type/delete-device-type';

// Datos que deseas enviar (en este caso, el ID o nombre del dispositivo a eliminar)
$data = array(
    'DeviceTypeName' => 'estandar', // Supongo que aquí deberías incluir el nombre del dispositivo que deseas eliminar
);

// Inicializa una nueva solicitud cURL
$ch = curl_init($url);

// Establece la opción para indicar que la solicitud es mediante DELETE
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

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

// Verifica el código de estado de la respuesta
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Cierra la conexión cURL
curl_close($ch);

// Verifica el código de estado de la respuesta y muestra el resultado
if ($httpcode == 200) {
    echo "Dispositivo eliminado correctamente.";
} else {
    echo "Error al eliminar el dispositivo. Código de estado: " . $httpcode;
}

// La respuesta de la API estará en formato JSON, puedes procesarla según lo necesites
echo $response;
?>



