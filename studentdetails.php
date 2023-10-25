<?php
session_start();
if (!(isset($_SESSION['Logged_in']))) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .student-info {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .student-info img {
            max-width: 200px;
            height: auto;
            border: 2px solid #333;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .student-details {
            flex: 1;
        }

        .student-info .additional-photo {
            max-width: 200px;
            height: auto;
            border: 2px solid #333;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        p {
            margin: 10px 0;
            color: #333;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        /* Center text in table cells */
        table td {
            vertical-align: middle;
        }

        /* Center-align headings in each year section */
        table caption {
            font-size: 1.2em;
            font-weight: bold;
            margin: 10px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <?PHP
    $pinn = $_POST['pin'];
    $conn = mysqli_connect("localhost", "root", "", "hostel");
    if (!$conn) {
        echo "Connection to the Database Failed";
    }
    $sql = "select * from students where student_pinno = '$pinn'";
    $resultt = mysqli_query($conn, $sql);
    if (mysqli_num_rows($resultt) == 1) {
        $row = mysqli_fetch_assoc($resultt);
    }

    ?>
    <h1>Student Details</h1>
    <div class="student-info">
        <?php $studentphoto_blob = $row['student_photo'];
        $studentphoto_base64 = base64_encode($studentphoto_blob);
        $image_mime_type = 'image/jpeg';
        $data_uri = "data:$image_mime_type;base64,$studentphoto_base64";

        $gardian_blob = $row['gardian_photo'];
        $gardian_base64 = base64_encode($gardian_blob);
        $image_mime_type = 'image/jpeg';
        $data_uri2 = "data:$image_mime_type;base64,$gardian_base64";


        ?>
        <img src="<?php echo $data_uri; ?>" alt="Student Photo" width="400">
        <div class="student-details">
            <p><strong>Name:</strong> <?php echo $row["student_name"]; ?></p>
            <p><strong>Pin Number:</strong> <?php echo $row["student_pinno"]; ?></p>
            <p><strong>Department:</strong> <?php echo $row["branch"]; ?></p>
            <p><strong>Batch:</strong> <?php echo $row["Year"]; ?></p>
            <p><strong>Father Name:</strong> <?php echo $row["father_name"]; ?></p>
            <p><strong>Mother Name:</strong> <?php echo $row["mother_name"]; ?></p>
            <p><strong>Student Phone:</strong> <?php echo $row["student_phone"]; ?></p>
            <p><strong>Father Phone:</strong> <?php echo $row["father_phone"]; ?></p>
            <p><strong>Mother Phone:</strong> <?php echo $row["mother_phone"]; ?></p>
        </div>
        <img class="additional-photo" src="<?php echo $data_uri2; ?>" alt="Additional Photo" width="200">
        <p><strong>Guardian Name:</strong> <?php echo $row["gardian_name"]; ?></p>
        <p><strong>Guardian Phone:</strong> <?php echo $row["gardian_phone"]; ?></p>
    </div>

    <!-- 1st Year -->
    <?php
    $sql = "select * from _marks where pin = '$pinn'";
    $resultt = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resultt);
    ?>
    <table>
        <tr>
            <th>Subject</th>
            <th>1st MID</th>
            <th>2nd MID</th>
            <th>3rd MID</th>
            <th>Semister</th>

        </tr>
        <tr>
            <td>101</td>
            <td>
                <?php
                $sql = "select * from _marks where pin='$pinn'";
                $resultt = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resultt) == 1) {
                    $row = mysqli_fetch_assoc($resultt);
                }
                echo $row['101'];
                ?>
            </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>102</td>
            <td><?php
                $sql = "select * from _marks where pin='$pinn'";
                $resultt = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resultt) == 1) {
                    $row = mysqli_fetch_assoc($resultt);
                }
                echo $row['102'];
                ?></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>103</td>
            <td><?php
                $sql = "select * from _marks where pin='$pinn'";
                $resultt = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resultt) == 1) {
                    $row = mysqli_fetch_assoc($resultt);
                }
                echo $row['103'];
                ?></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>104</td>
            <td><?php
                $sql = "select * from _marks where pin='$pinn'";
                $resultt = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resultt) == 1) {
                    $row = mysqli_fetch_assoc($resultt);
                }
                echo $row['104'];
                ?></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>105</td>
            <td><?php
                $sql = "select * from _marks where pin='$pinn'";
                $resultt = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resultt) == 1) {
                    $row = mysqli_fetch_assoc($resultt);
                }
                echo $row['105'];
                ?></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>106</td>
            <td><?php
                $sql = "select * from _marks where pin='$pinn'";
                $resultt = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resultt) == 1) {
                    $row = mysqli_fetch_assoc($resultt);
                }
                echo $row['106'];
                ?></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>107</td>
            <td><?php
                $sql = "select * from _marks where pin='$pinn'";
                $resultt = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resultt) == 1) {
                    $row = mysqli_fetch_assoc($resultt);
                }
                echo $row['107'];
                ?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>108</td>
            <td><?php
                $sql = "select * from _marks where pin='$pinn'";
                $resultt = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resultt) == 1) {
                    $row = mysqli_fetch_assoc($resultt);
                }
                echo $row['108'];
                ?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>109</td>
            <td><?php
                $sql = "select * from _marks where pin='$pinn'";
                $resultt = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resultt) == 1) {
                    $row = mysqli_fetch_assoc($resultt);
                }
                echo $row['109'];
                ?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>110</td>
            <td><?php
                $sql = "select * from _marks where pin='$pinn'";
                $resultt = mysqli_query($conn, $sql);
                if (mysqli_num_rows($resultt) == 1) {
                    $row = mysqli_fetch_assoc($resultt);
                }
                echo $row['110'];
                ?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <table>
        <caption></caption>
        <tr>
            <th>Subject</th>
            <th>1st MID</th>
            <th>2nd MID</th>
            <th>Semister</th>

        </tr>
        <tr>
            <td>301</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>302</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>303</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>304</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>305</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>306</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>307</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>308</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>309</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>310</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <table>
        <caption></caption>
        <tr>
            <th>Subject</th>
            <th>1st MID</th>
            <th>2nd MID</th>
            <th>Semister</th>

        </tr>
        <tr>
            <td>401</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>402</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>403</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>404</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>405</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>406</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>407</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>408</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>409</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>410</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <table>
        <caption></caption>
        <tr>
            <th>Subject</th>
            <th>1st MID</th>
            <th>2nd MID</th>
            <th>Semister</th>

        </tr>
        <tr>
            <td>501</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>502</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>503</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>504</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>505</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>506</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>507</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>508</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>509</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>510</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>


</body>

</html>