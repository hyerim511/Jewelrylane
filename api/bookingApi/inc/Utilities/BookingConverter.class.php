<?php

class BookingConverter {
    public static function convertToStd($booking){
        if(! is_array($booking)) {
            $stdObject = new stdClass;
            $stdObject->name = $booking->getName();
            $stdObject->email = $booking->getEmail();
            $stdObject->phone = $booking->getPhone();
            $stdObject->date = $booking->getDate();
            $stdObject->time = $booking->getTime();
            $stdObject->purpose = $booking->getPurpose();
            $stdObject->message = $booking->getMessage();
            return $stdObject;
        } else {
            $stdObjectList = [];
            foreach($booking as $newbooking) {
                $stdObject = new stdClass;
                $stdObject->name = $newbooking->getName();
                $stdObject->email = $newbooking->getEmail();
                $stdObject->phone = $newbooking->getPhone();
                $stdObject->date = $newbooking->getDate();
                $stdObject->time = $newbooking->getTime();
                $stdObject->purpose = $newbooking->getPurpose();
                $stdObject->message = $newbooking->getMessage();
                $stdObjectList[] = $stdObject; 
            }
            return $stdObjectList;
        }
    }

    public static function convertToObj($stdObject) {
        if ( ! is_array($stdObject) ) {
            $newBooking = new Booking();
            $newBooking->setName($stdObject->name);
            $newBooking->setEmail($stdObject->email);
            $newBooking->setPhone($stdObject->phone);
            $newBooking->setDate($stdObject->date);
            $newBooking->setTime($stdObject->time);
            $newBooking->setPurpose($stdObject->purpose);
            $newBooking->setMessage($stdObject->message);
            return $newBooking;
        } else {
            $bookList = [];
            foreach($stdObject as $newstdObject) {
                $newBooking = new Book();
                $newBooking->setName($newstdObject->name);
                $newBooking->setEmail($newstdObject->email);
                $newBooking->setPhone($newstdObject->phone);
                $newBooking->setDate($newstdObject->date);
                $newBooking->setTime($newstdObject->time);
                $newBooking->setPurpose($newstdObject->purpose);
                $newBooking->setMessage($newstdObject->message);
                $bookingList[] = $newBooking;
            }
            return $bookingList;
        }
    }
}