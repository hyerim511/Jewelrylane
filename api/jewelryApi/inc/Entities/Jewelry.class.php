<?php

class Jewelry {
    private int $id;
    private string $category;
    private string $title;
    private int $price;
    private string $material;
    private string $image;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id; 
    }

    public function getCategory() {
        return $this->category;
    }
    public function setCategory($category) {
        $this->category = $category; 
    }

    public function getTitle() {
        return $this->title;
    }
    public function setTitle($title) {
        $this->title = $title; 
    }

    public function getPrice() {
        return $this->price;
    }
    public function setPrice($price) {
        $this->price = $price; 
    }

    public function getMaterial() {
        return $this->material;
    }
    public function setMaterial($material) {
        $this->material = $material; 
    }

    public function getImage() {
        return $this->image;
    }
    public function setImage($image) {
        $this->image = $image; 
    }

}