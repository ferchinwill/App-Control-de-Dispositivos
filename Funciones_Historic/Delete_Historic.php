<?php



/*

{
  "deviceId": 0,
  "value": 0
}


*/


require '/Embebidos_Proyect/Apis/Apis.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y limpiar los datos de entrada
    $deviceId = isset($_POST['deviceId']) ? intval($_POST['deviceId']) : 0;
    $value = isset($_POST['value']) ? intval($_POST['value']) : 0;

    // Verificar si los datos son válidos
    if ($deviceId <= 0 || $value <= 0) {
        echo "Error: Datos de entrada no válidos.";
        exit;
    }

    $url = $ApiLink . '/api/historic/delete-historic?deviceId=' . $deviceId . '&value=' . $value; ///DELETE

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($httpcode == 200) {
        echo "Dispositivo eliminado correctamente.";
    } elseif ($httpcode == 404) {
        echo "Error: Dispositivo no encontrado.";
    } elseif ($httpcode == 500) {
        echo "Error interno del servidor al eliminar el dispositivo.";
    } else {
        echo "Error al eliminar el dispositivo. Código de estado: " . $httpcode;
    }
}
