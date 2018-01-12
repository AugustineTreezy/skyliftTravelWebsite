<?php
require_once("../connection.php");
$keyword = mysqli_real_escape_string($db,trim($_POST['keyword'])); 
if(!empty($keyword)) {
$query =mysqli_query($db,"SELECT distinct drop_location FROM cars WHERE drop_location LIKE '%$keyword%' ORDER BY drop_location LIMIT 0,6");
?>

<?php
if(mysqli_num_rows($query)>0) {

?>	
<ul id="cars-list">
<?php
while ($cols=mysqli_fetch_array($query)) {  
?>
<li onClick="DropOffselectInfo('<?php echo $cols["drop_location"]; ?>');"><?php echo $cols["drop_location"]; ?></li>
<?php } ?>
</ul>
<?php }else{
	?>
<ul id="cars-list">
<li onClick="">No records found</li>
</ul>
<?php
}} ?>