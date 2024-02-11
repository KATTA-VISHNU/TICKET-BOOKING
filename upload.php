<!DOCTYPE html>
<html>
    <head>
        <title>FILE_UPLOAD</title>
        </head>
        <body>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
<?php
if (isset($_POST['submit'])){
    $file=$_FILES['file']; //used to get the information about the file
    print_r($file);
 
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','png','jpeg');
    if(in_array($fileActualExt,$allowed))
    {
        if ($fileError === 0){
            if($fileSize<5*1024*1024){
                $filenewname=uniqid('',true).".".$fileActualExt;
                $fileDestination='uploads/'.$filenewname;

                move_uploaded_file($fileTmpName,$fileDestination);
                {
                    echo "not moved";
                }
                
            }
            else{
                echo "your file is so large";
            }

        }
        else{
            echo "there was an hyyerror uploading your file";
        }


    }
    else{
        echo "you cannot upload this type of file";
    }

}

?>
 <a download="<?php echo $name ?>" href="uploads/<?php echo $name ?>">download </a>


</body>
    </html>
