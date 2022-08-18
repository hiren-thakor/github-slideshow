<?php
    include 'connection.php';

    $sql = "CREATE TABLE customers(
        id INT(5) PRIMARY KEY AUTO_INCREMENT,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL UNIQUE KEY,
        country_code INT(3) NOT NULL
        )";
    
    if(mysqli_query($connection,$sql)){
        echo "Query Run successfully";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
?>