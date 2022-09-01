<?php
    include("db.php");

    if(isset($_GET["id"])){
        $id= $_GET["id"];

        $query= "SELECT * from tasks WHERE id = $id";
        $result=mysqli_query($conn, $query);

        if (mysqli_num_rows($result)==1){
            $row= mysqli_fetch_array($result);
            $title= $row["title"];
            $description= $row["description"];
            /*
            echo "You can edit";
            echo "\n";
            echo $title;
            */
        }

    }
    if(isset ($_POST["update"])){ // update is the name of the button 
        
        $title= $_POST["title"];
        $description= $_POST["description"];

        $query= "UPDATE tasks set title = '$title', description = '$description' WHERE id = $id";
        $result=mysqli_query($conn, $query);

        if (!$result){
            die("Query failed");
        }
        
        $_SESSION["message"]= "Task Successfully updated";
        $_SESSION["message_type"]= "warning";
        header("Location: index.php");

    }
?>

<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="update.php?id=<?php echo $id?>" method="POST" >
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title?>"
                        class="form-control" placeholder="Update title">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="3" class= "form-control"
                        placeholder="Update Description">
                            <?php echo $description?>
                    </textarea>
                    </div>
                    <button class= "btn btn-success" name= "update">
                        Update
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>