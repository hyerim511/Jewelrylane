<?php

class Booking {
    private string $name;
    private string $email;
    private string $phone;
    private string $date;
    private string $time;
    private string $purpose;
    private string $message;

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
        return $this->date;
    }
    public function setDate($date) {
        $this->date = $date; 
    }

    public function getTime() {
        return $this->time;
    }
    public function setTime($time) {
        $this->time = $time; 
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