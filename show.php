<!DOCTYPE html>
<html>
<?php
include "config.php";
include "db.php";
?>
<body>
<?php
$sql= "select * from data";
$result=$db->query($sql);
while($data=mysqli_fetch_assoc($result))
{
    echo "<img src =uploads/".$data['head'];
}
?>

</body>
</html>