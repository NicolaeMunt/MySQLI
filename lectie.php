<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <?php
    $servername= "localhost";
    $username = "root";
    $password= "";
    $db = "examplephp";
    $conn = mysqli_connect($servername,$username,$password,$db);
    if (!$conn) {
        die("Connection failed:" . mysqli_connect_error());
    }
    echo "Connected succesfully";

    $sql = "CREATE TABLE MyStudents (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50)
    )";

       if(mysqli_query($conn,$sql)) {
        echo "Table MyStudents created succesfully";
       } else {
             echo "Error creating table:" . mysqli_error($conn);
       }
    ?>
    
</body>
</html>