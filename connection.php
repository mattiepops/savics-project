<?php

try {
    $bdd = new PDO("mysql:host=localhost;dbname=savics;charset=utf8", "root", "root", [PDO::ATTR_PERSISTENT => true]);

} catch (Exception $e) {
    die("Error : " . $e->getMessage());
}

?>