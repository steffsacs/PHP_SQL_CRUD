<?php
include ("db.php");

// from the POST call by the name of the button 
if(isset($_POST["save_task"])){
    $title= $_POST["title"];
    $description= $_POST["description"];

    $query= "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
    $result=mysqli_query($conn, $query);
    if (!$result){
        die("Query failed");
    }

    /* Useful for debug but not to keep IRL
    echo $title;
    echo " ";
    echo $description;
    echo " ";
    echo "Saved";
    */

    /*I am saving a message in my session*/
    $_SESSION["message"]= 'Task saved successfully';
    $_SESSION["message_type"]= 'success';
    header("Location: index.php");


}
?>