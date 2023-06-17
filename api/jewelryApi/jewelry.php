<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Jewelry.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/JewelryConverter.class.php");
require_once("./inc/Utilities/DAO/JewelryDAO.class.php");

JewelryDAO::startDb();

header("Access-Control-Allow-Origin: *");

$method = $_SERVER["REQUEST_METHOD"];

switch($method) {
    case "GET" :
        echo json_encode(
            JewelryConverter::convertToStd(JewelryDAO::getAllJewelry())); 
    break;
    default:
        echo json_encode(
            JewelryConverter::convertToStd(JewelryDAO::getAllJewelry())); 
}
