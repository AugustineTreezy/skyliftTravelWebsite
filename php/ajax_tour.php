<?php
require_once("../connection.php");
$keyword = mysqli_real_escape_string($db,trim($_POST['keyword'])); 
if(!empty($keyword)) {
$query =mysqli_query($db,"SELECT distinct name FROM destinations WHERE name LIKE '%$keyword%' ORDER BY name LIMIT 0,6");
?>

<?php
if(mysqli_num_rows($query)>0) {

?>	
<ul id="tour-list">
<?php
while ($cols=mysqli_fetch_array($query)) {  
?>
<li onClick="TourselectInfo('<?php echo $cols["name"]; ?>');"><?php echo $cols["name"]; ?></li>
<?php } ?>
</ul>
<?php }else{
	?>
<ul id="tour-list">
<li onClick="">No records found</li>
</ul>
<?php
}} ?>