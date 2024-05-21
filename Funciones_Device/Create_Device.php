<?php









/********************************************************************FUNCIONA     CHECAR EL INCREMENTO DE ID */



require '/Embebidos_Proyect/Apis/Apis.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $deviceName = $_POST['deviceName'];

    
    $deviceTypeId = obtenerNuevoDeviceTypeId();

    $url = $ApiLink . '/api/device/create-device';
    $data = array(
        'deviceName' => $deviceName,
        'deviceTypeId' => $deviceTypeId
    );


    $ch = curl_init($url);


    curl_setopt($ch, CURLOPT_POST, 1);

 
    $json_data = json_encode($data);

 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

  
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


    $response = curl_exec($ch);


    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);


    curl_close($ch);

  
    echo $response;

 
    if ($httpcode == 200) {
        echo "Dispositivo Agregado correctamente.";
    } else {
        echo "Error al agregar el dispositivo. Código de estado: " . $httpcode;
    }
}

// Función para obtener un nuevo deviceTypeId
function obtenerNuevoDeviceTypeId() {
    
    $ultimoDeviceTypeId = 1; 
    return $ultimoDeviceTypeId + 1;
}

?>
