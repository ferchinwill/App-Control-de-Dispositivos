<?php


/*

[
  {
    "historicId": 0,
    "deviceName": "string",
    "deviceTypeName": "string",
    "value": 0,
    "date": "2024-05-21T06:22:21.529Z"
  }
]


*/



/********************************************************************FUNCIONA NO HAY DATOS AUN*/


require '/Embebidos_Proyect/Apis/Apis.php';
$url = $ApiLink . '/api/device/get-last-value-historic-device';   ///GET    


$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if ($response === false) {
    echo 'Error en la solicitud cURL: ' . curl_error($ch);
    curl_close($ch);
    exit;
}

$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
$response_data = json_decode($response, true);

if ($httpcode == 200) {
    if (!empty($response_data)) {
        echo "<div class='container'>";
        echo "<h2>Datos Históricos de Dispositivos</h2>";
        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<tr><th>ID Histórico</th><th>Nombre del Dispositivo</th><th>Tipo de Dispositivo</th><th>Valor</th><th>Fecha</th></tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($response_data as $lectura) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($lectura['historicId']) . "</td>";
            echo "<td>" . htmlspecialchars($lectura['deviceName']) . "</td>";
            echo "<td>" . htmlspecialchars($lectura['deviceTypeName']) . "</td>";
            echo "<td>" . htmlspecialchars($lectura['value']) . "</td>";
            echo "<td>" . htmlspecialchars($lectura['date']) . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<div class='alert alert-info' role='alert'>No hay datos históricos disponibles.</div>";
    }
} else {
    echo "<div class='alert alert-danger' role='alert'>Error al obtener los datos históricos de dispositivos. Código de estado: " . $httpcode . "</div>";
}
