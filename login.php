
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

$email =$_POST["loginemail"];
$password = $_POST["loginpw"];

//dencrypting the password
$password = md5($password);
$query = "SELECT * FROM User WHERE email = '".$_POST['loginemail']."' AND password = '".$password."';";
$result = $conn->query($query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 0){
        echo '<script type="text/javascript">'; 
        echo 'alert("Invalid User!");'; 
        echo 'window.location.href = "main.html";';
        echo '</script>';
    }
    else{
        echo"<h1 style='color:white'>Welcome, ". $row["name"]."<br><br></h1>";
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
         }
        }
    
$conn->close();
?>

