<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ToDo List</h1>

    <a href="./read.php">List Page</a> <br> <br>

    <form action="" method="post">
            
        <label for="name">Name</label>
        <input type="text" name="workName" id="name" placeholder="Enter your tasks...">
        <button name="AddBtn" >Add</button>
        
    </form>

    <?php

        require_once("./db_Connection.php");

        if(isset($_POST['AddBtn'])){
            $taskName = $_POST['workName'];

            if($taskName == null){
                echo "Fill the textbox";
            }
            else
            {
                $sql = " INSERT INTO do_list (name) VALUES ('$taskName') ";
            
                //mysqli_query(connection,query)

                if(mysqli_query($conn,$sql)){
                    echo "Data have been inserted";
                }
                else
                {
                    echo "Insert data failed". mysqli_error($conn);
                }
            }
            
            
        }

    ?>

</body>
</html>