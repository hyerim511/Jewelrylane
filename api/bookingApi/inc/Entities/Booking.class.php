<?php

class Booking {
    private int $id;
    private string $name;
    private string $email;
    private string $phone;
    private string $regDate;
    private string $regTime;
    private string $purpose;
    private string $message;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id; 
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name; 
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email; 
    }

    public function getPhone() {
        return $this->phone;
    }
    public function setPhone($phone) {
        $this->phone = $phone; 
    }

    public function getDate() {
        return $this->regDate;
    }
    public function setDate($regDate) {
        $this->regDate = $regDate; 
    }

    public function getTime() {
        return $this->regTime;
    }
    public function setTime($regTime) {
        $this->regTime = $regTime; 
    }

    public function getPurpose() {
        return $this->purpose;
    }
    public function setPurpose($purpose) {
        $this->purpose = $purpose; 
    }

    public function getMessage() {
        return $this->message;
    }
    public function setMessage($message) {
        $this->message = $message; 
    }

}