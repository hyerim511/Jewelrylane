<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Jewelry.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/JewelryConverter.class.php");
require_once("./inc/Utilities/DAO/JewelryDAO.class.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,HEAD,OPTIONS,PUT,DELETE ");
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER["REQUEST_METHOD"];

switch($method) {
    case "GET" :
        JewelryDAO::startDb();
        echo json_encode(
            JewelryConverter::convertToStd(JewelryDAO::getAllJewelry())); 
    break;
}