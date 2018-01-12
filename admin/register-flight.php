<?php
session_start();
error_reporting(0);
include('includes/config.php'); 
	if(isset($_POST['submit'])){

        $flight_name=mysqli_real_escape_string($db,trim($_POST['flight_name']));
        $flight_desc=mysqli_real_escape_string($db,trim($_POST['flight_desc']));

		//resizing the images	  
	    $file_dir1=$_FILES['img1']['tmp_name'];
	    $file_dir2=$_FILES['img2']['tmp_name'];
        $time=time();

	    //resize for logo
	    $widths=array(270);
	    $heights=array(160);
	    $aar_count=count($widths)-1;
	    for ($i=0; $i <=$aar_count; $i++) {
        $file_name="../images/flights/resized".$i;
        $temp1 = explode(".", $_FILES["img1"]["name"]);        

        $newfilename1 = "$flight_name-logo$time" . "." . end($temp1);
        

        $file1 = $file_name."/".$newfilename1;


        resize_crop_image($widths[$i], $heights[$i], $file_dir1,$file1);

    }
       // resize for image
       $img1_widths=array(370,270,870);
       $img1_heights=array(160,160,530);
       $count=count($img1_widths)-1;
       for ($a=0; $a <=$count; $a++){
       	$s_file_name="../images/flights/s_resized".$a;

       	$s_temp1 = explode(".", $_FILES["img2"]["name"]);
       
        $s_newfilename1 = "img$time" . "." . end($s_temp1);

        $s_file1 = $s_file_name."/".$s_newfilename1;

        resize_crop_image($img1_widths[$a], $img1_heights[$a], $file_dir2,$s_file1);
 


       }
   }
         
         if(!empty($_POST)){
         	$res=mysqli_query($db,"INSERT INTO `flight_desc`(`id`, `name`, `description`, `logo`, `image`) VALUES ('','$flight_name','$flight_desc','$newfilename1','$s_newfilename1')");
      if($res){
	
	 	$msg=" Flight registered successfully";   	

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
	
	<title>Skylift Portal | Admin Register Flight</title>
	
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
					
						<h2 class="page-title">Register A Flight</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Flight Name<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="flight_name" class="form-control" required>
</div>

</div>
											
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Flight Overview<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="flight_desc" rows="5" required></textarea>
</div>

<center>
<p>You can get the description of the flight on <a href="wikipedia.org" target="blank">Wikipedia</a></p>
</center>
</div>

<div class="hr-dashed"></div>


<div class="form-group">
<div class="col-sm-4">
Flight Logo <span style="color:red">*</span><input type="file" name="img1" required>
</div>
<div class="col-sm-4">
Flight Image<span style="color:red">*</span><input type="file" name="img2" required>
</div>
</div>

<div class="hr-dashed"></div>									
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
