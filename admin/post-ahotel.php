<?php
session_start();
error_reporting(0);
include('includes/config.php'); 
	if(isset($_POST['submit'])){

        $hotel_name=mysqli_real_escape_string($db,trim($_POST['hotel_name']));
        $hotel_location=mysqli_real_escape_string($db,trim($_POST['hotel_location']));
        $hotel_price=mysqli_real_escape_string($db,trim($_POST['hotel_price']));
        $hotel_desc=mysqli_real_escape_string($db,trim($_POST['hotel_desc']));
        $country=mysqli_real_escape_string($db,trim($_POST['country']));
        $city=mysqli_real_escape_string($db,trim($_POST['city']));
        $latitude=mysqli_real_escape_string($db,trim($_POST['latitude']));
        $longitude=mysqli_real_escape_string($db,trim($_POST['longitude']));
		$air_conditioner=$_POST['air_conditioner'];
		$wifi=$_POST['wifi'];
		$restaurant=$_POST['restaurant'];
		$fridge=$_POST['fridge'];
		$entertainment=$_POST['entertainment'];
		$rooms_service=$_POST['rooms_service'];
		$complimentary_breakfast=$_POST['complimentary_breakfast'];
		$hot_tub=$_POST['hot_tub'];
		$swimming_pool=$_POST['swimming_pool'];
		$wine_bar=$_POST['wine_bar'];
		$pets_allowed=$_POST['pets_allowed'];
		$free_parking=$_POST['free_parking'];
		$tv=$_POST['tv'];
		$fitness_facility=$_POST['fitness_facility'];
		$smoking_allowed=$_POST['smoking_allowed'];
		$play_place=$_POST['play_place'];
		$conference_room=$_POST['conference_room'];
		$doorman=$_POST['doorman'];
		$elevator=$_POST['elevator'];
		$fire_place=$_POST['fire_place'];
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
        $file_name="../images/hotels/resized".$i;
        $temp1 = explode(".", $_FILES["img1"]["name"]);
        $temp2 = explode(".", $_FILES["img2"]["name"]);
        $temp3 = explode(".", $_FILES["img3"]["name"]);
        $temp4 = explode(".", $_FILES["img4"]["name"]);
        $temp5 = explode(".", $_FILES["img5"]["name"]);
        $temp6 = explode(".", $_FILES["img6"]["name"]);

        $newfilename1 = "$hotel_name-1$time" . "." . end($temp1);
        $newfilename2 = "$hotel_name-2$time" . "." . end($temp2);
        $newfilename3 = "$hotel_name-3$time" . "." . end($temp3);
        $newfilename4 = "$hotel_name-4$time" . "." . end($temp4);
        $newfilename5 = "$hotel_name-5$time" . "." . end($temp5);
        $newfilename6 = "$hotel_name-6$time" . "." . end($temp6);

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
       $img1_widths=array(270,114,63);
       $img1_heights=array(160,85,59);
       $count=count($img1_widths)-1;
       for ($a=0; $a <=$count; $a++){
       	$s_file_name="../images/hotels/s_resized".$a;

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
         	$res=mysqli_query($db,"INSERT INTO `hotels`(`id`, `hotel_id`, `name`, `location`, `description`, `price`, `country`, `city`, `longitude`, `latitude`, `air_conditioner`, `entertainment`, `swimming_pool`, `tv`, `conference_room`, `wifi`, `room_service`, `wine_bar`, `fitness_facility`, `doorman`, `restaurant`, `complimentary_breakfast`, `pets_allowed`, `smoking_allowed`, `fire_place`, `fridge`, `hot_tub`, `free_parking`, `play_place`, `elevator`) VALUES ('','hotel_$time','$hotel_name','$hotel_location','$hotel_desc','$hotel_price','$country','$city','$longitude','$latitude','$air_conditioner','$entertainment','$swimming_pool','$tv','$conference_room','$wifi','$rooms_service','$wine_bar','$fitness_facility','$doorman','$restaurant','$complimentary_breakfast','$pets_allowed','$smoking_allowed','$fire_place','$fridge','$hot_tub','$free_parking','$play_place','$elevator')");
          if($res){
        	 $res2=mysqli_query($db,"INSERT INTO `hotel_images`(`id`, `hotel_id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES ('','hotel_$time','$newfilename1','$newfilename2','$newfilename3','$newfilename4','$newfilename5','$newfilename6')");	 
        	 	$msg="Hotel posted successfully";   	

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
	
	<title>Skylift Portal | Admin Post Hotel</title>
	
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
					
						<h2 class="page-title">Post A Hotel</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Hotel Name<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="hotel_name" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Location<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="hotel_location" class="form-control" placeholder="e.g. Nairobi Downtown" required>
</div>
</div>
											
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Hotel Overview<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="hotel_desc" rows="4" placeholder="a brief description of the hotel" required></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Price Per Day(in USD)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="number" name="hotel_price" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Country<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="country" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">City<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="city" class="form-control" required placeholder="e.g. Nairobi">
</div>

</div>

<div class="form-group">
<label class="col-sm-2 control-label">Latitude<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text"  name="latitude" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Longitude<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" id="longitude" name="longitude" class="form-control" step="any" required>
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
    <center>
<p>Get Latitude and longitude of places <a href="http://www.mapcoordinates.net/en" target="blank">here</a></p>
    </center>
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
<div class="panel-heading">Amentities</div>
<div class="panel-body">

<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="airconditioner" name="airconditioner" value="1">
<label for="air_conditioner"> Air Conditioner </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="wifi" name="wifi" value="1">
<label for="wifi"> Wi_Fi </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="restaurant" name="restaurant" value="1">
<label for="coffee"> Restaurant </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="fridge" name="fridge" value="1">
<label for="fridge"> Fridge </label>
</div>
</div>
</div>
</br>


<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="entertainment" name="entertainment" value="1">
<label for="entertainment"> Entertainment </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="roomservice" name="roomservice" value="1">
<label for="rooms_service"> Room Service </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="complimentary_breakfast" name="complimentary_breakfast" value="1">
<label for="complimentary_breakfast"> Complimentary Breakfast </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="hot_tub" name="hot_tub" value="1">
<label for="hot_tub"> Hot Tub </label>
</div>
</div>
</div>
</br>


<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="swimming_pool" name="swimming_pool" value="1">
<label for="swimming_pool"> Swimming Pool </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox h checkbox-inline">
<input type="checkbox" id="wine_bar" name="wine_bar" value="1">
<label for="wine_bar"> Wine Bar </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="pets_allowed" name="pets_allowed" value="1">
<label for="pets_allowed"> Pets Allowed </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="free_parking" name="free_parking" value="1">
<label for="free_parking"> Free Parking </label>
</div>
</div>
</div>
</br>

<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="tv" name="tv" value="1">
<label for="tv"> Television </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox h checkbox-inline">
<input type="checkbox" id="fitness" name="fitness" value="1">
<label for="fitness_facility"> Fitness Facility </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="pets_allowed" name="pets_allowed" value="1">
<label for="smoking_allowed"> Smoking Allowed </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="play_place" name="play_place" value="1">
<label for="play_place"> Play Place </label>
</div>
</div>
</div>
</br>

<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="conference_room" name="conference_room" value="1">
<label for="conference_room"> Conference Room </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox h checkbox-inline">
<input type="checkbox" id="doorman" name="doorman" value="1">
<label for="doorman"> DoorMan </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="fire_place" name="fire_place" value="1">
<label for="fire_place"> Fire Place </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="elevator" name="elevator" value="1">
<label for="elevator"> Elevator in Building </label>
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
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>
