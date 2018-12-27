<?php 
    require_once('connect.php');

    $msg = "Fill out all fields";
    if (isset($_POST['submit'])){
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $field = $_POST['field'];

        $sql = "INSERT INTO register (fullName,email,contact,field) values ('$fullName','$email','$contact','$field')";
        $res = mysqli_query($conn,$sql);
        if ($res){
            $msg = "Successfully Registered!";
            echo "<script>
                    alert('Successfully Registered');
                </script>";
        }else{
            $msg = "Error in Registration See:".mysqli_error($conn);
        }
    }
?>

<html>
    <head>
        <title>Digital Consumer Rights</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="title">
                <!-- <h1> Registration for Digital Consumer Rights Program <h1> -->
                <img src="Banner.jpg" height="auto" width="100%">
                <h2>Registration</h2>
            </div>  
                <div class="form">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                        <input type="text" name="fullName" required autocomplete="off"  placeholder="Name...">
                        <input type="email" name="email" autocomplete="off" required placeholder="Email...">
                        <input type="text" name="contact"  required autocomplete="off" placeholder="Contact...">
                        <input type="text" name="field"  required placeholder="Field...">
                        <input type="submit" name="submit" value="Submit">
                    </form>
                </div>  
                <div class="message">
                    <img src="message.png" height="30" width="30" class="image">
                    <span class="txtMsg"><?php echo $msg?></span>
                    <div style="float:clear;"></div>
                </div>
                <div class="link">
                    <a href="displayRes.php">Registered List</a>
                </div>
        </div>
    </body>
</html>