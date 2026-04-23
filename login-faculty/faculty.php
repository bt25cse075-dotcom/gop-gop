<?php session_start();
$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$role='student';
$result = mysqli_query($conn, "SELECT * FROM login WHERE role = '$role'");
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="faculty.css">
</head>
<body>
    <h1> WELCOME, <?php
        echo $_SESSION["name"];
        ?></h1>
        <h1 class="heading">students data</h1>
        <table border="1">
   <tr>
      <th>SR NO</th>
      <th>NAME</th>  
      <th>ROLE</th> 
       <th>EMAIL</th>
   </tr>
    
<?php 


while ($row = mysqli_fetch_assoc($result)){
    ?> 
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['role']; ?></td>
        <td><?php echo $row['email']; ?></td>
    </tr>
    
<?php } ?>
    </table>
</body>
</html>