<?php
    include 'connection.php';

    $sql = "ALTER TABLE customers
    ADD FOREIGN KEY (country_code) REFERENCES countries(country_code);
        ";
    
    if(mysqli_query($connection,$sql)){
        echo "Query Run successfully";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
?>