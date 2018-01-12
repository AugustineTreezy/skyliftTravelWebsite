<?php
session_start();
error_reporting(0);
include('includes/config.php');
mysqli_set_charset($db,"utf8"); 
	if(isset($_POST['submit'])){
		
        $car_name=mysqli_real_escape_string($db,trim($_POST['car_name']));
		$car_type=$_POST['car_type'];
        $car_desc=mysqli_real_escape_string($db,trim($_POST['car_desc']));
        $car_price=mysqli_real_escape_string($db,trim($_POST['car_price']));
		$fuel_type=$_POST['fuel_type'];		
        $miles=mysqli_real_escape_string($db,trim($_POST['miles']));
        $pickup_date=mysqli_real_escape_string($db,trim($_POST['pickup_date']));
        $pickup_time=mysqli_real_escape_string($db,trim($_POST['pickup_time']));
        $dropoff_date=mysqli_real_escape_string($db,trim($_POST['dropoff_date']));
        $dropoff_time=mysqli_real_escape_string($db,trim($_POST['dropoff_time']));
        $pickup_location=mysqli_real_escape_string($db,trim($_POST['pickup_location']));
        $dropoff_location=mysqli_real_escape_string($db,trim($_POST['dropoff_location']));	
		$passangers=$_POST['passangers'];
		$bags=$_POST['bags'];
		$doors=$_POST['doors'];
		$airconditioner=$_POST['airconditioner'];
		$powerdoorlocks=$_POST['powerdoorlocks'];
		$powersteering=$_POST['powersteering'];
		$antilockbrakingsys=$_POST['antilockbrakingsys'];
		$brakeassist=$_POST['brakeassist'];
		$driverairbag=$_POST['driverairbag'];
		$passengerairbag=$_POST['passengerairbag'];
		$powerwindow=$_POST['powerwindow'];
		$cdplayer=$_POST['cdplayer'];
		$centrallocking=$_POST['centrallocking'];
		$crashcensor=$_POST['crashcensor'];
		$automatictransmission=$_POST['automatictransmission'];
		$time=time();

		//resizing the images
	  
	    $file_dir1=$_FILES['img1']['tmp_name'];
	    $file_dir2=$_FILES['img2']['tmp_name'];
	    $file_dir3=$_FILES['img3']['tmp_name'];
	    $file_dir4=$_FILES['img4']['tmp_name'];
	    $file_dir5=$_FILES['img5']['tmp_name'];
	    $file_dir6=$_FILES['img6']['tmp_name'];

	    //resize for all images
	    $widths=array(900,70);
	    $heights=array(500,70);
	    $aar_count=count($widths)-1;
	    for ($i=0; $i <=$aar_count; $i++) {
        $file_name="../images/cars/resized".$i;
        $temp1 = explode(".", $_FILES["img1"]["name"]);
        $temp2 = explode(".", $_FILES["img2"]["name"]);
        $temp3 = explode(".", $_FILES["img3"]["name"]);
        $temp4 = explode(".", $_FILES["img4"]["name"]);
        $temp5 = explode(".", $_FILES["img5"]["name"]);
        $temp6 = explode(".", $_FILES["img6"]["name"]);

        $newfilename1 = "$car_name-1$time" . "." . end($temp1);
        $newfilename2 = "$car_name-2$time" . "." . end($temp2);
        $newfilename3 = "$car_name-3$time" . "." . end($temp3);
        $newfilename4 = "$car_name-4$time" . "." . end($temp4);
        $newfilename5 = "$car_name-5$time" . "." . end($temp5);
        $newfilename6 = "$car_name-6$time" . "." . end($temp6);

        $file1 = $file_name."/".$newfilename1;
        $file2 = $file_name."/".$newfilename2;
        $file3 = $file_name."/".$newfilename3;
        $file4 = $file_name."/".$newfilename4;
        $file5 = $file_name."/".$newfilename5;
        $file6 = $file_name."/".$newfilename6;

        resize_crop_image($widths[$i], $heights[$i], $file_dir1,$file1);
        resize_crop_image($widths[$i], $heights[$i], $file_dir2,$file2);
        resize_crop_image($widths[$i], $heights[$i], $file_dir3,$file3);
        resize_crop_image($widths[$i], $heights[$i], $file_dir4,$file4);
        resize_crop_image($widths[$i], $heights[$i], $file_dir5,$file5);
        resize_crop_image($widths[$i], $heights[$i], $file_dir6,$file6);
    }
       // resize for first and second image only
       $img1_widths=array(270,183,114,63);
       $img1_heights=array(160,120,85,59);
       $count=count($img1_widths)-1;
       for ($a=0; $a <=$count; $a++){
       	$s_file_name="../images/cars/s_resized".$a;

       	$s_temp1 = explode(".", $_FILES["img1"]["name"]);
        $s_temp2 = explode(".", $_FILES["img2"]["name"]);

        $s_newfilename1 = "img1$time" . "." . end($s_temp1);
        $s_newfilename2 = "img2$time" . "." . end($s_temp2);

        $s_file1 = $s_file_name."/".$s_newfilename1;
        $s_file2 = $s_file_name."/".$s_newfilename2;

        resize_crop_image($img1_widths[$a], $img1_heights[$a], $file_dir1,$s_file1);
        resize_crop_image($img1_widths[$a], $img1_heights[$a], $file_dir2,$s_file2);


       }
   }
         
         if(!empty($_POST)){
         	$res=mysqli_query($db,"INSERT INTO `cars`(`id`, `car_id`, `name`, `fuel`, `description`, `pick_date`, `pick_time`, `drop_date`, `drop_time`, `pick_location`, `drop_location`, `type`, `mileage`, `price`, `passengers`, `doors`, `bags`, `airconditioner`, `powerdoorlocks`, `powersteering`, `antilockbrakingsys`, `brakeassist`, `driverairbag`, `passengerairbag`, `powerwindow`, `cdplayer`, `centrallocking`, `crashcensor`, `automatictransmission`) VALUES ('','car_$time','$car_name','$fuel_type','$car_desc','$pickup_date','$pickup_time','$dropoff_date','$dropoff_time','$pickup_location','$dropoff_location','$car_type','$miles','$car_price','$passangers','$doors','$bags','$airconditioner','$powerdoorlocks','$powersteering','$antilockbrakingsys','$brakeassist','$driverairbag','$passengerairbag','$powerwindow','$cdplayer','$centrallocking','$crashcensor','$automatictransmission')");
  if($res){
	 $res2=mysqli_query($db,"INSERT INTO `car_images`(`id`, `car_id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES ('','car_$time','$newfilename1','$newfilename2','$newfilename3','$newfilename4','$newfilename5','$newfilename6')");	 
	 	$msg="Vehicle posted successfully";   	

    }else{
    	$error="Something went wrong. Please try again";

    } 
  }
            


?>
<?php
//resize and crop image by center
function resize_crop_image($max_width, $max_height, $source_file, $dst_dir, $quality = 80){
    $imgsize = getimagesize($source_file);
    $width = $imgsize[0];
    $height = $imgsize[1];
    $mime = $imgsize['mime'];

    switch($mime){
        case 'image/gif':
            $image_create = "imagecreatefromgif";
            $image = "imagegif";
            break;

        case 'image/png':
            $image_create = "imagecreatefrompng";
            $image = "imagepng";
            $quality = 7;
            break;

        case 'image/jpeg':
            $image_create = "imagecreatefromjpeg";
            $image = "imagejpeg";
            $quality = 80;
            break;

        default:
            return false;
            break;
    }

    $dst_img = imagecreatetruecolor($max_width, $max_height);
    $src_img = $image_create($source_file);

    $width_new = $height * $max_width / $max_height;
    $height_new = $width * $max_height / $max_width;
    //if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa
    if($width_new > $width){
        //cut point by height
        $h_point = (($height - $height_new) / 2);
        //copy image
        imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);
    }else{
        //cut point by width
        $w_point = (($width - $width_new) / 2);
        imagecopyresampled($dst_img, $src_img, 0, 0, $w_point, 0, $max_width, $max_height, $width_new, $height);
    }

    $image($dst_img, $dst_dir, $quality);

    if($dst_img)imagedestroy($dst_img);
    if($src_img)imagedestroy($src_img);
    
}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Skylift Portal | Admin Post Flight</title>
	
	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/jquery.timepicker.css">
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Post A Vehicle</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Car Name<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="car_name" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Car Type<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="car_type" required>
<option value=""> Select </option>
<?php 
$check=mysqli_query($db,"SELECT * FROM `car_type`");
$num=mysqli_num_rows($check);
while ($cols=mysqli_fetch_array($check)) { 
?>
<option value="<?php echo htmlentities($cols['type']);?>"><?php echo htmlentities($cols['type']);?></option>
<?php } ?>

</select>
</div>
</div>
											
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Vehical Overview<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="car_desc" rows="4" required></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Price Per Day(in USD)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="number" name="car_price" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Fuel Type<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="fuel_type" required>
<option value=""> Select </option>

<option value="Petrol">Petrol</option>
<option value="Diesel">Diesel</option>
<option value="CNG">CNG</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">No. of passangers<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="passangers" required>
<option value=""> Select </option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
</div>
<label class="col-sm-2 control-label">Mileage(in miles)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="number" name="miles" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">PickUp Date<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" data-toggle="datepicker" name="pickup_date" class="form-control" required>
</div>
<label class="col-sm-2 control-label">PickUp Time<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" id="pickup_time" name="pickup_time" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">DropOff Date<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" data-toggle="datepicker"  name="dropoff_date" class="form-control" required>
</div>
<label class="col-sm-2 control-label">DropOff Time<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" id="dropoff_time" name="dropoff_time" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">PickUp Location<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="pickup_location" placeholder="e.g JKIA Nairobi" class="form-control" required>
</div>
<label class="col-sm-2 control-label">DropOff Location<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="dropoff_location" placeholder="e.g JKIA Nairobi" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">No. of doors<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="doors" required>
<option value=""> Select </option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
</div>
<label class="col-sm-2 control-label">No. of bags(briefcase)<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="bags" required>
<option value=""> Select </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
</div>
</div>

<div class="hr-dashed"></div>

<div class="form-group">
<div class="col-sm-12">
<h4><b>Upload Images</b></h4>
</div>
</div>

<div class="form-group">
    <div class="col-sm-12">
    <center>
    <div class="alert alert-info alert-dismissable col-sm-12">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>Important Note:</strong> Select a high quality image as possible for better appearance. The minimum width and height of image should be 900*500 respectively   
   </div>
   </center>
  </div>
</div>

<div class="form-group">
<div class="col-sm-4">
Image 1 <span style="color:red">*</span><input type="file" name="img1" required>
</div>
<div class="col-sm-4">
Image 2<span style="color:red">*</span><input type="file" name="img2" required>
</div>
<div class="col-sm-4">
Image 3<span style="color:red">*</span><input type="file" name="img3" required>
</div>
</div>

<div class="form-group">
<div class="col-sm-4">
Image 4<span style="color:red">*</span><input type="file" name="img4" required>
</div>
<div class="col-sm-4">
Image 5<input type="file" name="img5">
</div>
<div class="col-sm-4">
Image 6<input type="file" name="img6">
</div>
</div>

<div class="hr-dashed"></div>									
</div>
</div>
</div>
</div>						

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Accessories</div>
<div class="panel-body">

<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="airconditioner" name="airconditioner" value="1">
<label for="airconditioner"> Air Conditioner </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1">
<label for="powerdoorlocks"> Power Door Locks </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
<label for="antilockbrakingsys"> AntiLock Braking System </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="brakeassist" name="brakeassist" value="1">
<label for="brakeassist"> Brake Assist </label>
</div>
</div>
</div>
</br>


<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powersteering" name="powersteering" value="1">
<label for="inlineCheckbox5"> Power Steering </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="driverairbag" name="driverairbag" value="1">
<label for="driverairbag">Driver Airbag</label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="passengerairbag" name="passengerairbag" value="1">
<label for="passengerairbag"> Passenger Airbag </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerwindow" name="powerwindow" value="1">
<label for="powerwindow"> Power Windows </label>
</div>
</div>
</div>
</br>


<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="cdplayer" name="cdplayer" value="1">
<label for="cdplayer"> CD Player </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox h checkbox-inline">
<input type="checkbox" id="centrallocking" name="centrallocking" value="1">
<label for="centrallocking">Central Locking</label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="crashcensor" name="crashcensor" value="1">
<label for="crashcensor"> Crash Sensor </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="leatherseats" name="automatictransmission" value="1">
<label for="leatherseats"> Automic transmission </label>
</div>
</div>
</div>
</br>




											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
                                                    <center>
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
                                                    </center>
												</div>
											</div>											
										</form>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/jquery.timepicker.js"></script>	
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
		$('#pickup_time').timepicker();
		$('#dropoff_time').timepicker();
		$('[data-toggle="datepicker"]').datepicker();
	</script>
</body>
</html>
