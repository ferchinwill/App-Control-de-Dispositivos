<?php


/*

[
  {
    "historicId": 0,
    "deviceName": "string",
    "deviceTypeName": "string",
    "value": 0,
    "date": "2024-05-21T05:39:48.677Z"
  }
] 


*/



/********************************************************************FUNCIONA NO HAY DATOS AUN*/


require '/Embebidos_Proyect/Apis/Apis.php';
$url = $ApiLink . '/api/device/get-all-historic-devices';  ///GET


$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Accept: text/plain',
));

$response = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

$responseData = json_decode($response, true);


if ($httpCode == 200) {
    if (!empty($response_data)) {
        echo "<div class='container'>";
        echo "<h2>Datos Históricos de Dispositivos</h2>";
        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<tr><th>ID Histórico</th><th>Nombre del Dispositivo</th><th>Tipo de Dispositivo</th><th>Valor</th><th>Fecha</th></tr>";
        echo "</thead>";
        echo "<tbody>";

        // Recorre los datos y muestra cada entrada en una fila de la tabla
        foreach ($responseData as $lectura) {
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
    echo "<div class='alert alert-danger' role='alert'>Error al realizar la solicitud. Código de estado HTTP: " . $httpCode . "</div>";
}