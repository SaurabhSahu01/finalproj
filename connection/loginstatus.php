<?php 
session_start();
// if(isset($_SESSION['loggedin'])){
//     if($_SESSION['loggedin'] !== TRUE){
//         header("location: ../user/usermain.php");
//     }
// }
if(!isset($_SESSION['loggedin'])){
    header("location: ../index.php");
}
?>