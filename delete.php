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
    <title>Delete Student</title>
</head>

<body class="container">
<body class="container">
    <h1 style="text-align: center;">Delete page</h1> <br /><br />

<?php
    $delete_query = "DELETE FROM students WHERE std_id = '$id'";
    $res = mysqli_query($con, $delete_query);
    
    if($res) {
        echo '<h4 style="text-align : center;" class="text text-danger">Record deleted successfully <strong><a href="index.php">Redirect to index?</a></strong></h4>';
    }
?>
    
</body>
</html>