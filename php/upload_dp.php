<?php
$data = $_POST['image'];

if (!empty($data)) {
	list($type, $data) = explode(';', $data);
	list(, $data)      = explode(',', $data);

	$data = base64_decode($data);
	$imageName = time().'.png';
	file_put_contents('images/user_dp'.$imageName, $data);


	echo 'done';
}

?>
