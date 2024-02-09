<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
</tr>
</table>
<?php
$conn = mysql_connection("localhost" , "root", "", "mydb","3308");
if($conn-> connect_error){
    die("connection failed:". $conn-> connect_error);
}
$sql="SELECT Id , Name , Email,Phone_no from curd";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["phone"]."</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 result";
}

$conn-> close();
?>

    
</body>
</html>