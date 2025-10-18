    <?php
        include_once ('db.php');

        $action = false ;

        if(isset($_POST['save'])) {
            
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
        };

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./libs/toast/toast.css">
    <title>Document</title>
</head>
<body>


    <div class="container">
        <div class="wrapper p-5 m-5">
            <div class="d-flex justify-content-between p-2">
                <h2>All users</h2>
                <div><a href="add_user.php"><i data-feather="user-plus"></i></a></div>
            </div>

        </div>
    </div>
    
    

    <script src="./libs/jq.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./libs/feather_icons.js"></script>
    <script src="./libs/toast/toast.js"></script>
    <script src="./libs/toast/main.js"></script>
    <script>
        feather.replace();
        <?php
        if($action != false){
            if($action='add'){?>
                <script>
                    show_add()
                </script>
        <?php  
            }
        }
        ?>
    </script>

</body>
</html>
