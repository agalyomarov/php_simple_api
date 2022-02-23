<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: -1");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: POST, GET");
include_once "array_data.php";
const LOGIN = 'login';
const PASSWORD = 'password';

$header = apache_request_headers();
if ($header['Authorization'] == base64_encode(LOGIN . PASSWORD)) {
   echo json_encode($data);
} else {
   echo json_encode(['auth' => 'false']);
}