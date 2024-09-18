<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

    <?php
        // Enable error reporting
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        Upload the file:
        <input type="file" name="myFile" id="myFile">
        <input type="submit" value="Upload">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_FILES["myFile"]) && $_FILES["myFile"]["error"] == 0) {
                $file_name = basename($_FILES["myFile"]["name"]);
                $file_size = $_FILES["myFile"]["size"];
                $file_tmp_name = $_FILES["myFile"]["tmp_name"];
                $file_type = $_FILES["myFile"]["type"];

                echo "File Name: " . $file_name . "<br>";
                echo "File Size: " . $file_size . " bytes<br>";
                echo "File Type: " . $file_type . "<br>";

                // Use absolute path to avoid issues
                $upload_dir =  "Directory";

                if (!is_dir($upload_dir)) {
                    if (mkdir($upload_dir, 0755)) {
                        echo "Directory Created: " . $upload_dir . "<br>";
                    } else {
                        echo "Failed to Create Directory: " . $upload_dir . "<br>";
                    }
                } else {
                    echo "Directory already exists.<br>";
                }

                if (move_uploaded_file($file_tmp_name, "Directory/". $file_name)) {
                    echo "File successfully moved to directory<br>";
                } else {
                    echo "Failed to move file<br>";
                }
            } else {
                echo "Error: " . $_FILES["myFile"]["error"] . "<br>";
            }
        }
    ?>
</body>
</html>
