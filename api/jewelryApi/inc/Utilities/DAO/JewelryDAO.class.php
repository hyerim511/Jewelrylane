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

    public static function getJewelryByCategory( string $category ) {
        $sql = "SELECT * FROM Catalog WHERE category=:category";

        self::$db->query($sql);

        self::$db->bind(":category",$category);
        self::$db->execute();

        return self::$db->resultSet();
    }

}