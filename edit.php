<?php
include('connection.php');
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Edit Student</title>
</head>

<body class="container">
    <h1 style="text-align: center;">Edit Student</h1> <br /><br />

    <form action="edit.php?id=<?php echo $id ?>" method="POST" class="form">
        <!-- <input type="text" name="std_roll" class="form-control" placeholder="Enter Roll Number" /> <br /> -->
        <input type="text" name="std_nameUpdate" class="form-control" placeholder="Enter Student name" /> <br />
        <input type="text" name="std_emailUpdate" class="form-control" placeholder="Enter Student email" /> <br />
        <input type="submit" name="update" value="Edit Record" class="btn btn-success col-sm-2" /> <br />
    <!-- PHP STARTING FOR UPDATION -->
    </form>

    
    <?php 
    $update_query = "";
    if (isset($_POST['update'])) {
        $nameUpdate     = $_POST['std_nameUpdate'];
        $emailUpdate    = $_POST['std_emailUpdate'];
        // echo $nameUpdate;
    
        $update_query = "UPDATE students SET std_name = '$nameUpdate', std_email = '$emailUpdate' WHERE std_id = '$id'";
        $update_result = mysqli_query($con, $update_query);

        if($update_result) {
            echo '<br /><p class="text text-success">Record updated</p>';
            // header('index.php');
        }
        else {
            echo '<br /><p class="text text-danger">Record was not updated, please try again</p>';
        }
    }
    // print_r($update_query);
    ?>
</body>

</html>