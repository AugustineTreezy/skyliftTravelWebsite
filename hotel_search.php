<?php
include('connection.php');

$name=$_POST['name'];
$query=mysqli_query($db,"SELECT * FROM hotels WHERE name LIKE $name OR location LIKE $name");
$cols=mysqli_fetch_array($query);
foreach($query as $cols){ 

?>
<div id="user"><?php echo $cols['name']; ?></div>

<?php
}

?>