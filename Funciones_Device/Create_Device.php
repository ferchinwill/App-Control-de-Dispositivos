<?php

require '/Embebidos_Proyect/Apis/Apis.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // URL de la API  ya enlazada con La url nueva a solo un cambio
    $url = $ApiLink. '/api/device/create-device'; 

    // Datos que deseas enviar   
    $data = array(
        'DeviceName' => $_POST['DeviceName']
      
    );


    $ch = curl_init($url);

  
    curl_setopt($ch, CURLOPT_POST, 1);


    $json_data = json_encode($data);

    // Establece los datos a enviar
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

    // Establece las cabeceras adecuadas para enviar datos JSON
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Para recibir la respuesta de la API
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Ejecuta la solicitud y obtén la respuesta
    $response = curl_exec($ch);

    // Cierra la conexión cURL
    curl_close($ch);

    // La respuesta de la API estará en formato JSON, puedes procesarla según lo necesites
    echo $response;
    header('Location: /Create_Device.php');
} else {
    // Si se intenta acceder directamente a submit.php sin enviar datos por POST, redirige al formulario
    header('Location: index.html');
    exit;
} 
?>


<?php include('message.php'); ?>




