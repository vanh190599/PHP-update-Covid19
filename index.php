<!DOCTYPE html>
<html lang="en">
<head>
  <title>update covid-19</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
</head>
<body>
	<style type="text/css">
		body{
			font-size: 150%;
	     	/*background-image: url('images/5.png');
	     	background-size: cover;
	     	background-repeat: no-repeat;*/
		}
	    th {
	        text-align: center;
	    }
	    .global{
	   		width: 30px;
	        height: 30px;
	    }
	    .vietnam{
	        width: 30px;
	        margin-bottom: 3px;
	    }
	    .cases, .death, .recovered{
	        width: 17px;
	    }
	    /*an logo*/
	</style>

<?php 
    $url = 'https://ncovi.huynhhieu.com/api.php?code=external-vn';
    // $url = 'https://ncovi.huynhhieu.com/api.php?code=external-vn';
    $get_data = file_get_contents($url);
    $data = json_decode($get_data);

    echo "<pre>";
    	print_r($data);
    echo "</pre>";

    echo "<pre>";
    	print_r($data->data);
    echo "</pre>";

    echo $data->updated_at;

    foreach ($data as $rows) {
    	//echo $rows->global->cases;
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');
  ?>

<!-- <div class="container">
	<div class="col-sm-4"></div>
	<div class="col-sm-4" style="border: 1px solid #dddddd; margin-top: 20px; background: white; box-shadow: 0px 3px 3px 0px #888888;">
		<h2 style="color: red">Covid-19</h2>
		    <p>Cập nhật số ca mắc covid-19</p>
		    <p>By: <a href="https://www.facebook.com/NguyenVanAnh19051999">Nguyen Van Anh</a></p>
		    <p style="font-size: 80%;">Update: <?php echo date('H:i d-m-Y', time()); ?> </p>           
		    <table class="table table-condensed" >
		    <thead>
		    	<tr class="bg-info">
		       		<th ></th>
		        	<th><img src="images/global.png" class="global" alt=""></th>
		        	<th><img src="images/vietnam.png" class="vietnam" alt=""></th>
		        </tr>
		    </thead>
		    <tbody>
		      	<tr>
			        <td> <img src="images/3.png" class="cases" alt=""> Nhiễm</td>
			        <td class="text-center">
		                <?php echo isset($rows->global->cases)?number_format($rows->global->cases):"update"; ?> 
		            </td>
		        	<td class="text-center">
		                <?php echo isset($rows->vietnam->cases)?number_format($rows->vietnam->cases):"update"; ?>
		            </td>
		      	</tr>
		        <tr>
			        <td> <img src="images/recovered.png" class="cases" alt=""> Bình phục</td>
			        <td class="text-center">
			            <?php echo isset($rows->global->recovered)?number_format($rows->global->recovered):"update"; ?>
			        </td>
			        <td class="text-center">
			            <?php echo isset($rows->vietnam->recovered)?number_format($rows->vietnam->recovered):"number"; ?>
			        </td>
		        </tr>
		        <tr>
			        <td><img src="images/death.png" class="death" alt=""> Tử vong</td>
			        <td class="text-center">
			            <?php echo isset($rows->global->deaths)?number_format($rows->global->deaths):"update"; ?>
			        </td>
			        <td class="text-center">
			            <?php echo isset($rows->vietnam->deaths)?number_format($rows->vietnam->deaths):"update"; ?>
			        </td>
		        </tr>
		    </tbody>
		</table>
		
		<div style="display: flex;">
			<div style="width: 54px; height: 54px; mar">
				<img src="images/nxp.jpg" style="width: 54px; height: 54px; border-radius: 27px; border: 1px solid #dddddd; margin-top: 2px;" alt="">
			</div>
			<p style="margin-left: 15px; "><i>“Tỉnh nào ở tỉnh đó, huyện nào ở huyện đó, xã nào ở xã đó, thôn nào ở thôn đó, nhà nào ở nhà đó”.</i></p>
		</div>
		<p style="font-size: 12px; font-weight: bold; text-align: right; padding-bottom: 15px">Thủ tướng: Nguyễn Xuân Phúc</p>
		
	</div>
	<div class="col-sm-4"></div> -->
</body>
</html>
