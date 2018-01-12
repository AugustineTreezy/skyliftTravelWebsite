<?php
require_once("../connection.php");
$keyword = mysqli_real_escape_string($db,trim($_POST['keyword'])); 
if(!empty($keyword)) {
$query =mysqli_query($db,"SELECT distinct going_to FROM flights WHERE going_to LIKE '%$keyword%' ORDER BY going_to LIMIT 0,6");
?>

<?php
if(mysqli_num_rows($query)>0) {

?>	
<ul id="flight-list">
<?php
while ($cols=mysqli_fetch_array($query)) {  
?>
<li onClick="FlightToselectInfo('<?php echo $cols["going_to"]; ?>');"><?php echo $cols["going_to"]; ?></li>
<?php } ?>
</ul>
<?php }else{
	?>
<ul id="flight-list">
<li onClick="">No records found</li>
</ul>
<?php
}} ?>