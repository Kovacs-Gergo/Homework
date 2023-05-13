<?php
session_start();
    if(isset($_POST['email']) && isset($_POST['textarea'])){
        try {
            // Connecting
            $dbh = new PDO('mysql:host=localhost;dbname=databaseh', 'databaseh', 'MarvelHomework2023',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
            

            if(isset($_SESSION['user'])){
                $sqlInsert = "insert into messages(id, user_name, e_mail, textarea)
                values(0, :username,  :email , :textarea)";
                $stmt = $dbh->prepare($sqlInsert);
                $stmt->execute(array(':username' => $_SESSION['user'], ':email' => $_POST['email'], ':textarea' => $_POST['textarea'])); 
            }else{
                $sqlInsert = "insert into messages(id, user_name, e_mail, textarea)
                values(0, :username,  :email, :textarea)";
                $stmt = $dbh->prepare($sqlInsert); 
                $stmt->execute(array(':username' => "Guest", ':email' => $_POST['email'], ':textarea' => $_POST['textarea']));   
            }
        }
        catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($message)) { ?>
            <h1><?php $message ?></h1>
            <?php if($again) { ?>
                
            <?php } ?>
        <?php } ?>

        <?php
    // server side checking example
    $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
    if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
    {
      exit("Wrong email: ".$_POST['email']);
    }
    
    if(!isset($_POST['textarea']) || empty($_POST['textarea']))
    {
      exit("Wrong text: ".$_POST['textarea']);
    }
    
    echo "<h3>The received results:</h3>";
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    echo '<a href="../?page=messages">Go to the Messages</a>';
    ?>
    </body>  
</html>