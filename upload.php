<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// check if image file is a csv
if(isset($_POST["submit"])) {
  $check = mime_content_type($_FILES["fileToUpload"]["tmp_name"]);
  if($check == "text/csv") {
    echo "File is a csv - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not a csv.";
    $uploadOk = 0;
  }
}
?>