<?php
// $con=mysqli_connect("localhost", "root", "", "skylift")or die("cannot connect");
// mysqli_select_db("users",$con)or die("cannot select DB");
if(isset($_POST['upload']))
{	
	$img=$_FILES["image"]["name"];
	foreach($img as $key => $value)
	{
		$name=$_FILES["image"]["name"][$key] ;
		$tname=$_FILES["image"]["tmp_name"][$key];
		$size=$_FILES["image"]["size"][$key];
		$oext=getExtention($name);
		$ext=strtolower($oext);
		$base_name=getBaseName($name);
		if($ext=="jpg" || $ext=="jpeg" || $ext=="bmp" || $ext=="gif"){
			if($size< 1024*1024){
				if(file_exists("upload/".$name)){
					move_uploaded_file($tname,"upload/".$name);
					$result = 1;
					list($width,$height)=getimagesize("upload/".$name);
					$qry="select id from img where `img_base_name`='$base_name' and `img_ext`='$ext'";
					$res=mysqli_fetch_array(mysqli_query($qry));
					$id=$res['id'];
					$qry="UPDATE img SET `img_base_name`='$base_name' ,`img_ext`='$ext' ,`img_height`='$height' ,`img_width`='$width' ,`size`='$size' ,`img_status`='Y' where id=$id";
					mysqli_query($qry);
					echo "Image '$name' updated<br />";
				}
				else{
					move_uploaded_file($tname,"upload/".$name);
					$result = 1;
					list($width,$height)=getimagesize("upload/".$name);
					$qry="INSERT INTO `img`(`id` ,`img_base_name` ,`img_ext` ,`img_height` ,`img_width`, `size` ,`img_status`)VALUES (NULL , '$base_name', '$ext', '$height', '$width', '$size', 'Y');";
					mysqli_query($qry);
					echo "Image '$name' uploaded<br />";
				}
			}
			else{
				echo "Image size excedded.<br />File size should be less than 1Mb<br />";
			}
		}
		else{
			echo "Invalid file extention '.$oext'<br />";
		}
	}	
}
function getExtention($image_name){
	return substr($image_name,strrpos($image_name,'.')+1);
}
function getBaseName($image_name){
	return substr($image_name,0,strrpos($image_name,'.'));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function addItems()
{
var table1 = document.getElementById('tab1');
var newrow = document.createElement("tr");
var newcol = document.createElement("td");
var input = document.createElement("input");
input.type="file";
input.name="image[]";
newcol.appendChild(input);
newrow.appendChild(newcol);
table1.appendChild(newrow);
}
function remItems()
{
var table1 = document.getElementById('tab1');
var lastRow = table1.rows.length;
if(lastRow>=2)
table1.deleteRow(lastRow-1);
}
</script>
<style type="text/css">
<a class="tooltip" and them url href="/http.www.anyurl.com" </a>
a.tooltip:hover span{display:inline; position:absolute; border:2px solid #cccccc; background:#efefef; color:#333399;}
a.tooltip span
{display:none; padding:2px 3px; margin-left:8px; width:150px;}
</style>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
<table align="center" border="0" id="tab1">
	<tr>
    	<td width="218" align="center"><input type="file" name="image[]" /></td>
		<td width="54" align="center"><img src="Button-Add-icon.png" alt="Add" style="cursor:pointer" onclick="addItems()" /></td>
        <td><img src="Button-Delete-icon.png" alt="Remove" style="cursor:pointer" onclick="remItems()" /></td>
	</tr>
</table>
<table align="center" border="0" id="tab2">
<tr><td align="center"><input type="submit" value="Upload" name="upload" /></td></tr>
</table>
</form>
<table border="0" style="border:solid 1px #333; width:800px" align="center"><tr><td align="center">
<iframe style="display:none" name="if1" id="if1"></iframe>
<?
$qry="select * from img where img_status='Y' order by id";
$res=mysqli_query($qry);
$i=0;
if(mysqli_num_rows($res)){ ?>
<div align="center"><ul style="width:650px; border: 0px">
<?
while($fetch=mysqli_fetch_array($res)){
	$hratio=120/$fetch['img_height'];
	$wratio=120/$fetch['img_width'];
	$ratio=($hratio < $wratio) ? $hratio : $wratio;
	$hth=$fetch['img_height']*$ratio;
	$wth=$fetch['img_width']*$ratio;
?>
<li style="width:120px; height:180px; border:0px solid #333;float:left;list-style:none outside none; padding-right:5px;"><img src="upload/<? echo $fetch['img_base_name'].'.'.$fetch['img_ext']; ?>" width="<? echo $wth; ?>" height="<? echo $hth; ?>" title="<? echo "image : ".$fetch['img_base_name'].".".$fetch['img_ext']; ?>" /><br />
<?
	if($i==0)
		$fp=fopen("fileInfo.txt",'w');
	else
		$fp=fopen("fileInfo.txt",'a');
	fwrite($fp,"Image : ".++$i ."\r\n");
	fwrite($fp,"Name : ".$fetch['img_base_name'].".".$fetch['img_ext']."\r\n");
	fwrite($fp,"width X height :
 ".$fetch['img_width']." X ".$fetch['img_height']."\r\n");
	fwrite($fp,"Size : ".round($fetch['size']/1024,1)."Kb\r\n");
	fwrite($fp,"____________________________________\r\n");
	fclose($fp);
echo $fetch['img_base_name'].".".$fetch['img_ext'].'<br />';
echo $fetch['img_width'].' X ';
echo $fetch['img_height'].'<br />';
echo round($fetch['size']/1024,1) .'Kb';
?>
</li>
<?
}?>
</ul>
</div><? }?>
</td></tr></table>
</body>
</html>