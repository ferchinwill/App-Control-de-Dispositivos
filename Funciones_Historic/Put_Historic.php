<?php
require '/Embebidos_Proyect/Apis/Apis.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y limpiar los datos de entrada
    $historicId = isset($_POST['historicId']) ? intval($_POST['historicId']) : 0;
    $value = isset($_POST['value']) ? intval($_POST['value']) : 0;

    // Verificar si los datos son válidos
    if ($historicId <= 0 || $value <= 0) {
        echo "Error: Datos de entrada no válidos.";
        exit;
    }

    $url = $ApiLink . '/api/historic/update-historic'; // PUT

    $data = array(
        'historicId' => $historicId,
        'value' => $value
    );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);
   
    if ($httpcode == 200) {
        echo "Registro histórico actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro histórico. Código de estado: " . $httpcode;
    }
}
?>
