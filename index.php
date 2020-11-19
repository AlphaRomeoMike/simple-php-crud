<?php
include('connection.php');
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
    <title>Index Page</title>
</head>

<body class="container">
    <h1 style="text-align: center;">Landing page</h1> <br /><br />

    <!-- PHP STARTING FOR INSERTION -->
    <?php
    if (isset($_POST['submit'])) {

        // $roll = $_POST['std_roll'];
        $name = $_POST['std_name'];
        $email = $_POST['std_email'];

        $sql = "INSERT INTO students (std_name, std_email) VALUES ('$name', '$email')";
        $res = mysqli_query($con, $sql);

        if ($res == 1) {
            echo '<p class="text text-success">Data inserted successfully</p>';
        } else {
            echo '<p class="text text-danger">Failed, please retry</p>';
        }
        // echo $sql;
    }
    ?>
    <!-- DATA INSERTION COMPLETED -->
    <form action="index.php" method="POST" class="form">
        <!-- <input type="text" name="std_roll" class="form-control" placeholder="Enter Roll Number" /> <br /> -->
        <input type="text" name="std_name" class="form-control" placeholder="Enter Student name" /> <br />
        <input type="text" name="std_email" class="form-control" placeholder="Enter Student email" /> <br />
        <!-- <p class="text text-warning">Image upload is <strong><b>NOT</b></strong>  necessary</p>  -->
        <!-- <input type="file" name="fileToUpload" class="form-control" /> <br /> -->
        <input type="submit" name="submit" class="btn btn-warning col-sm-2" /> <br />

    </form>

    <br />
    <br />

    <!-- PHP STARTING FOR DATA FETCHING  -->
    <?php
    $counter = 0;
    $fetch_data = "SELECT * FROM students";
    $res = mysqli_query($con, $fetch_data);
    $row = mysqli_fetch_assoc($res);
    ?>
    <form action="" method="POST">
        <table class="table">
            <thead>
                <tr>
                    <td>Serial #</td>
                    <td>Student Name</td>
                    <td>Student Email</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($res as $row) {
                ?>
                    <tr>
                        <td><?php echo ++$counter; ?></td>
                        <td><?php echo $row['std_name']; ?></td>
                        <td><?php echo $row['std_email']; ?></td>
                        <td><a href="edit.php?id=<?php echo $row['std_id'] ?>" class="btn btn-success glyphicon glyphicon-pencil"></a> <a href="delete.php?id=<?php echo $row['std_id'] ?>" class="btn btn-danger glyphicon glyphicon-trash"></a>
                        <a href="view.php?id=<?php echo $row['std_id'] ?>" class="btn btn-primary glyphicon glyphicon-eye-open"></a>
                    </td>
                    </tr>
                <?php } ?>
                <!-- PHP ENDS FOR DATA FETCHING  -->
            </tbody>
        </table>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>