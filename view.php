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
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>View Student</title>
</head>
<body class="container">
    <center><div class="heading"><h3>View User</h3> </div></center>
    <?php
        $sql = "SELECT * FROM students WHERE std_id = '$id'";
        $res = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($res);

    ?>
    <section><label class="text" style="margin-top: 10px;"><?php echo $row['std_name']; ?></label> <br /></section>
    <section><label class="text"><?php echo $row['std_email']; ?></label></section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>