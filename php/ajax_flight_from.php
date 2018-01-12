<?php
require_once("../connection.php");
$keyword = mysqli_real_escape_string($db,trim($_POST['keyword'])); 
if(!empty($keyword)) {
$query =mysqli_query($db,"SELECT distinct leaving_from FROM flights WHERE leaving_from LIKE '%$keyword%' ORDER BY leaving_from LIMIT 0,6");
?>

<?php
if(mysqli_num_rows($query)>0) {

?>	
<ul id="flight-list">
<?php
while ($cols=mysqli_fetch_array($query)) {  
?>
<li onClick="FlightFromselectInfo('<?php echo $cols["leaving_from"]; ?>');"><?php echo $cols["leaving_from"]; ?></li>
<?php } ?>
</ul>
<?php }else{
	?>
<ul id="flight-list">
<li onClick="">No records found</li>
</ul>
<?php
}} ?>