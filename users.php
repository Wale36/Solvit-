<?php

$con = mysqli_connect('localhost','root','');

$createDB = "CREATE DATABASE IF NOT EXISTS `userDB`";

if(mysqli_query($con,$createDB))
   {
 
    $con = mysqli_connect('localhost','root','','userDB');

    $createTble = mysqli_query($con,"
    create table IF NOT EXISTS `userTbl`(`uId` int(11) primary key auto_increment,`uName` varchar(24),`age` int(10))
    ");
    if($createTble)
    {
        $insert = mysqli_query($con,"INSERT INTO `userTbl` (`uId`,`uName`,`age`) VALUES(null,'ndatimana william','25')");
        if($insert)
        {
            echo "User records have been inserted";
        }
        else
            echo "Something went wrong";
        
    }
    }
else
    echo "some error occurred";

