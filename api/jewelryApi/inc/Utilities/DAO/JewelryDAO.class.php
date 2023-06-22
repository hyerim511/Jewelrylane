<?php

class JewelryDAO {

    private static $db;

    public static function startDb() {
        self::$db = new PDOService('Jewelry');
    }

    public static function getAllJewelry() {
        $sql = "SELECT * FROM Catalog";
  
        self::$db->query($sql);
        self::$db->execute();
  
        return self::$db->resultSet();
    }

}