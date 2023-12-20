<!-- Get Data => Show => Edit => Update --->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        require("./db_Connection.php");
        
        $id = $_GET['id'];

        $sql = "SELECT *FROM do_list WHERE id = $id";

        $query = mysqli_query($conn,$sql);
        
        $data = mysqli_fetch_assoc($query); // get data

        if(isset($_GET['UpdateBtn'])){
            $taskId = $_GET['id'];
            $taskName = $_GET['taskName'];

            $updateSQL = "UPDATE do_list SET name = '$taskName' WHERE id = $taskId";

                if(mysqli_query($conn,$updateSQL)){
                    header("location:read.php");
                }else{
                    echo "Update error...";
                }       
        }

    ?>


    <form action="#" method="get">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" required>
        <input type="text" name="taskName" id="" value="<?php echo $data['name'] ?>" required> <br><br>
        <button name="UpdateBtn" >Update</button>
    </form>

    

</body>
</html>



