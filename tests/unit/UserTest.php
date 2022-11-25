<?php

namespace Model;
class User {
    public function __construct( int $age){
        $this->age = $age;
    }
    public function isAnAdult(){
        return $this->age =18;
    }
}
