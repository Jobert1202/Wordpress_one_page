<?php
$mysqli = new mysqli('127.0.0.1', 'root', 'root', 'tvoje_databaze', 8889);

if ($mysqli->connect_error) {
    die('Chyba připojení: ' . $mysqli->connect_error);
}
echo '✅ Připojení OK!';
?>
