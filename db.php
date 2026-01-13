<?php
require_once 'configDB.php';

$config = new configDB(__DIR__ . '/Resources/Conf/jeu2.conf');

$dsn = "mysql:host={$config->getHote()};port={$config->getPort()};dbname={$config->getDBName()};charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $config->getUser(), $config->getPass(), [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
} catch (PDOException $e) {
    die(" Erro ao conectar: " . $e->getMessage());
}