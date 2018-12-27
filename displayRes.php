<?php 
    require_once('connect.php');
    $count = 1;
?>

<html>
    <head>
        <title>Filled Up Form</title>
        <link rel="stylesheet" type="text/css" href="index.css"> 
    </head>
    <body style="background:#fff">
        <div class="wrapper">
            <div class="content">
                <h2>Registration Details</h2>
            <table class="table">
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Field</th>
                    <th>Date/Time</th>
                </tr>
                <?php 
                    $sql = "SELECT * FROM register";
                    $res = mysqli_query($conn,$sql);
                    if ($res){
                        while($row = mysqli_fetch_array($res)){
                            echo "
                                <tr>
                                    <td>$count</td>
                                    <td>".$row['fullName']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['contact']."</td>
                                    <td>".$row['field']."</td>
                                    <td>".$row['time']."</td>
                                <tr>
                            ";
                        ++$count;
                        }
                    }else{
                        echo "Error in sql code check:".mysqli_error($conn);
                    }
                ?>
            </table>
            <div class="link" style="margin-top:2%">
                <a href="index.php">Registration</a>
            </div>
            </div>
        </div>
    </body>
</html>