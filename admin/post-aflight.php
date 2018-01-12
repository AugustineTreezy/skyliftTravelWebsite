<?php
session_start();
error_reporting(0);
include('includes/config.php'); 
	if(isset($_POST['submit'])){

		$flight_name=$_POST['flight_name'];
		$trip=$_POST['trip'];
		$leaving_frm=$_POST['leaving_frm'];
		$going_to=$_POST['going_to'];
        $takeoff_date=$_POST['takeoff_date'];
        $takeoff_time=$_POST['takeoff_time'];		
		$landing_date=$_POST['landing_date'];
        $landing_time=$_POST['landing_time'];
        $duration=$_POST['duration'];
        $price=$_POST['price'];
        $airconditioner=$_POST['airconditioner'];
        $wifi=$_POST['wifi'];
        $entertainment=$_POST['entertainment'];
        $tv=$_POST['tv'];
        $coffee=$_POST['coffee'];
        $food=$_POST['food'];
        $drink=$_POST['drink'];
        $wine=$_POST['wine'];
        $comfort=$_POST['comfort'];
        $magazines=$_POST['magazines'];
        $shopping=$_POST['shopping'];
        $games=$_POST['games'];
	
   }
         
         if(!empty($_POST)){
         	$res=mysqli_query($db,"INSERT INTO `flights`(`id`, `leaving_from`, `going_to`, `depart_date`, `arrive_date`, `depart_time`, `arrive_time`, `total_time`, `airline`, `price`, `trip`, `wifi`, `entertainment`, `tv`, `airconditioner`, `coffee`, `food`, `drink`, `wine`, `comfort`, `magazines`, `shopping`, `games`) VALUES ('','$leaving_frm','$going_to','$takeoff_date','$landing_date','$takeoff_time','$landing_time','$duration','$flight_name','$price','$trip','$wifi','$entertainment','$tv','$airconditioner','$coffee','$food','$drink','$wine','$comfort','$magazines','$shopping','$games')");
  if($res){
	 	 
	 	$msg="Flight posted successfully";   	

    }else{
    	$error="Something went wrong. Please try again";

    } 
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
<label class="col-sm-2 control-label">Flight Name<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="flight_name" required>
<option value=""> Select </option>
<?php 
$check=mysqli_query($db,"SELECT * FROM `flight_desc`");
$num=mysqli_num_rows($check);
while ($cols=mysqli_fetch_array($check)) { 
?>
<option value="<?php echo htmlentities($cols['name']);?>"><?php echo htmlentities($cols['name']);?></option>
<?php } ?>

</select>
</div>
<label class="col-sm-2 control-label">Trip<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="trip" required>
<option value=""> Select </option>
<option value="one way">One way</option>
<option value="round trip">Round Trip</option>

</select>
</div>
</div>
											
<div class="hr-dashed"></div>


<div class="form-group">
<label class="col-sm-2 control-label">Leaving from<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="leaving_frm" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Going To<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="going_to" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">TakeOff Date<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" data-toggle="datepicker" name="takeoff_date" class="form-control" required>
</div>
<label class="col-sm-2 control-label">TakeOff Time<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" id="takeoff_time" name="takeoff_time" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Landing Date<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" data-toggle="datepicker"  name="landing_date" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Landing Time<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" id="landing_time" name="landing_time" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Flight Duration<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text"  name="duration" class="form-control" placeholder="e.g. 13 Hours 30 minutes" required>
</div>
<label class="col-sm-2 control-label">Price(in USD)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="number"  name="price" class="form-control"  required>
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
<div class="panel-heading">Inflight Features</div>
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
<input type="checkbox" id="wifi" name="wifi" value="1">
<label for="wifi"> Wi-Fi </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="entertainment" name="entertainment" value="1">
<label for="entertainment"> Entertainment </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="tv" name="tv" value="1">
<label for="tv"> Television </label>
</div>
</div>
</div>
</br>

<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="coffee" name="coffee" value="1">
<label for="coffee"> Coffee </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="food" name="food" value="1">
<label for="food"> Food </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="drink" name="drink" value="1">
<label for="drink"> Drink </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="wine" name="wine" value="1">
<label for="wines"> Wines </label>
</div>
</div>
</div>
</br>

<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="comfort" name="comfort" value="1">
<label for="comfort"> Comfort </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="magazines" name="magazines" value="1">
<label for="magazines"> Magazines </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="shopping" name="shopping" value="1">
<label for="shopping"> Shopping </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="comfort" name="games" value="1">
<label for="games"> Games </label>
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
		$('#takeoff_time').timepicker();
		$('#landing_time').timepicker();
		$('[data-toggle="datepicker"]').datepicker();
	</script>
</body>
</html>
