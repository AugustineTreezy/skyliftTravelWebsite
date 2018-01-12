<?php
include('../connection.php');
$min=$_POST['min'];
$max=$_POST['max'];
$res=mysqli_query($db,"SELECT * FROM `flights` WHERE `price` BETWEEN '$min' AND '$max' LIMIT 15");
$num=mysqli_num_rows($res);
?>
<h4 class="search-results-title"><i class="soap-icon-search"></i><b><?php echo $num ?></b> results found.</h4><br>
<?php
while ($cols=mysqli_fetch_array($res)) {
            $airline=$cols['airline'];
            $res2=mysqli_query($db,"SELECT * FROM `flight_desc` WHERE `name`='$airline'");
            $cols2=mysqli_fetch_array($res2); 
?>
<article id="flight_single" class="box">
    <figure class="col-xs-3 col-sm-2">
        <span><img alt="<?php echo $cols2['name']; ?>" src="images/flights/resized0/<?php echo $cols2['logo']; ?>"></span>
    </figure>
    <div class="details col-xs-9 col-sm-10">
        <div class="details-wrapper">
            <div class="first-row">
                <div>
                    <h4 class="box-title"><?php echo $cols['leaving_from']; ?> to <?php echo $cols['going_to']; ?><small><?php echo $cols['trip']; ?> flight</small></h4>
                
                    <div class="amenities">
                        <?php
                          if ($cols['airconditioner']==1) { ?>
                             <i class="soap-icon-aircon circle" data-toggle="tooltip" title="Air conditioner available"></i>
                              <?php
                          }
                        ?>

                       <?php
                          if ($cols['wifi']==1) { ?>                                                              
                            <i class="soap-icon-wifi circle" data-toggle="tooltip" title="Wi_Fi available"></i>
                              <?php
                          }
                        ?>

                        <?php
                          if ($cols['food']==1) { ?>
                            <i class="soap-icon-food circle" data-toggle="tooltip" title="Food available"></i>
                              <?php
                          }
                        ?> 

                        <?php
                          if ($cols['drink']==1) { ?>
                             <i class="soap-icon-juice circle" data-toggle="tooltip" title="Drinks available"></i>
                              <?php
                          }
                        ?>  

                        <?php
                          if ($cols['tv']==1) { ?>
                             <i class="soap-icon-television circle" data-toggle="tooltip" title="Television available"></i>
                              <?php
                          }
                        ?>                                                     
                    </div>
                </div>
                <div>
                    <span class="price"><small>AVG/PERSON</small>$<?php echo $cols['price']; ?></span>
                </div>
            </div>
            <div class="second-row">
                <div class="time">
                    <div class="take-off col-sm-4">
                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                        <div>
                            <span class="skin-color">Take off</span><br /><?php echo $cols['depart_date']; ?> <?php echo $cols['depart_time']; ?>
                        </div>
                    </div>
                    <div class="landing col-sm-4">
                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                        <div>
                            <span class="skin-color">landing</span><br /><?php echo $cols['arrive_date']; ?> <?php echo $cols['arrive_time']; ?>
                        </div>
                    </div>
                    <div class="total-time col-sm-4">
                        <div class="icon"><i class="soap-icon-clock yellow-color"></i></div>
                        <div>
                            <span class="skin-color">total time</span><br /><?php echo $cols['total_time']; ?>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <form id="push_<?php echo $cols['id']; ?>" method="post" action="flight-detailed.php">
                        <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">
                    <a onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();" class="button btn-small full-width">SELECT NOW</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</article>

<?php
  }                

  if(mysqli_num_rows($res)<1){ ?>
    <div class="alert alert-error">
       <?php echo"No results found, please check your spellings and retry again"; ?> 
    <span class="close"></span>
  
  <?php
    }
?>