<?php
session_start();
error_reporting(0);
include('includes/config.php'); 
	if(isset($_POST['submit'])){

        $destination_name=mysqli_real_escape_string($db,trim($_POST['destination']));
        $duration=mysqli_real_escape_string($db,trim($_POST['duration']));
        $destination_overview=mysqli_real_escape_string($db,trim($_POST['destination_overview']));
        $included=mysqli_real_escape_string($db,trim($_POST['included']));
        $not_included=mysqli_real_escape_string($db,trim($_POST['not_included']));
        $country=mysqli_real_escape_string($db,trim($_POST['country']));
        $city=mysqli_real_escape_string($db,trim($_POST['city']));
        $latitude=mysqli_real_escape_string($db,trim($_POST['latitude']));
        $longitude=mysqli_real_escape_string($db,trim($_POST['longitude']));
        $price=mysqli_real_escape_string($db,trim($_POST['amount']));
        $adveture=mysqli_real_escape_string($db,trim($_POST['adveture']));
        $holidays=mysqli_real_escape_string($db,trim($_POST['holidays']));
        $food_n_drink=mysqli_real_escape_string($db,trim($_POST['food_n_drink']));
        $honeymoon=mysqli_real_escape_string($db,trim($_POST['honeymoon']));
        $art_n_culture=mysqli_real_escape_string($db,trim($_POST['art_n_culture']));
        $road_trips=mysqli_real_escape_string($db,trim($_POST['road_trips']));
        $travel_gear_n_tech=mysqli_real_escape_string($db,trim($_POST['travel_gear_n_tech']));
        $budget=mysqli_real_escape_string($db,trim($_POST['budget']));
        $bag_packing=mysqli_real_escape_string($db,trim($_POST['bag_packing']));
        $festivals=mysqli_real_escape_string($db,trim($_POST['festivals']));
        $wildlife_n_nature=mysqli_real_escape_string($db,trim($_POST['wildlife_n_nature']));

		//resizing the images	  
	    $file_dir1=$_FILES['img1']['tmp_name'];
        $time=time();

	    //resize image
	    $widths=array(900,270,270,170,70,63);
	    $heights=array(500,160,192,170,70,59);
	    $aar_count=count($widths)-1;
	    for ($i=0; $i <=$aar_count; $i++) {
        $file_name="../images/destinations/resized".$i;
        $temp1 = explode(".", $_FILES["img1"]["name"]);        

        $newfilename1 = "$destination_name-$time" . "." . end($temp1);
        

        $file1 = $file_name."/".$newfilename1;


        resize_crop_image($widths[$i], $heights[$i], $file_dir1,$file1);

    }
       
   }
         
         if(!empty($_POST)){
         	$res=mysqli_query($db,"INSERT INTO `destinations`(`id`, `name`, `country`, `city`, `duration`, `overview`, `price`, `latitude`, `longitude`, `included`, `not_included`, `image`, `adventure`, `honeymoon`, `art_culture`, `holidays`, `road_trips`, `gear_tech`, `food_drinks`, `budget`, `bag_packing`, `festivals`, `wildlife_travel`) VALUES ('','$destination_name','$country','$city','$duration','$destination_overview','$price','$latitude','$longitude','$included','$not_included','$newfilename1','$adveture','$honeymoon','$art_n_culture','$holidays','$road_trips','$travel_gear_n_tech','$food_n_drink','$budget','$bag_packing','$festivals','$wildlife_n_nature')");
      if($res){
	
	 	$msg=" Destination registered successfully";   	

    }else{
    	$error=" Something went wrong. Please try again";

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
	
	<title>Skylift Portal | Admin Post Destination</title>
	
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
					
						<h2 class="page-title">Post A destination</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Destination Name<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="destination" class="form-control" required>
</div>

<label class="col-sm-2 control-label">Duration<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="duration" class="form-control">
</div>

</div>

<div class="form-group">
<label class="col-sm-2 control-label">Country<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="country" class="form-control" required>
</div>
<label class="col-sm-2 control-label">City<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="city" class="form-control" required placeholder="e.g. Nairobi">
</div>

</div>

<div class="form-group">
<label class="col-sm-2 control-label">Amount(in USD)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="amount" class="form-control" required placeholder="e.g. Nairobi">
</div>

</div>
											
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Destination Overview<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="destination_overview" rows="5" required></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Whats Included<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="included" rows="6"></textarea>
</div>

</div>

<div class="form-group">
<label class="col-sm-2 control-label">Whats not Included<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="not_included" rows="6"></textarea>
</div>

</div>
<div class="hr-dashed"></div>

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

<div class="form-group">
<div class="col-sm-4">
Destination Image <span style="color:red">*</span><input type="file" name="img1" required>
</div>

</div>

<div class="hr-dashed"></div>	

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">This destination is best for</div>
<div class="panel-body">

<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="adveture" name="adveture" value="1">
<label for="adveture"> Adveture Travel </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="holidays" name="holidays" value="1">
<label for="holidays"> Family Holidays </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="food_n_drink" name="food_n_drink" value="1">
<label for="food_n_drink"> Food and drink </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="festivals" name="festivals" value="1">
<label for="festivals"> Festivals </label>
</div>
</div>
</div>
</br>

<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="honeymoon" name="honeymoon" value="1">
<label for="honeymoon"> Honeymoon and romance </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="road_trips" name="road_trips" value="1">
<label for="road_trips"> Road Trips </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="budget" name="budget" value="1">
<label for="budget"> Budget Travel </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="wildlife_n_nature" name="wildlife_n_nature" value="1">
<label for="wildlife_n_nature"> Wildlife and nature </label>
</div>
</div>
</div>
</br>

<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="art_n_culture" name="art_n_culture" value="1">
<label for="art_n_culture"> Art and culture </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="travel_gear_n_tech" name="travel_gear_n_tech" value="1">
<label for="travel_gear_n_tech"> Travel gear and tech </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="bag_packing" name="bag_packing" value="1">
<label for="bag_packing"> Bag Packing </label>
</div>
</div>
</div>
</br>

</div>
</div>
</div>
</div>						






											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
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
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>
