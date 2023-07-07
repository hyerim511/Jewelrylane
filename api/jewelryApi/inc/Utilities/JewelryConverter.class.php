<?php

class JewelryConverter {
    public static function convertToStd($jewelry){
        if(! is_array($jewelry)) {
            $stdObject = new stdClass;
            $stdObject->id = $jewelry->getId();
            $stdObject->category = $jewelry->getCategory();
            $stdObject->title = $jewelry->getTitle();
            $stdObject->price = $jewelry->getPrice();
            $stdObject->material = $jewelry->getMaterial();
            $stdObject->image = $jewelry->getImage();
            return $stdObject;
        } else {
            $stdObjectList = [];
            foreach($jewelry as $newJewelry) {
                $stdObject = new stdClass;
                $stdObject->id = $newJewelry->getId();
                $stdObject->category = $newJewelry->getCategory();
                $stdObject->title = $newJewelry->getTitle();
                $stdObject->price = $newJewelry->getPrice();
                $stdObject->material = $newJewelry->getMaterial();
                $stdObject->image = $newJewelry->getImage();
                $stdObjectList[] = $stdObject; 
            }
            return $stdObjectList;
        }
    }
}