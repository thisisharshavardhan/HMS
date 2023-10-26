<?php
    session_start();
    if (!(isset($_SESSION['Logged_in']))) {
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
            margin-bottom: 20px;
        }
        label {
            display: inline-block;
            margin-right: 10px;
            font-weight: bold;
        }
        select {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: #f1f1f1;
            font-size: 16px;
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="file"] {
            margin-top: 10px;
        }
    </style>
    <!-- <script>
        function updateExamOptions() {
            var yearSelect = document.getElementById("year");
            var examSelect = document.getElementById("exam");
            examSelect.innerHTML = "";
            var mid1Option = document.createElement("option");
            mid1Option.value = "mid1";
            mid1Option.text = "Mid1";
            examSelect.add(mid1Option);
            var mid2Option = document.createElement("option");
            mid2Option.value = "mid2";
            mid2Option.text = "Mid2";
            examSelect.add(mid2Option);
            var semOption = document.createElement("option");
            semOption.value = "sem";
            semOption.text = "Sem";
            examSelect.add(semOption);
            if (yearSelect.value === "2") {
                examSelect.add(mid1Option);
                examSelect.add(mid2Option);
                examSelect.add(semOption);
            } else if (yearSelect.value === "3") {
                examSelect.add(mid1Option);
                examSelect.add(mid2Option);
                examSelect.add(semOption);
            } if (yearSelect.value === "1") {
            var mid3Option = document.createElement("option");
            mid3Option.value = "mid3";
            mid3Option.text = "Mid3";
            examSelect.add(mid3Option);
        }
        }
        updateExamOptions();
    </script> -->
</head>
<body>
<form method="post" enctype="multipart/form-data" action="uploadmark.php">
        <label for="year">Year:</label>
        <select id="year" name="year" >
            <option value="1">1st Year</option>
            <option value="2">2nd Year ( 3rd Sem )</option>
            <option value="4">2nd Year ( 4rd Sem )</option>
            <option value="3">3rd Year</option>
        </select>
        <label for="exam">Exam:</label>
        <select id="exam" name="exam">
            <option value="mid1">Mid 1</option>
            <option value="mid2">Mid 2</option>
            <option value="mid3">Mid 3</option>
            <option value="sem">Sem</option>
        </select>
        <input type="file" name="file">
        <input type="submit" value="Submit">
    </form>
    <p>Note: make sure that the excel file have pin number in first column and all subjects in order</p>
</body>
</html>