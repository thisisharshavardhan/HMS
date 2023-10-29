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
$year = $_POST['year'];
$branch = $_POST['branch'];
$pin = $_POST['pin'];
$studentpinno = $year."-".$branch."-".$pin;
$studentdob = $_POST['dob'];
$fathername = $_POST['fname'];
$mothername = $_POST['mname'];
$studentphone = $_POST['studentnum'];
$fathernum = $_POST['fathernum'];
$mothernum = $_POST['mothernum'];
$gargianname = $_POST['gardianname'];
$gardiannum = $_POST['gardiannum'];
// $gardianphoto = $_POST['gardianphoto'];
$city = $_POST['city'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];
$district = $_POST['district'];
$door = $_POST['door'];
$address = $door.",".$district.",".$city.",".$state.",".$postcode;

// $target_dir = "uploads/";
//     $target_file = $target_dir . basename($_FILES["studentphoto"]["name"]);
//     $target_file2 = $target_dir . basename($_FILES["gardianphoto"]["name"]);

$studentphoto = $_FILES["studentphoto"]["tmp_name"];
$studentphoto_blob = addslashes(file_get_contents($studentphoto));

$fatherphoto = $_FILES["fatherphoto"]["tmp_name"];
$fatherphoto_blob = addslashes(file_get_contents($fatherphoto));

$motherphoto = $_FILES["motherphoto"]["tmp_name"];
$motherphoto_blob = addslashes(file_get_contents($motherphoto));

// Handle Gardian Photo
$gardianphoto = $_FILES["gardianphoto"]["tmp_name"];
$gardianphoto_blob = addslashes(file_get_contents($gardianphoto));

$conn = mysqli_connect("localhost","root","","hostel");
    if(!$conn){
        echo "Connection to the Database Failed";
    }
$sql = "insert into students(student_photo,student_name,student_pinno,student_dob,father_name,mother_name,branch,Year,student_phone,father_phone,mother_phone,gardian_name,gardian_phone,gardian_photo,Address,fatherphoto,motherphoto) values('$studentphoto_blob','$studentname','$studentpinno','$studentdob','$fathername','$mothername','$branch','$year','$studentphone','$fathernum','$mothernum','$gargianname','$gardiannum','$gardianphoto_blob','$address','$fatherphoto_blob','$motherphoto_blob')";
$resultt = mysqli_query($conn,$sql);
$sql = "insert into _marks(pin) values('$studentpinno')";
$resultt = mysqli_query($conn,$sql);
if($resultt){
    header("Location: student.php");
}
else{
    echo "Student Adding Failed";
}
?>
