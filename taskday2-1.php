<?php

$link = mysqli_connect("db", "MYSQL_USER", "MYSQL_PASSWORD","MYSQL_DATABASE");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
// $sql = "CREATE TABLE countries(

//     country_code varchar(10) NOT NULL,
//     country_name varchar(20) NOT NULL
// )";

//     if($stmt= mysqli_query($link, $sql)){
//         echo "Table created successfully.";
//     } else{
//         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//     }

if($stmt = mysqli_prepare($link, $sql)){   

         mysqli_stmt_bind_param($stmt, "sss", $country_code, $country_name);

            $records = array(
            DK => "danmark",
            DE => "germmany",
            SE => "Sweden",
            US => "United States",
            mysqli_stmt_execute($stmt)

        );
   
        if(mysqli_stmt_execute($stmt)){
            echo "Data inserted successfully.";
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
       }     
    }else{
        echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
    }
     
// Close connection
mysqli_close($link); 
?>