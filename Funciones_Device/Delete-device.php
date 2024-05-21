<?php





/*  $apiUrl = $ApiLink.'/api/device-type/delete-device-type?deviceTypeId=1015';     REFERENCIA DE ELIMINAR POR CODIGO */


///FALTA FRONT END


require '/Embebidos_Proyect/Apis/Apis.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y limpiar los datos de entrada
    $deviceName = isset($_POST['deviceName']) ? htmlspecialchars($_POST['deviceName']) : '';

    // Verificar si el nombre del dispositivo está presente
    if (empty($deviceName)) {
        echo "Error: Nombre del dispositivo no válido.";
        exit;
    }

    $url = $ApiLink . '/api/device/delete-device?deviceName=' . urlencode($deviceName); ///DELETE

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