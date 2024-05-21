<?php


require '/Embebidos_Proyect/Apis/Apis.php';

$url = $ApiLink . '/api/device-type/get-all-device-types';


$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Accept: text/plain',
));

$response = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);


if ($httpCode == 200) {
    $responseData = json_decode($response, true);
    if ($responseData !== null) {
        echo "<div class='container'>";
        echo "<h2>Tipos de Dispositivos Almacenados</h2>";
        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<tr><th scope='col'>ID</th><th scope='col'>Tipo de Dispositivo</th></tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($responseData as $deviceType) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($deviceType['deviceTypeId']) . "</td>";
            echo "<td>" . htmlspecialchars($deviceType['deviceTypeName']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error al decodificar la respuesta JSON.</div>";
    }
} else {
    echo "<div class='alert alert-danger' role='alert'>Error al realizar la solicitud. Código de estado HTTP: " . $httpCode . "</div>";
}


