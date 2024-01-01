<?php
// include("server.php");
// if(isset($_POST["btn"])){
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $password = $_POST["password"];

// $sql = "INSERT INTO `users`(`name`, `email`, `password`)
// VALUE('$name', '$email', '$password')";
// $result = mysqli_query($conn, $sql);

// if($result){
//     echo "<script>
//             alert('Registration successfully...');
//             window.location='reg.php';
//         </script>";
// }else{
//     die(mysqli_error($conn));
// }


// }


// .........................login section


// if(isset($_POST["log"])){
//     $email = $_POST["email"];
//     $password = $_POST['password'];

// $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result)> 0){
//     echo "<script>
//             alert('login successfully...');
//             window.location='reg.php';
//         </script>";
// }else{
    // echo "Invalid Details";\
//     die(mysqli_error($conn));
// }
// }
include("server.php");

if(isset($_POST["btn"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

$sql = "INSERT INTO `users` (`name`, `email`, `password`)
VALUE ('$name', '$email', '$password')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "<script>
        
            alert('Registration Successfully');
            window.location='reg.php';
        </script>";
}
}
// login section()


if(isset($_POST["log"])){
    $email = $_POST['email'];
    $password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)> 0 ){
    echo "<script>
        
    alert('login Successfully');
    window.location='dashboard.php';
</script>";
}else{
    echo "Invalid Details";
}
}


?>