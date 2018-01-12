<?php
include('../connection.php');
$min=$_POST['min'];
$max=$_POST['max'];
$res=mysqli_query($db,"SELECT * FROM `hotels` WHERE `price` BETWEEN '$min' AND '$max' LIMIT 15");
$num=mysqli_num_rows($res);
?>
<h4 class="search-results-title"><i class="soap-icon-search"></i><b><?php echo $num ?></b> results found.</h4><br>
<?php
while ($cols=mysqli_fetch_array($res)) {
    $hotel_id=$cols['hotel_id'];
    $res2=mysqli_query($db,"SELECT * FROM `hotel_images` WHERE `hotel_id`='$hotel_id'");
    $cols2=mysqli_fetch_array($res2); 
?>

<article id="hot_single" class="box">
            <figure class="col-sm-5 col-md-4">
                <img width="270" height="160" alt="" src="images/hotels/resized0/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>">
            </figure>
            <div class="details col-sm-7 col-md-8">
                <div>
                    <div>
                        <h4 class="box-title"><?php echo $cols['name']; ?><small><i class="soap-icon-departure yellow-color"></i> <?php echo $cols['location']; ?></small></h4>
                        <div class="amenities">
                            <?php
                              if ($cols['wifi']==1) { ?>
                                <i class="soap-icon-wifi circle" data-toggle="tooltip" title="Wi-Fi available"></i>
                            </li>
                            <?php
                              }
                            ?>

                            <?php
                              if ($cols['fitness_facility']==1) { ?>
                                <i class="soap-icon-fitnessfacility circle" data-toggle="tooltip" title="Fitness Facility available"></i>
                            </li>
                            <?php
                              }
                            ?>

                            <?php
                              if ($cols['restaurant']==1) { ?>
                                <i class="soap-icon-fork circle" data-toggle="tooltip" title="Restaurant available"></i>
                            </li>
                            <?php
                              }
                            ?>

                            <?php
                              if ($cols['swimming_pool']==1) { ?>
                                <i class="soap-icon-swimming circle" data-toggle="tooltip" title="Swimming pool available"></i>
                            </li>
                            <?php
                              }
                            ?>

                            <?php
                              if ($cols['wine_bar']==1) { ?>
                                <i class="soap-icon-coffee circle" data-toggle="tooltip" title="Wine bar available"></i>
                            </li>
                            <?php
                              }
                            ?>
                          
                        </div>
                    </div>
                    
                </div>
                <div>
                    <p><?php echo mb_strimwidth($cols['description'], 0, 200, "..."); ?></p>
                    <div>
                        <span class="price"><small>AVG/NIGHT</small>$<?php echo $cols['price']; ?></span>
                        <form id="push_<?php echo $cols['id']; ?>" method="post" action="hotel-detailed.php">
                            <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">
                            <a class="button btn-small full-width text-center" title="" onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();">SELECT</a>
                        </form>
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