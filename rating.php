<?php
	// db connection
	include 'config.php';

	if(isset($_POST['post']) && isset($_POST['rating'])){

		if(!session_id()){
			session_start();
		}
		if(!isset($_SESSION['user'])){
			die('please_login');
		} else {
			$post_id = mysqli_real_escape_string($conn,$_POST['post']);
			$rating = mysqli_real_escape_string($conn,$_POST['rating']);
			// echo "post_id: ".$post_id;
			// echo "rating: ".$rating;
			// die();

			$sql = "UPDATE posts SET rating_by = rating_by + 1 , rating_count = rating_count + {$rating} WHERE post_id='".$post_id."'";
			// echo $sql;
			// die();
			$result = mysqli_query($conn,$sql);
			if($result == '1'){
				echo 'true';
				exit;
			}
		}
	}
?>
