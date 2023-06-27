<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Booking.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/BookingConverter.class.php");
require_once("./inc/Utilities/DAO/BookingDAO.class.php");

header("Access-Control-Allow-Origin: *");

$method = $_SERVER["REQUEST_METHOD"];

switch($method) {
    case "GET" :
        BookingDAO::startDb();
        echo json_encode(
            BookingConverter::convertToStd(BookingDAO::getAllBooking())); 
    break;
    case "POST":
        BookingDAO::startDb();
        $data = json_decode(file_get_contents('php://input'));
        BookingDAO::insertBooking(
            BookingConverter::convertToObj($data)
        );
        header("Location: http://localhost:8080");
    break;
}
