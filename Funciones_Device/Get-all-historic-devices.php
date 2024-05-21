<?php
// Define la URL de la API
require '/Embebidos_Proyect/Apis/Apis.php';
$apiUrl = $ApiLink . '/api/device/get-all-historic-devices';

// Realiza la solicitud GET a la API y obtiene los datos
$response = file_get_contents($apiUrl);

// Decodifica los datos JSON
$data = json_decode($response, true);

// Verifica si la decodificación fue exitosa
if ($data !== null) {
    // Itera sobre cada elemento en el array de datos
    foreach ($data as $item) {
        echo "Historic ID: " . $item['historicId'] . "<br>";
        echo "Device Name: " . $item['deviceName'] . "<br>";
        echo "Device Type Name: " . $item['deviceTypeName'] . "<br>";
        echo "Value: " . $item['value'] . "<br>";
        echo "Date: " . $item['date'] . "<br><br>";
    }
} else {
    echo "Error al decodificar los datos JSON.";
}
?>
