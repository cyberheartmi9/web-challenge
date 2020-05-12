<?php

class Crypto{

    public  $id;
    public  $password;
    public $method;

    function __construct($id, $password, $method)
    {
        $this->id = $id;
        $this->password = $password;
        $this->method = $method;
    }


    function  Encrypt(){

            $key= substr(hash('sha256', $this->password, true), 0, 32);
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
        $encrypted = base64_encode(openssl_encrypt($this->id, $this->method, $key, OPENSSL_RAW_DATA, $iv));

        return $encrypted;

    }


    function Decrypt(){

        $key= substr(hash('sha256', $this->password, true), 0, 32);
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

        $decrypted = openssl_decrypt(base64_decode($this->id), $this->method, $key, OPENSSL_RAW_DATA, $iv);



    return $decrypted;

    }




}



?>
