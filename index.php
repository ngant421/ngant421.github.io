<?php
	if(isset($_POST['search'])){
		$string = $_POST['string'];
		$substring = $_POST['substring'];
		$stringarray = explode (" ", $string);
		
		if(count($stringarray) > 1){
			for($i=0;$i< count($stringarray);$i++){
				if($stringarray[$i] == $substring){
					echo $i + 1;
				}else{
					echo "Không tồn tại trong mảng<br />";
				}
			}
		}else{
			$stringarray1 = str_split ($string);
			for($i = 0; $i < count($stringarray1); $i++){
				if($stringarray1[$i] == $substring){
					echo ($i+1)." ";
				}
			}
		}
		
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tìm kiếm chuỗi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-6" style="margin-left: 19%;margin-bottom:2%">
				<h1>Tìm kiếm chuỗi</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<center>
					<form class="" action="" method="post">
					  <input type="text" name="string" value="" placeholder="Nhập chuỗi" class="form-control"><br /><br />
					  <input type="text" name="substring" value="" placeholder="Nhập substring" class="form-control">
					  <input type="submit" name="search" value="Tìm kiếm" class="btn" style="margin-top: 2%;">
					</form>
				</center>
			</div>
		</div>
	</div>
  </body>
</html>
