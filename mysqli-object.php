<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      
            echo "Id: {$row["id"]} -
            Name: {$row["student_name"]}  
          Age: {$row["age"]}\n" . "<br>";
      
    }
    }else{
        echo "No result Found";
    
}

$conn->close();
?>