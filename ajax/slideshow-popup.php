<?php
include('../user-session.php');
include('../connection.php');
if (empty($_GET)) {
    exit();
}
if (empty($_GET['id'])) {
    exit();
}
$hotel_id=$_GET['id'];
$res=mysqli_query($db,"SELECT * FROM `hotels` WHERE `hotel_id`='$hotel_id'");
$car_res=mysqli_query($db,"SELECT * FROM `cars` WHERE `car_id`='$hotel_id'");
if (mysqli_num_rows($res)==1) {

  $cols=mysqli_fetch_array($res);
  $res2=mysqli_query($db,"SELECT * FROM `hotel_images` WHERE `hotel_id`='$hotel_id'");
  $cols2=mysqli_fetch_array($res2);  
?>
<div class="photo-gallery style1" id="photo-gallery1" data-animation="slide" data-sync="#image-carousel1">
    <ul class="slides">
        <li><img src="images/hotels/resized0/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
        <li><img src="images/hotels/resized0/<?php echo $cols2['img2']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
        <li><img src="images/hotels/resized0/<?php echo $cols2['img3']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
        <li><img src="images/hotels/resized0/<?php echo $cols2['img4']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
        <li><img src="images/hotels/resized0/<?php echo $cols2['img5']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
        <li><img src="images/hotels/resized0/<?php echo $cols2['img6']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
    </ul>
</div>
<div class="image-carousel style1" id="image-carousel1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photo-gallery1">
    <ul class="slides">
        <li><img src="images/hotels/resized1/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
        <li><img src="images/hotels/resized1/<?php echo $cols2['img2']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
        <li><img src="images/hotels/resized1/<?php echo $cols2['img3']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
        <li><img src="images/hotels/resized1/<?php echo $cols2['img4']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
        <li><img src="images/hotels/resized1/<?php echo $cols2['img5']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
        <li><img src="images/hotels/resized1/<?php echo $cols2['img6']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
</ul>
</div>
<?php    
}elseif (mysqli_num_rows($car_res)==1) {
    $car_cols=mysqli_fetch_array($car_res);
    $car_res2=mysqli_query($db,"SELECT * FROM `car_images` WHERE `car_id`='$hotel_id'");
    $car_cols2=mysqli_fetch_array($car_res2);
    ?>
    <div class="photo-gallery style1" id="photo-gallery1" data-animation="slide" data-sync="#image-carousel1">
    <ul class="slides">
        <li><img src="images/cars/resized0/<?php echo $car_cols2['img1']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
        <li><img src="images/cars/resized0/<?php echo $car_cols2['img2']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
        <li><img src="images/cars/resized0/<?php echo $car_cols2['img3']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
        <li><img src="images/cars/resized0/<?php echo $car_cols2['img4']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
        <li><img src="images/cars/resized0/<?php echo $car_cols2['img5']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
        <li><img src="images/cars/resized0/<?php echo $car_cols2['img6']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
    </ul>
</div>
<div class="image-carousel style1" id="image-carousel1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photo-gallery1">
    <ul class="slides">
        <li><img src="images/cars/resized1/<?php echo $car_cols2['img1']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
        <li><img src="images/cars/resized1/<?php echo $car_cols2['img2']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
        <li><img src="images/cars/resized1/<?php echo $car_cols2['img3']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
        <li><img src="images/cars/resized1/<?php echo $car_cols2['img4']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
        <li><img src="images/cars/resized1/<?php echo $car_cols2['img5']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
        <li><img src="images/cars/resized1/<?php echo $car_cols2['img6']; ?>" alt="<?php echo $car_cols['name']; ?>" /></li>
</ul>
</div>

    <?php 
}else{
    exit();
}
?>