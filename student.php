<?php
session_start();
if (!(isset($_SESSION['Logged_in']))) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/button60.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <style>
        #searchform {
            left: 80%;
            position: fixed;
        }

        #searchform input,
        button {
            border-radius: 10px;
        }

        .div_below_nav {
            position: relative;
            top: 15px;
        }

        .popup .overlay {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
            display: none;

        }

        .popup .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            background: transparent;
            width: 80%;
            height: 220px;
            z-index: 2;
            text-align: left;
            padding: 20px;
            box-sizing: border-box;
        }

        .popup .close-btn {
            position: absolute;
            right: 20px;
            top: 20px;
            width: 30px;
            height: 30px;
            background: #222;
            color: #fff;
            font-size: 25px;
            font-weight: 600;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
        }

        .popup.active .overlay {
            display: block;
        }

        .popup.active .content {
            transition: all 300ms ease-in-out;
            transform: translate(-50%, -50%) scale(1);
        }

        #subbtn {
            margin-left: 48%;
        }
    </style>
    <script>
        function toggleadd() {
            document.getElementById('popup-1').classList.toggle("active");
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-md sticky-top py-3 navbar-dark" id="mainNav" style="height: 65.7812px;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/HOSTELMANAGEMENT/Welcome.php"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span>HOSTEL S/W</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="Welcome.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="student.php" style="color: #8ee3e3">Student</a></li>
                    <li class="nav-item"><a class="nav-link" href="mess.php">Mess</a></li>
                    <li class="nav-item"><a class="nav-link" href="maintainence.php">Maintainence</a></li>
                    <li class="nav-item"><a class="nav-link" href="INOUT.php">IN/OUT</a></li>
                </ul>

                <span class="navbar-text" style="height: 41.5938px;width: 164.281px;margin: 0px;">Welcome, <?php echo $_SESSION["username"] ?></span>
                <button role="button" onclick="window.location.href='logout.php'">Logout</button>
            </div>
        </div>
    </nav>
    <header class="bg-dark" style="height:2px"></header>
    <section>
        <div class="div_below_nav">
            <ul class="navbar-nav" style="display: flex; flex-direction: row;">
                <!-- Add your navigation links here -->
                <?php if ($_SESSION['previlage'] == 'HEAD') { ?>
                    <li class="nav-item" style="margin-right: 15px; margin-left: 15px"><button class="button-60" role="button" onclick="toggleadd()">ADD</button></li>
                    <li class="nav-item" style="margin-right: 15px;"><button class="button-60" role="button" onclick="window.location.href='update.php'">Update Marks</button></li>
                    <?php  } ?>
                    <form id="searchform" method="post" action="studentdetails.php">
                        <input type="search" name="pin" id="pin" placeholder="Enter Pin">
                        <button type="submit">search</button>
                    </form>
                
            </ul>
        </div>
    </section>
    <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="toggleadd()">&times;</div>
            <h3>Enter User Details -</h3>
            <br>
            <form action="addstudent.php" method="post" enctype="multipart/form-data">

                <br><br>
                <label for="sname">Student Name: </label>
                <input type="text" name="sname" placeholder="Enter Student Name">
                &emsp;&emsp;
                <!-- <label for="spin">Student Pin-no: </label>
                <input type="text" name="spin" id="spin" placeholder="Enter Student Pin-no"> -->
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" placeholder="Enter Batch+030">

                <label for="branch">Branch:</label>
                <select id="branch" name="branch">
                    <option value="CM">CM</option>
                    <option value="ECE">ECE</option>
                    <option value="AIML">AIML</option>
                    <option value="AEI">AEI</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="MECH">MECH</option>
                    <option value="EEE">EEE</option>
                </select>

                <label for="pin">Pin:</label>
                <input type="text" id="pin" name="pin" maxlength="3" placeholder="Enter pin"><br><br>
                <label for="dob">DOB of Student: </label>
                <input type="date" name="dob" id="dob">
                <br><br>
                <label for="fname">Father Name:&emsp;</label>
                <input type="text" name="fname" id="fname" placeholder="Enter Father name">
                &emsp;&emsp;
                <label for="mname">Mother Name: </label>
                <input type="text" name="mname" id="mname" placeholder="Enter mother name">
                <br><br>
                <label for="studentnum">Student Phone: </label>
                <input type="number" name="studentnum" id="studentnum" placeholder="Student Phone Number" maxlength="10">
                &emsp;&emsp;
                <label for="fathernum">Father Phone: </label>
                <input type="number" name="fathernum" id="fathernum" placeholder="Father Phone Number" maxlength="10">
                &emsp;&emsp;
                <label for="mothernum">Mother Phone : </label>
                <input type="number" name="mothernum" id="mothernum" placeholder="Mother Phone Number" maxlength="10">
                <br><br>
                <label for="gardianname">guardian Name: </label>
                <input type="text" name="gardianname" id="gardianname" placeholder="Guardian name">
                &emsp;&emsp;
                <label for="gardiannum">guardian Phone no: </label>
                <input type="number" name="gardiannum" id="gardiannum" maxlength="10" placeholder="Guardian phone number">
                <br><br>
                <label for="studentphoto">Student Photo: </label>
                <input type="file" name="studentphoto" id="studentphoto" accept="image/*">
                <br><br>
                <label for="fatherphoto">Father Photo: </label>
                <input type="file" name="fatherphoto" id="fatherphoto">
                <br><br>
                <label for="motherphoto">Mother Photo: </label>
                <input type="file" name="motherphoto" id="motherphoto">
                <br><br>
                <label for="gardianphoto">guardian Photo: </label>
                <input type="file" name="gardianphoto" id="gardianphoto">
                <br><br>
                <label for="state">State: </label>
                &emsp;&emsp;&emsp;
                <input type="text" name="state" id="state" placeholder="State">
                &emsp;&emsp;<label for="city">City: </label>
                <input type="text" name="city" id="address1" placeholder="City">
                &emsp;&emsp;<label for="district">District: </label>
                <input type="text" name="district" id="district" placeholder="District">
                <br><br>
                <label for="door">Door Number: </label>
                <input type="text" name="door" id="door" placeholder="Door Number">
                &emsp;<label for="postcode">Postal Code: </label>
                <input type="text" name="postcode" id="postcode" placeholder="Pin code">
                <br><br>
                <button type="Submit" id="subbtn" class="button-60">Submit</button>
                <br><br><br><br><br>
            </form>
        </div>
    </div>
    <footer class="bg-dark"></footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
</body>

</html>