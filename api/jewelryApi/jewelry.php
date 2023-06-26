<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Jewelry.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/JewelryConverter.class.php");
require_once("./inc/Utilities/DAO/JewelryDAO.class.php");

header("Access-Control-Allow-Origin: *");

$method = $_SERVER["REQUEST_METHOD"];

if(!empty($_GET)) {
    JewelryDAO::startDb();
            echo json_encode(
                JewelryConverter::convertToStd(JewelryDAO::getJewelryByCategory('rings'))); 

} else {
    switch($method) {
        case "GET" :
            JewelryDAO::startDb();
            echo json_encode(
                JewelryConverter::convertToStd(JewelryDAO::getAllJewelry())); 
        break;
    }
}
