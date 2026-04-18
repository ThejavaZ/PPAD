<?php

class User{
    public $id;
    public $username;
    public $email;
    public $password;
    public $timestamp;

    public function __construct( $id, $username, $email, $password, $timestamp ){
        {
            throw new \Exception('Not implemented');
        }
    }

    public function __toString(){
        return $this->username .' '. $this->email .' '. $this->password .' '. $this->timestamp;
    }
}