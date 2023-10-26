<?php
session_start();
if (!(isset($_SESSION['Logged_in']))) {
    header("location: index.php");
}
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$year = $_POST['year'];
$exam = $_POST['exam'];
$excelfile = $_FILES['file']['tmp_name'];
$spreadsheet = IOFactory::load($excelfile);
$worksheet = $spreadsheet->getActiveSheet();

$conn = mysqli_connect("localhost", "root", "", "hostel");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($year == 1) {
    if ($exam == "mid1") {
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
                                  SET `m1_101` = '$rowData[1]', `m1_102` = '$rowData[2]', `m1_103` = '$rowData[3]', `m1_104` = '$rowData[4]', `m1_105` = '$rowData[5]', `m1_106` = '$rowData[6]', `m1_107` = '$rowData[7]', `m1_108` = '$rowData[8]', `m1_109` = '$rowData[9]', `m1_110` = '$rowData[10]'
                                  WHERE pin = '$pin'";

                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br   >";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    } else if ($exam == "mid2") {
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
                                      SET `m2_101` = '$rowData[1]', `m2_102` = '$rowData[2]', `m2_103` = '$rowData[3]', `m2_104` = '$rowData[4]', `m2_105` = '$rowData[5]', `m2_106` = '$rowData[6]', `m2_107` = '$rowData[7]', `m2_108` = '$rowData[8]', `m2_109` = '$rowData[9]', `m2_110` = '$rowData[10]'
                                      WHERE pin = '$pin'";
                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    } else if ($exam == "mid3") {
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
                                      SET `m3_101` = '$rowData[1]', `m3_102` = '$rowData[2]', `m3_103` = '$rowData[3]', `m3_104` = '$rowData[4]', `m3_105` = '$rowData[5]', `m3_106` = '$rowData[6]', `m3_107` = '$rowData[7]', `m3_108` = '$rowData[8]', `m3_109` = '$rowData[9]', `m3_110` = '$rowData[10]'
                                      WHERE pin = '$pin'";

                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    } else if ($exam == "sem") {
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
                                      SET `s_101` = '$rowData[1]', `s_102` = '$rowData[2]', `s_103` = '$rowData[3]', `s_104` = '$rowData[4]', `s_105` = '$rowData[5]', `s_106` = '$rowData[6]', `s_107` = '$rowData[7]', `s_108` = '$rowData[8]', `s_109` = '$rowData[9]', `s_110` = '$rowData[10]'
                                      WHERE pin = '$pin'";
                $result = mysqli_query($conn, $updateSql);
                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    }
} else if ($year == 2) {
    if ($exam == "mid1") {
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
                                      SET `m1_301` = '$rowData[1]', `m1_302` = '$rowData[2]', `m1_303` = '$rowData[3]', `m1_304` = '$rowData[4]', `m1_305` = '$rowData[5]', `m1_306` = '$rowData[6]', `m1_307` = '$rowData[7]', `m1_308` = '$rowData[8]', `m1_309` = '$rowData[9]', `m1_310` = '$rowData[10]'
                                      WHERE pin = '$pin'";

                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br   >";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    } else if ($exam == "mid2") {
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
                                      SET `m2_301` = '$rowData[1]', `m2_302` = '$rowData[2]', `m2_303` = '$rowData[3]', `m2_304` = '$rowData[4]', `m2_305` = '$rowData[5]', `m2_306` = '$rowData[6]', `m2_307` = '$rowData[7]', `m2_308` = '$rowData[8]', `m2_309` = '$rowData[9]', `m2_310` = '$rowData[10]'
                                      WHERE pin = '$pin'";

                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    } else if ($exam == "sem") {
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
                                      SET `s_301` = '$rowData[1]', `s_302` = '$rowData[2]', `s_303` = '$rowData[3]', `s_304` = '$rowData[4]', `s_305` = '$rowData[5]', `s_306` = '$rowData[6]', `s_307` = '$rowData[7]', `s_308` = '$rowData[8]', `s_309` = '$rowData[9]', `s_310` = '$rowData[10]'
                                      WHERE pin = '$pin'";

                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    }
} else if ($year == 3) {
    if ($exam == "mid1") {
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
                                      SET `m1_501` = '$rowData[1]', `m1_502` = '$rowData[2]', `m1_503` = '$rowData[3]', `m1_504` = '$rowData[4]', `m1_505` = '$rowData[5]', `m1_506` = '$rowData[6]', `m1_507` = '$rowData[7]', `m1_508` = '$rowData[8]', `m1_509` = '$rowData[9]', `m1_510` = '$rowData[10]'
                                      WHERE pin = '$pin'";

                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br   >";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    } else if ($exam == "mid2") {

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
                                      SET `m2_501` = '$rowData[1]', `m2_502` = '$rowData[2]', `m2_503` = '$rowData[3]', `m2_504` = '$rowData[4]', `m2_505` = '$rowData[5]'
                                      , `m2_506` = '$rowData[6]', `m2_507` = '$rowData[7]', `m2_508` = '$rowData[8]', `m2_509` = '$rowData[9]', `m2_510` = '$rowData[10]'
                                      WHERE pin = '$pin'";

                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    } else if ($exam == "sem") {

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
                                      SET `s_501` = '$rowData[1]', `s_502` = '$rowData[2]', `s_503` = '$rowData[3]', `s_504` = '$rowData[4]', `s_505` = '$rowData[5]'
                                      , `s_506` = '$rowData[6]', `s_507` = '$rowData[7]', `s_508` = '$rowData[8]', `s_509` = '$rowData[9]', `s_510` = '$rowData[10]'
                                      WHERE pin = '$pin'";
                $result = mysqli_query($conn, $updateSql);
                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    }
} elseif ($year == 4) {
    if ($exam == "mid1") {
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
                SET `m1_401` = '$rowData[1]', `m1_402` = '$rowData[2]', `m1_403` = '$rowData[3]', `m1_404` = '$rowData[4]', `m1_405` = '$rowData[5]', `m1_406` = '$rowData[6]', `m1_407` = '$rowData[7]', `m1_408` = '$rowData[8]', `m1_409` = '$rowData[9]', `m1_410` = '$rowData[10]'
                WHERE pin = '$pin'";
                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    } else if ($exam == "mid2") {
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
                SET `m2_401` = '$rowData[1]', `m2_402` = '$rowData[2]', `m2_403` = '$rowData[3]', `m2_404` = '$rowData[4]', `m2_405` = '$rowData[5]', `m2_406` = '$rowData[6]', `m2_407` = '$rowData[7]', `m2_408` = '$rowData[8]', `m2_409` = '$rowData[9]', `m2_410` = '$rowData[10]'
                WHERE pin = '$pin'";
                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    } else if ($exam == "sem") {
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
                SET `s_401` = '$rowData[1]', `s_402` = '$rowData[2]', `s_403` = '$rowData[3]', `s_404` = '$rowData[4]', `s_405` = '$rowData[5]', `s_406` = '$rowData[6]', `s_407` = '$rowData[7]', `s_408` = '$rowData[8]', `s_409` = '$rowData[9]', `s_410` = '$rowData[10]'
                WHERE pin = '$pin'";
                if (mysqli_query($conn, $updateSql)) {
                    echo "Record with PIN $pin updated successfully.<br>";
                } else {
                    echo "Error updating record with PIN $pin: " . mysqli_error($conn) . "<br>";
                }
            } else {
                // Skip inserting new records
                echo "Record with PIN $pin not found in the database. Skipping insertion.<br>";
            }
        }
    }
}
