<?php
require_once("../connection.php");
$keyword = mysqli_real_escape_string($db,trim($_POST['keyword']));
if(!empty($keyword)) {
$query =mysqli_query($db,"SELECT * FROM hotels WHERE name LIKE '%$keyword%' OR location LIKE '%$keyword%' ORDER BY name LIMIT 0,6");
?>

<?php
if(mysqli_num_rows($query)>0) {

?>	
<ul id="hotel-list">
<?php
while ($cols=mysqli_fetch_array($query)) {  
?>
<li onClick="HotelselectInfo('<?php echo $cols["name"]; ?>');"><?php echo $cols["name"]; ?>, <?php echo $cols["city"]; ?> <?php echo $cols["country"]; ?></li>
<?php } ?>
</ul>
<?php }else{ 
	?>
<ul id="hotel-list">
<li onClick="">No records found</li>
</ul>
<?php
}} ?>