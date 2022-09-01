<?php include ("db.php")
/* Test index
echo "Hello world"
*/
?>
<?php include ("includes/header.php") ?>

<div class= "container p-4">
    <div class= "row" > 
        <div class="col-md-4">

            <?php if (isset($_SESSION["message"])){?>
                <div class="alert alert-<?= $_SESSION["message_type"] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION["message"] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();} ?>

            <div class="card card-body">
                <!-- This is where info is send -->
                <form action="create.php" method= "POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control"
                        placeholder="Task Title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control"
                        placeholder="Description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" 
                    name="save_task" value="Save Task">
                </form>

            </div>

        </div>
        <div class="col-md-8">

        </div>
    </div>

</div>


<!-- This are like traits -->    
<?php include ("includes/footer.php") ?>