<?php


require '/Embebidos_Proyect/Apis/Apis.php';

$url = $ApiLink.'/api/admin/get-all-users';  



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

        foreach ($responseData as $admin) {
            echo "ID: " . $admin['userId'] . ", Nombre: " . $admin['userName'] . "<br>";
        }
    } else {
        echo "Error al decodificar la respuesta JSON.";
    }
} else {

    echo "Error al realizar la solicitud. Código de estado HTTP: " . $httpCode;
}
