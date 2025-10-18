<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <?php

        include ('db.php');

        if (isset($_POST['save'])) {
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
        };
        $add_sql = "INSERT INTO 'users'('name','email','password','mobile')  VALUES ('$name','$email','$password','$mobile')";

        $result = mysqli_query($con,$add_sql);

        if(!$result){
            die(mysqli_error($con));
        }else{
            echo "Successfully connection" ;
        }

    ?>

    
    <div class="container">
        <div class="wrapper p-5 m-5">
            <div class="d-flex p-2 justify-content-between">
                <h2>add user</h2>
                <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
            </div>
            <form action="index.php" method="post">
                <div class="mp-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="enter your name" 
                        name="name" autocomplete="false">
                </div>
                <div class="mp-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="enter your email" 
                        name="email" autocomplete="false">
                </div>
                <div class="mp-3">
                    <label class="form-label">Mobile</label>
                    <input type="tel" class="form-control" placeholder="enter your number" 
                        name="mobile" autocomplete="false">
                </div>
                <div class="mp-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="enter your password" 
                        name="password" autocomplete="false">
                </div>
                <input type="submit" class="btn btn-primary" value="save" name="save">
            </form>

        </div>
    </div>
    
    
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./libs/feather_icons.js"></script>
    <script>feather.replace();</script>

</body>
</html>
