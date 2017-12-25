<?php
include "config.php";
include "db.php";
include "nav.php";
$sql= 'select * from data order by id desc';
$result = $db->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Image details</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
</head>

<body>

<?php
$post =$_GET['id'];
$sql= "select * from data where id='$post'";
$result = $db->query($sql);
?>

        <div class="container">

                <?php while($data=mysqli_fetch_assoc($result)) {
                 echo"<div class='info'><h1 class='heading'>$data[title]</h1></div>";
                 echo"<div class='image'><img class=images src = uploads/$data[head]></div>";
                echo"<div class='info'><p class='data'>$data[text]</p></div>";
            } ?>
            </div>

</body>
</html>
