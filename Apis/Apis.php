<?php



$ApiLink =  'https://a7a4-148-237-98-221.ngrok-free.app';   



/*****************  DEVICE     **********************************/


$url = $ApiLink.'/api/device/create-device';    ///POST


$url = $ApiLink. '/api/device/get-all-historic-devices';  ///GET


$url = $ApiLink. '/api/device/get-historic-devices';  ///GET


$url = $ApiLink. '/api/device/get-last-value-historic-device';   ///GET


$url = $ApiLink. '/api/device/delete-device';   ///DELETE


$url = $ApiLink. '/api/device/update-device';   ///PUT



/*****************  DEVICE-TYPE     **********************************/


$url = $ApiLink. '/api/device-type/create-device-type';      ///POST      ///COMPLETADO

  
$url = $ApiLink. '/api/device-type/delete-device-type';      ///DELETE    ///COMPLETADO


$url = $ApiLink.'/api/device-type/get-all-device-types';    ///GET       ///COMPLETADO


$url = $ApiLink. '/api/device-type/update-device-type';      ///PUT       ///COMPLETADO



/*****************  HISTORIC     **********************************/


$url = $ApiLink. '/api/historic/delete-historic';        ///DELETE


$url = $ApiLink. '/api/device-type/create-historic';     ///POST


$url = $ApiLink. '/api/device-type/update-historic';     ///PUT


/*****************  Register y Login     **********************************/

$url = $ApiLink. '/api/auth/login';      ///POST


$url = $ApiLink. '/api/register/create-account';      ///POST




?>