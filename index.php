<?php
include "config.php";
include "db.php";
include "nav.php";
#$sql= 'select * from data order by id desc';
#$result = $db->query($sql);


$limit = 4;
if (isset($_GET["pno"])) { $page  = $_GET["pno"]; } else { $page=1; };
$start_from = ($page-1) * $limit;

$sql = "SELECT * FROM data ORDER BY id ASC LIMIT $start_from, $limit";
$rs_result = mysqli_query ($db,$sql);

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
</head>

<body>
<div class="index_container">
            <?php while($data=mysqli_fetch_assoc($rs_result)) {
                $body=substr($data['text'],0,30);
                echo"<div class='index_object'>";
                echo "<div class='post-thumb'><img class ='post-thumb' src=uploads/$data[head]></div>";
                echo "<div class='post-content'>";
                echo "<h3 class='post-title'><a href='pages.php?id=$data[id]'>$data[title]</a></h3>";
                echo "<p>$body..<a  href='pages.php?id=$data[id]'><button class='btn btn-info'>Read more..</button></a> </p></div>";

                echo'</div>';
            }
      ?>




            <?php
            $sql = "SELECT COUNT(id) FROM data";
            $rs_result = mysqli_query($db,$sql);
            $row = mysqli_fetch_row($rs_result);
            $total_records = $row[0];
            $total_pages = ceil($total_records / $limit);
            $pagLink = "<ul class='pagination'>";
            for ($i=1; $i<=$total_pages; $i++) {
                $pagLink .= "<li><a href='index.php?pno=".$i."'>".$i."</li></a>";
            };
            echo $pagLink . "</ul>";
            ?>

</div>

<div class="index_container">
            <a href="#">Back to top</a>
        <p>Dynamic website by Gaurav Rawat</p>
 </div>

</body>
</html>


