<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=databaseh', 'databaseh','MarvelHomework2023',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $pdo->query('SET NAMES utf8 COLLATE utf8_general_ci');
    $statement = "Select id, user_name, textarea, write_date From messages order by id desc";
    $result = $pdo->query($statement);

    foreach ($result as $row) print  '<div align="center">'.$row['id'] . ", Username: " .'<span class="mesname">'.$row['user_name'].'</span></div><div align="center">'. "<span id='mes'>Message</span>" .'<textarea class="mestext" disabled>'.$row['textarea'].'</textarea><br>'.$row['write_date'].'<br><br></div>';
?>