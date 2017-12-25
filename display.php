<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="album.css">
<?php

include "nav.php";
?>
</head>
<body>
<div class="container">
<form action="upload.php" method="post" enctype="multipart/form-data">
    Title: <input type="text" name="title" title="Heading" class="form-control">
    <br><br><br>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br><br><br>
    <textarea class='form-control' rows="5" cols="100" name="data" title="Enter something about the picture"></textarea>
    <br><br><br>
    <input type="submit" value="Upload Image" name="submit" class="btn btn-active">
</form>
</div>
</body>
</html>