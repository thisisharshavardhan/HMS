<?php

    session_start();
    if (!(isset($_SESSION['Logged_in']))) {
        header("location: index.php");
    }
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $exam = $_POST['exam'];
    $excelfile = $_FILES['file']['tmp_name'];
    $spreadsheet = IOFactory::load($excelfile);
    $worksheet = $spreadsheet->getActiveSheet();

    $conn = mysqli_connect("localhost", "root", "", "student");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    if($year == 1){
        if($exam == "mid1"){
            if($branch == "CME"){
                foreach ($worksheet->getRowIterator() as $row) {
                    $rowData = [];
                    foreach ($row->getCellIterator() as $cell) {
                        $value = $cell->getValue();
                        $rowData[] = $value;
                    }
                    $sql = "INSERT INTO _marks (101,102,103,104,105,106) VALUES ('$rowData[1]', '$rowData[2]', '$rowData[3]', '$rowData[4]', '$rowData[5]', '$rowData[6]') where pin = $rowData[0]" ;
                }
            }
            else if($branch == "ECE"){

            }
            else if($branch == "EEE"){

            }
            else if($branch == "M"){

            }
            else if($branch == "C"){

            }
            else if($branch == "AIML"){

            }
        }
        else if($exam == "mid2"){
            if($branch == "CME"){

            }
            else if($branch == "ECE"){

            }
            else if($branch == "EEE"){

            }
            else if($branch == "M"){

            }
            else if($branch == "C"){

            }
            else if($branch == "AIML"){

            }
        }
        else if($exam == "mid3"){
            if($branch == "CME"){

            }
            else if($branch == "ECE"){

            }
            else if($branch == "EEE"){

            }
            else if($branch == "M"){

            }
            else if($branch == "C"){

            }
            else if($branch == "AIML"){

            }
        }
        else if($exam == "sem"){
            if($branch == "CME"){

            }
            else if($branch == "ECE"){

            }
            else if($branch == "EEE"){

            }
            else if($branch == "M"){

            }
            else if($branch == "C"){

            }
            else if($branch == "AIML"){

            }
        }
    }
    else if($year == 2){
        if($exam == "mid1"){
            if($branch == "CME"){

            }
            else if($branch == "ECE"){

            }
            else if($branch == "EEE"){

            }
            else if($branch == "M"){

            }
            else if($branch == "C"){

            }
            else if($branch == "AIML"){

            }
        }
        else if($exam == "mid2"){
            if($branch == "CME"){

            }
            else if($branch == "ECE"){

            }
            else if($branch == "EEE"){

            }
            else if($branch == "M"){

            }
            else if($branch == "C"){

            }
            else if($branch == "AIML"){

            }
        }
        else if($exam == "sem"){
            if($branch == "CME"){

            }
            else if($branch == "ECE"){

            }
            else if($branch == "EEE"){

            }
            else if($branch == "M"){

            }
            else if($branch == "C"){

            }
            else if($branch == "AIML"){

            }
        }
    }
    else if($year == 3){
        if($exam == "mid1"){
            if($branch == "CME"){

            }
            else if($branch == "ECE"){

            }
            else if($branch == "EEE"){

            }
            else if($branch == "M"){

            }
            else if($branch == "C"){

            }
            else if($branch == "AIML"){

            }
        }
        else if($exam == "mid2"){
            if($branch == "CME"){

            }
            else if($branch == "ECE"){

            }
            else if($branch == "EEE"){

            }
            else if($branch == "M"){

            }
            else if($branch == "C"){

            }
            else if($branch == "AIML"){

            }
        }
        else if($exam == "sem"){
            if($branch == "CME"){

            }
            else if($branch == "ECE"){

            }
            else if($branch == "EEE"){

            }
            else if($branch == "M"){

            }
            else if($branch == "C"){

            }
            else if($branch == "AIML"){

            }
        }
    }
?>