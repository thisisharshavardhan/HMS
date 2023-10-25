<?php
session_start();


    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data; 
    }

$uname = validate($_POST['uname']);
$pass  = validate($_POST['pass']);


$conn = mysqli_connect("localhost","root","","hostel");
    if(!$conn){
        echo "Connection to the Database Failed";
    }
$sql = "select * from users where username='$uname' AND password='$pass'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $uname && $row['password'] === $pass){
        $login = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['ID'] = $row['sno'];
        $_SESSION['Logged_in'] = true;
        $_SESSION['previlage'] = $row['privilage'];
        header('Location: '.$uri.'Welcome.php');
        // header("Location: Home.php");
    }
}
else {
        echo "failed to login";
        // header("Location: index.php?error=Username or password is incorrect");
    }

?>




