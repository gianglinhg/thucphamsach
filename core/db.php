<?php

 class database
 {
     const HOST ='localhost';
     const USERNAME='root';
     const PASSWORD='';
     const DB_NAME='farmapp3';

     public function connect()
     {
        $connect=mysqli_connect(self::HOST, self::USERNAME,self::PASSWORD,self::DB_NAME);
        mysqli_set_charset($connect,"utf8");

        if(mysqli_connect_errno()==0){
            return $connect;
        }
        return "kết nối thất bại";
     }
 }