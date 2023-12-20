<?php


    $conn = mysqli_connect('localhost:4308','root','','todo_list');

    if(!$conn){
        echo "Connection fail...." . mysqli_connect_error();
    }
    
    