<?php
include 'db.php';

if (isset($_POST["Import"])) {
    $filename = $_FILES["file"]["tmp_name"];
    $file_ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

    // Check if file size is greater than 0 and it's a CSV or Excel file
    if ($_FILES["file"]["size"] > 0 && in_array($file_ext, array("csv", "xlsx", "xls"))) {
        if ($file_ext == "csv") {
            // For CSV files
            if (($handle = fopen($filename, "r")) !== FALSE) {
                while (($emapData = fgetcsv($handle, 10000, ",")) !== FALSE) {
                    $id = $emapData[0];
                    $name = $emapData[1];
                    $date = date('Y-m-d H:i:s', strtotime($emapData[2]));
                    $emotion = $emapData[3];
                    $test_score = $emapData[4];
                    $analysis = $emapData[5];

                    $sql = "INSERT INTO emotion_data (ID, NAME, DATE, EMOTION, TEST_SCORE, ANALYSIS) 
                            VALUES ('$id', '$name', '$date', '$emotion', '$test_score', '$analysis')";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                        echo "<script type=\"text/javascript\">
                                alert(\"Invalid File: Please Upload CSV File.\");
                                window.location = \"index.php\";
                              </script>";
                        die();
                    }
                }
                fclose($handle);
                echo "<script type=\"text/javascript\">
                        alert(\"CSV File has been successfully Imported.\");
                        window.location = \"index.php\";
                      </script>";
            } else {
                echo "<script type=\"text/javascript\">
                        alert(\"Error opening CSV file.\");
                        window.location = \"index.php\";
                      </script>";
            }
        } elseif ($file_ext == "xlsx" || $file_ext == "xls") {
            // For Excel files using PhpSpreadsheet library
            require 'vendor/autoload.php'; // Make sure you have installed PhpSpreadsheet via Composer
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filename);
            $worksheet = $spreadsheet->getActiveSheet();

            foreach ($worksheet->getRowIterator() as $row) {
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(false); // This loops through all cells,
                $data = [];
                foreach ($cellIterator as $cell) {
                    $data[] = $cell->getValue();
                }
                if ($row->getRowIndex() > 1) { // Skip the header row
                    $id = $data[0];
                    $name = $data[1];
                    $date = date('Y-m-d H:i:s', strtotime($data[2]));
                    $emotion = $data[3];
                    $test_score = $data[4];
                    $analysis = $data[5];

                    $sql = "INSERT INTO emotion_data (ID, NAME, DATE, EMOTION, TEST_SCORE, ANALYSIS) 
                            VALUES ('$id', '$name', '$date', '$emotion', '$test_score', '$analysis')";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                        echo "<script type=\"text/javascript\">
                                alert(\"Invalid File: Please Upload Excel File.\");
                                window.location = \"index.php\";
                              </script>";
                        die();
                    }
                }
            }
            echo "<script type=\"text/javascript\">
                    alert(\"Excel File has been successfully Imported.\");
                    window.location = \"index.php\";
                  </script>";
        }
        mysqli_close($conn);
    } else {
        echo "<script type=\"text/javascript\">
                alert(\"Invalid File: Please Upload CSV or Excel File.\");
                window.location = \"index.php\";
              </script>";
    }
}
?>
