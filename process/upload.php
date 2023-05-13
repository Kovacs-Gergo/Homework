<?php
session_start();
$messages = array();
include("../includes/galleryupload.php");
$FOLDER='../images/upload/';
if(isset($_POST['send'])){
    foreach($_FILES as $file){
        if($file['error']==4);
        else if(!in_array($file['type'], $MEDIATYPES))
        $messages[] = "The type is not correct: ".$file['name'];
        else if(!(isset($_SESSION['user']))) $messages[]="Not logged in";
        elseif($file['error'] == 1 or $file['error'] == 2 or $file['size']>$MAXSIZE)
        $messages[] = "Too big file: ".$file['name'];
        else{
            $target_dir = $FOLDER.strtolower($file['name']);
            if(file_exists($target_dir))
                $messages[] = "Already exist: ".$file['name'];
            else{
                move_uploaded_file($file['tmp_name'], $target_dir);
                $messages[] = 'Ok: '.$file['name'];
            }
        }
    }
} 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gallery</title> 
    <style>
        img{
            width: 100px;
            height: 300px;
        }
    </style>
</head>
<body bgcolor="#494b49">
    <h1>Uploading to the gallery</h1>
    <?php
        if(!empty($messages)){
            echo '<div>';
            foreach($messages as $m)
                echo "<div>$m</div>";
            echo '</div>';
        }
    ?>
    <a href="../index.php?page=gallery">Go back to the Gallery</a>
</body>
</html>