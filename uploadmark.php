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

    $conn = mysqli_connect("localhost", "root", "", "hostel");
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
                        $rowData[] = mysqli_real_escape_string($conn, $value); // Sanitize user input
                    }
                    
                    // Assuming 'pin' is a column in your table
                    $pin = mysqli_real_escape_string($conn, $rowData[0]); // Sanitize user input
                    
                    // Check if a record with the same 'pin' exists in the table
                    $checkSql = "SELECT COUNT(*) AS count FROM _marks WHERE pin = '$pin'";
                    $result = mysqli_query($conn, $checkSql);
                    $rowCount = mysqli_fetch_assoc($result)['count'];
                    
                    if ($rowCount > 0) {
                        // Update the existing record
                        $updateSql = "UPDATE _marks 
                                      SET `101` = '$rowData[1]', `102` = '$rowData[2]', `103` = '$rowData[3]', `104` = '$rowData[4]', `105` = '$rowData[5]', `106` = '$rowData[6]'
                                      WHERE pin = '$pin'";
                        
                        if (mysqli_query($conn, $updateSql)) {
                            echo "Record with PIN $pin updated successfully.<br>";
                        } else {
                            echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                        }
                    } else {
                        // Insert a new record
                        $insertSql = "INSERT INTO _marks (pin, `101`, `102`, `103`, `104`, `105`, `106`) 
                                      VALUES ('$pin', '$rowData[1]', '$rowData[2]', '$rowData[3]', '$rowData[4]', '$rowData[5]', '$rowData[6]')";
                        
                        if (mysqli_query($conn, $insertSql)) {
                            echo "New record with PIN $pin inserted successfully.<br>";
                        } else {
                            echo "Error inserting new record with PIN $pin: " . mysqli_error($conn) . "<br>";
                        }
                    }
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