<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="lab3";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name= $_POST["name"];
$email =$_POST["email"];
$password = $_POST["password"];
$timestamp = date("Y-m-d H:i:s");

//$sql = "INSERT INTO User  (ID,email,name,password,registeration_date)
//VALUES ('".NULL."','".$email."', '".$name."','".$password."','".$timestamp."')";

//$sql = "INSERT INTO `user` (`ID`,`email`,`name`,`password`,`registeration_date`) VALUES
//('NULL','$email','$name','$password','$timestamp')";


//encrypt the password 
$password = md5($password);
$sql = "INSERT INTO User (email,name,password)
        VALUES('$email','$name','$password')";

$query = "SELECT * FROM User WHERE email = '".$_POST['email']."';";
$result = $conn->query($query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_num_rows($result) > 0){
    echo '<script type="text/javascript">'; 
    echo 'alert("Email already exists!");'; 
    echo 'window.location.href = "index2.html";';
    echo '</script>';}
else{
    if ($conn->query($sql) === TRUE) {
        echo"<h1 style='color:white'>Welcome, ". $name."<br><br></h1>";
        $query2 = "SELECT * FROM Department;";
        $result2 = $conn->query($query2);
        echo "<table class='table table-dark' border='1'>
         <tr>
         <th>Department Name</th>
         <th>Description</th>
         </tr>";
         if(mysqli_num_rows($result2) >0){
            while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td>" . $row2['name'] . "</td>";
                echo "<td>" . $row2['description'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
         } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
  }


$conn->close();
?>
