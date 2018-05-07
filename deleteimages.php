<?php
require_once('../../../DB.php');
$con = new mysqli(DBHOST, USERNAME, PASSWORD, DBNAME);
$result = mysqli_query($con,"SELECT * FROM images");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
<tr>
<td> Id</td>
<td>Image</td>
<td>Image name</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["image"]; ?></td>
<td><?php echo $row["name"]; ?></td>

<td><a href="retrive.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>


</table>
</body>
</html>
