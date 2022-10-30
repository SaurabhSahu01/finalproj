<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Car Rental</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <main>
        <div class="row">
            <div class="colm-logo">
                <img src="https://cdn-icons-png.flaticon.com/512/3393/3393345.png" alt="Logo" id="logo">
            </div>
            <div class="colm-form">
                <div class="form-container">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <input type="text" name="email" placeholder="Email address">
                        <input type="password" name="password" placeholder="Password">
                        <button class="btn-login" type="submit">Login</button>
                    </form>
                    <button class="btn-new" onclick="location.href = './register.php'">Create new Account</button>
                    <?php 
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?php 
        include "./connection/server.php"; //database connection

        // writing the logged in function
        session_start();
        if(isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == 1){
            header("location: ./index.php");
        }

        //validating the form
        if(isset($_POST['email']) and isset($_POST['password'])){
            $email = input_data($_POST['email']);
            $password = input_data($_POST['password']);
            if(!empty($email) and !empty($password)){
                // SELECT * FROM `users` WHERE `email`='saurabh@gmail.com' and `password`='hello123'
                $sql = "SELECT * FROM `users` WHERE `email`='$email' and `password`='$password';";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if(mysqli_num_rows($result)){
                    session_start();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['loggedinas'] = $row['loggedinas'];
                    $_SESSION['username'] = $row['uname'];
                    header("location: ./user/usermain.php");
                }
            }
        }
        function input_data($data){  
            $data = trim($data);  
            $data = stripslashes($data);  
            $data = htmlspecialchars($data);  
            return $data;  
        } 
    ?>
</body>
<script>
         if ( window.history.replaceState ) {
         window.history.replaceState( null, null, window.location.href );
         }
      </script>

</html>