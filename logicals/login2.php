<?php
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        try {
            // Connecting
            $dbh = new PDO('mysql:host=localhost;dbname=databaseh', 'databaseh', 'MarvelHomework2023',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
            
            // Search user
            $sqlSelect = "select id, first_name, last_name, e_mail from users where user_name = :username and password = sha1(:password) and e_mail = :email";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':username' => $_POST['username'], ':password' => $_POST['password'], ':email' => $_POST['email']));
            $row = $sth->fetch(PDO::FETCH_ASSOC);
        
            if($row){
                $_SESSION['fn'] = $row['first_name'];
                $_SESSION['ln'] = $row['last_name'];
                $_SESSION['user'] = $_POST['username'];
                $_SESSION['mail'] = $_POST['email'];
            }
        }
        catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
?>