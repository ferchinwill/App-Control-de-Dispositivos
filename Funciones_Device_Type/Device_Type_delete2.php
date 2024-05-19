<?php

$apiUrl = $ApiLink.'/api/device-type/delete-device-type?deviceTypeId=1015';
require '/Embebidos_Proyect/Apis/Apis.php';

$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

$response = curl_exec($ch);




// Manejar errores
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo 'Respuesta de la API: ' . $response;
}


 ///no se si funciona si no eleimina
if ($httpcode == 200) {
    echo "Dispositivo eliminado correctamente.";
} else {
    echo "Error al eliminar el dispositivo. Código de estado: " . $httpcode;
}


// Cerrar cURL
curl_close($ch);

?>
