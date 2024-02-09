
<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `curd` where id=$id";
        $conn->query($sql);
    }
    header('location:/curdinphp/index.php');
    exit;
?>


