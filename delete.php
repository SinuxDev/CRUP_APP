<?php
    
        require_once("./db_Connection.php");

        $id = $_GET['id'];

        $sql = "DELETE FROM do_list where id = $id";

        if(mysqli_query($conn,$sql)){
            header("location:read.php");
        }
        else{
            echo "Error...". mysqli_connect_error();
        }