<?php
	//generate a random text for image
	session_start();
	if(!isset($_POST['securetext'])){
		$_SESSION['secure'] = rand('1000', '9999');
	}else{
		if($_SESSION['secure'] == $_POST['securetext']){
			echo "A match <br>";
		}else{
			echo "Did Not match Try Again <br>";
			$_SESSION['secure'] = rand('1000', '9999');
		}
	}
?>
<img src="generate.php">
<br>
<form action="" method="post">
	Type The Value U See:
	<input type="text" name="securetext">
	<input type="submit" name="submit">
</form>
<hr>
a <a href="https://www.facebook.com/hunk.husain">husain saify</a> product