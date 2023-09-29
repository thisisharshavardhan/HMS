<?php
session_start();
function validate($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
}

// $photo = $_POST['studentphoto'];
$studentname = $_POST['sname'];
$studentpinno = $_POST['spin'];
$studentdob = $_POST['dob'];
$fathername = $_POST['fname'];
$mothername = $_POST['mname'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$studentphone = $_POST['studentnum'];
$fathernum = $_POST['fathernum'];
$mothernum = $_POST['mothernum'];
$gargianname = $_POST['gardianname'];
$gardiannum = $_POST['gardiannum'];
// $gardianphoto = $_POST['gardianphoto'];
$address = $_POST['address'];

// $target_dir = "uploads/";
//     $target_file = $target_dir . basename($_FILES["studentphoto"]["name"]);
//     $target_file2 = $target_dir . basename($_FILES["gardianphoto"]["name"]);

$studentphoto = $_FILES["studentphoto"]["tmp_name"];
$studentphoto_blob = addslashes(file_get_contents($studentphoto));

// Handle Gardian Photo
$gardianphoto = $_FILES["gardianphoto"]["tmp_name"];
$gardianphoto_blob = addslashes(file_get_contents($gardianphoto));

$conn = mysqli_connect("localhost","root","","hostel");
    if(!$conn){
        echo "Connection to the Database Failed";
    }
$sql = "insert into students(student_photo,student_name,student_pinno,student_dob,father_name,mother_name,branch,Year,student_phone,father_phone,mother_phone,gardian_name,gardian_phone,gardian_photo,Address) values('$studentphoto_blob','$studentname','$studentpinno','$studentdob','$fathername','$mothername','$branch','$year','$studentphone','$fathernum','$mothernum','$gargianname','$gardiannum','$gardianphoto_blob','$address')";
$resultt = mysqli_query($conn,$sql);
$sql = "insert into _marks(pin) values('$studentpinno')";
$resultt = mysqli_query($conn,$sql);
if($resultt){
    header("Location: student.php");
}
else{
    echo "Student Addition Failed";
}
?>
