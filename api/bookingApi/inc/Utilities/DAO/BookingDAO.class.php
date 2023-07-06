<?php

class BookingDAO {

    private static $db;

    public static function startDb() {
        self::$db = new PDOService('Booking');
    }

    public static function getAllBooking() {
        $sql = "SELECT * FROM Booking";
  
        self::$db->query($sql);
        self::$db->execute();
  
        return self::$db->resultSet();
    }

    public static function insertBooking(Booking $newBooking) {
        $sql = "INSERT INTO Booking (name,email,phone,regDate,regTime,purpose,message) VALUES (:name,:email,:phone,:date,:time,:purpose,:message)";

        self::$db->query($sql);
        self::$db->bind(":name",$newBook->getName());
        self::$db->bind(":email",$newBook->getEmail());
        self::$db->bind(":phone",$newBook->getPhone());
        self::$db->bind(":date",$newBook->getDate());
        self::$db->bind(":time",$newBook->getTime());
        self::$db->bind(":purpose",$newBook->getPurpose());
        self::$db->bind(":message",$newBook->getMessage());

        self::$db->execute();
        return self::$db->lastInsertId();
    }

    public static function getBookingByEmail( string $email ) {
        $sql = "SELECT * FROM Booking WHERE email=:email";

        self::$db->query($sql);

        self::$db->bind(":email",$email);
        self::$db->execute();

        return self::$db->singleResult();
    }

}