<?php
define('SITE_URL', 'http://localhost/eticaret');

$db = new mysqli("localhost","root","","eticaret_vt");


if ($db -> connect_errno) {
  echo "Veritabanına bağlanılamadı: " . $db -> connect_error;
  exit();
}
?>