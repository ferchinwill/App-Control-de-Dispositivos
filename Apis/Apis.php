<?php



$ApiLink =  'https://9bd6-2806-109f-a-2e91-6dae-b88b-be62-4bd7.ngrok-free.app';   



/*****************  DEVICE     **********************************/


$url = $ApiLink.'/api/device/create-device';    ///POST                            ///COMPLETADO        /// EN REVISION



$url = $ApiLink. '/api/device/get-all-historic-devices';  ///GET                   ///COMPLETADO


$url = $ApiLink. '/api/device/get-historic-device';  ///GET                        ///COMPLETADO


$url = $ApiLink. '/api/device/get-last-value-historic-device';   ///GET       


$url = $ApiLink. '/api/device/delete-device';   ///DELETE


$url = $ApiLink. '/api/device/update-device';   ///PUT



/*****************   ADMIN ---- DEVICE-TYPE     **********************************/



$url = $ApiLink. '/api/device-type/get-all-users';     /// POST            /// EN REVISION
 
 
$url = $ApiLink. '/api/device-type/create-device-type';      ///POST       ///COMPLETADO
 
   
$url = $ApiLink. '/api/device-type/delete-device-type';      ///DELETE     ///COMPLETADO
 
 
$url = $ApiLink.'/api/device-type/get-all-device-types';    ///GET         ///COMPLETADO
 
 
$url = $ApiLink. '/api/device-type/update-device-type';      ///PUT        ///COMPLETADO
 


/*****************  HISTORIC     **********************************/


$url = $ApiLink. '/api/historic/delete-historic';        ///DELETE


$url = $ApiLink. '/api/historic/create-historic';     ///POST


$url = $ApiLink. '/api/historic/update-historic';     ///PUT


/*****************  Register y Login     **********************************/

$url = $ApiLink. '/api/auth/login';      ///POST


$url = $ApiLink. '/api/register/create-account';      ///POST




?>