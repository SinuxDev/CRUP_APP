<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Task List</h1>
    <a href="./create.php">Create Page</a> <br> <br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td>1</td>
                <td>Code Lab</td>
                <td>1.1.2011</td>
                <td>
                    <a href="">Update</a>   |
                    <a href="">Delete</a>
                </td>
            </tr> -->
        </tbody>

        <?php

            require_once("./db_Connection.php");

            $sql = "SELECT * FROM do_list";

            $query = mysqli_query($conn,$sql);

            $totalRow = mysqli_num_rows($query);    // 5
            
            // echo "<pre>";
            // var_dump(mysqli_fetch_assoc($query));

            while($row = mysqli_fetch_assoc($query)){

                $time = date('g:i:a',strtotime($row['created_at']));
                echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>$time</td>
                        <td>
                            <a href = 'update.php?id={$row['id']}'>Update</a>    |
                            <a href = 'delete.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>
                ";   
            }
            
            
        
        
        ?>

                             

    </table>
</body>
</html>