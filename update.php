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
    </style>
</head>
<body>
<form>
        <label for="year">Year:</label>
        <select id="year" name="year">
            <option value="1">1st Year</option>
            <option value="2">2nd Year</option>
            <option value="3">3rd Year</option>
        </select>
        <label for="exam">Exam:</label>
        <select id="exam" name="exam">
            <option value="mid1">Mid 1</option>
            <option value="mid2">Mid 2</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>