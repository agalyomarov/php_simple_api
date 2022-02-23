<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: -1");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
const LOGIN = 'login';
const PASSWORD = 'password';

if (!empty($_POST['login']) && !empty($_POST['password'])) {
   if ($_POST['login'] == LOGIN && $_POST['password'] == PASSWORD) {
      echo json_encode(['auth' => 'ok', 'key' => base64_encode($_POST['login'] . $_POST['password'])]);
   } else {
      echo json_encode(['auth' => 'false']);
   }
}