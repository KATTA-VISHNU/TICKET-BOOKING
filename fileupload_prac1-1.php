<html>

<head>

</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="img" />
        <button type="submit">upload</button>
    </form>




    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ((isset($_FILES["img"])) && ($_FILES["img"]["error"] == 0)) {
            $allowed = array("jpg", "jpeg", "png");

            $name = $_FILES["img"]["name"];
            $type = $_FILES["img"]["type"];
            $size = $_FILES["img"]["size"];
            $tmpname = $_FILES["img"]["tmp_name"];

            echo "$name";
            echo "$type";
            echo "$size";


            $ext = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
            if (!in_array($ext, $allowed)) {
                echo "please select the jpg jpeg png format only";
            }
            $maxsize = 1024 * 1024 * 5;
            if ($size > $maxsize) {
                echo "select the image with size less than 5 MB";
            }

            if (in_array($ext,$allowed)) {
                if (move_uploaded_file($tmpname, "file_moves/" . $name)) {
                    echo "uploaded successfully";
                } else {
                    echo "could not upload file";
                }
            } else {
                echo "type not matched";
            }
        } else {
            echo "error while uploading the file";
        }
    } else {
        echo "error";
    }

    ?>


    <a download="<?php echo $name ?>" href="file_moves/<?php echo $name ?>">download </a>
</body>

</html>