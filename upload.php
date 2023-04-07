<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_FILES['csvfile']['error'] == 0) {
        $filename = $_FILES['csvfile']['tmp_name'];
        $handle = fopen($filename, "r");

        $header = true;
        $data = [];

        // reads submitted csv file
        while (($row = fgetcsv($handle, 1000, ",")) !== false) {
            if ($header) {
                $header = false;
            } else {
                $data[] = $row;
            }
        }

        fclose($handle);

        // calculates average of each column
        $averages = array_fill(0, count($data[0]), 0);
        foreach ($data as $row) {
            foreach ($row as $index => $value) {
                $averages[$index] += $value;
            }
        }
        $num_rows = count($data);
        foreach ($averages as &$avg) {
            $avg = $avg / $num_rows;
        }

        // returns average of each column as json
        echo json_encode($averages);
    } else {
        echo "Error uploading file.";
    }
}
?>