<?php include("db.php");

if(isset($_GET["id"])){
    $id= $_GET["id"];

    $query= "DELETE from tasks WHERE id = $id";
    $result=mysqli_query($conn, $query);

    if (!$result){
        die("Query failed");
    }

    $_SESSION["message"]= "Task Successfully deleted";
    $_SESSION["message_type"]= "danger";

    header("Location: index.php");



}
?> 