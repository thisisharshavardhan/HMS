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
    }    ?>
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
            <p><strong>Father Name:</strong> <?php echo $row["father_name"]; ?></p>
            <p><strong>Mother Name:</strong> <?php echo $row["mother_name"]; ?></p>
            <p><strong>Student Phone:</strong> <?php echo $row["student_phone"]; ?></p>
            <p><strong>Father Phone:</strong> <?php echo $row["father_phone"]; ?></p>
            <p><strong>Mother Phone:</strong> <?php echo $row["mother_phone"]; ?></p>
        </div>
        <img class="additional-photo" src="<?php echo $data_uri2; ?>" alt="Additional Photo" width="200">
        <p><strong>Guardian Name:</strong> <?php echo $row["gardian_name"]; ?></p>
        <p><strong>Guardian Phone:</strong> <?php echo $row["gardian_phone"]; ?></p>
    </div> <!-- 1st Year -->
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
                echo $row['m1_101'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_101'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m3_101'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_101'];
                ?>
            </td>
        </tr>
        <tr>
            <td>102</td>
            <td><?php
                echo $row['m1_102'];
                ?></td>
            <td>
                <?php
                echo $row['m2_102'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m3_102'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_102'];
                ?>
            </td>
        </tr>
        <tr>
            <td>103</td>
            <td> <?php
                    echo $row['m1_103'];
                    ?></td>
            <td>
                <?php
                echo $row['m2_103'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m3_103'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_103'];
                ?>
            </td>
        </tr>
        <tr>
            <td>104</td>
            <td><?php
                echo $row['m1_104'];
                ?></td>
            <td>
                <?php
                echo $row['m2_104'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m3_104'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_104'];
                ?>
            </td>
        </tr>
        <tr>
            <td>105</td>
            <td><?php
                echo $row['m1_105'];
                ?></td>
            <td>
                <?php
                echo $row['m2_105'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m3_105'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_105'];
                ?>
            </td>
        </tr>
        <tr>
            <td>106</td>
            <td><?php
                echo $row['m1_106'];
                ?></td>
            <td>
                <?php
                echo $row['m2_106'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m3_106'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_106'];
                ?>
            </td>
        </tr>
        <tr>
            <td>107</td>
            <td><?php
                echo $row['m1_107'];
                ?></td>
            <td>
                <?php
                echo $row['m2_107'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m3_107'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_107'];
                ?>
            </td>
        </tr>
        <tr>
            <td>108</td>
            <td><?php
                echo $row['m1_108'];
                ?></td>
            <td>
                <?php
                echo $row['m2_108'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m3_108'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_108'];
                ?>
            </td>
        </tr>
        <tr>
            <td>109</td>
            <td><?php
                echo $row['m1_109'];
                ?></td>
            <td>
                <?php
                echo $row['m2_109'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m3_109'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_109'];
                ?>
            </td>
        </tr>
        <tr>
            <td>110</td>
            <td><?php
                echo $row['m1_110'];
                ?></td>
            <td>
                <?php
                echo $row['m2_110'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m3_110'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_110'];
                ?>
            </td>
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
            <td>
                <?php
                echo $row['m1_301'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_301'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_301'];
                ?>
            </td>
        </tr>
        <tr>
            <td>302</td>
            <td>
                <?php
                echo $row['m1_302'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_302'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_302'];
                ?>
            </td>
        </tr>
        <tr>
            <td>303</td>
            <td>
                <?php
                echo $row['m1_303'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_303'];
                ?>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>304</td>
            <td>
                <?php echo $row['m1_304'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_304'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_304'];
                ?>
            </td>
        </tr>
        <tr>
            <td>305</td>
            <td>
                <?php echo $row['m1_305'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_305'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_305'];
                ?>
            </td>
        </tr>
        <tr>
            <td>306</td>
            <td>
                <?php echo $row['m1_306'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_306'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_306'];
                ?> </td>
        </tr>
        <tr>
            <td>307</td>
            <td>
                <?php echo $row['m1_307'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_307'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_307'];
                ?> </td>
        </tr>
        <tr>
            <td>308</td>
            <td>
                <?php echo $row['m1_308'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_308'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_308'];
                ?>
            </td>
        </tr>
        <tr>
            <td>309</td>
            <td>
                <?php
                echo $row['m1_309'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_309'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_309'];
                ?>
            </td>
        </tr>
        <tr>
            <td>310</td>
            <td>
                <?php echo $row['m1_310'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_310'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_310'];
                ?>
            </td>
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
            <td>
                <?php echo $row['m1_401'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_401'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_401'];
                ?>
            </td>
        </tr>
        <tr>
            <td>402</td>
            <td>
                <?php echo $row['m1_402'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_402'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_402'];
                ?>
            </td>
        </tr>
        <tr>
            <td>403</td>
            <td>
                <?php echo $row['m1_403'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_403'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_403'];
                ?>
            </td>
        </tr>
        <tr>
            <td>404</td>
            <td>
                <?php echo $row['m1_404'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_404'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_404'];
                ?>
            </td>
        </tr>
        <tr>
            <td>405</td>
            <td>
                <?php echo $row['m1_405'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_405'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_405'];
                ?>
            </td>
        </tr>
        <tr>
            <td>406</td>
            <td>
                <?php echo $row['m1_406'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_406'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_406'];
                ?>
            </td>
        </tr>
        <tr>
            <td>407</td>
            <td>
                <?php echo $row['m1_407'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_407'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_407'];
                ?>
            </td>
        </tr>
        <tr>
            <td>408</td>
            <td>
                <?php
                echo $row['m1_408'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_408'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_408'];
                ?>
            </td>
        </tr>
        <tr>
            <td>409</td>
            <td>
                <?php
                echo $row['m1_409'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_409'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_409'];
                ?>
            </td>
        </tr>
        <tr>
            <td>410</td>
            <td>
                <?php
                echo $row['m1_410'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_410'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_410'];
                ?>
            </td>
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
            <td>
                <?php echo $row['m1_501'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_501'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_501'];
                ?>
            </td>
        </tr>
        <tr>
            <td>502</td>
            <td>
                <?php
                echo $row['m1_502'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_502'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_502'];
                ?>
            </td>
        </tr>
        <tr>
            <td>503</td>
            <td>
                <?php
                echo $row['m1_503'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_503'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_503'];
                ?>
            </td>
        </tr>
        <tr>
            <td>504</td>
            <td>
                <?php echo $row['m1_504'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_504'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_504'];
                ?>
            </td>
        </tr>
        <tr>
            <td>505</td>
            <td>
                <?php echo $row['m1_505'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_505'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_505'];
                ?>
            </td>
        </tr>
        <tr>
            <td>506</td>
            <td>
                <?php echo $row['m1_506'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_506'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_506'];
                ?>
            </td>
        </tr>
        <tr>
            <td>507</td>
            <td>
                <?php
                echo $row['m1_507'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_507'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_507'];
                ?>
            </td>
        </tr>
        <tr>
            <td>508</td>
            <td>
                <?php
                echo $row['m1_508'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_508'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_508'];
                ?>
            </td>
        </tr>
        <tr>
            <td>509</td>
            <td>
                <?php
                echo $row['m1_509'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_509'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_509'];
                ?>
            </td>
        </tr>
        <tr>
            <td>510</td>
            <td>
                <?php
                echo $row['m1_510'];
                ?>
            </td>
            <td>
                <?php
                echo $row['m2_510'];
                ?>
            </td>
            <td>
                <?php
                echo $row['s_510'];
                ?>
            </td>
        </tr>
    </table>
</body>

</html>