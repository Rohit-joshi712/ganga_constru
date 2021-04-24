<!DOCTYPE html>
<html>
<head>
	<title>Create Users</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <style>
   		label{
   			font-size: 20px;
   			padding-left: 10px;
   		}
    </style>
</head>
<body>
	<nav style="background-color: #d9d9d9" class="navbar navbar-light pt-0">
	  <a class="navbar-brand mr-0" href="#">
	    <img src="<?php echo base_url().'assets/images/logo.jpg'?>" width="150" alt="Logo">
	  </a>
	  <ul style="list-style: none; margin: auto; width: 350px;" class="pl-0 font-weight-bold ">
	  	<li class="py-3"><span style="font-size: 18px; border-radius: 15px; border: 2px solid red;" class="p-2">GANGA FERNHILL PHASE</span></li>
	  	<li><span style="font-size: 18px; margin-left: 90px;">UNDRI</span></li>
	  </ul>
	</nav>

	<div class="container mt-3">
		<div class="row justify-content-center">
			<div style="border: 2px solid black; background-color: #d9d9d9;" class="col-md-6 pt-2">
				<form method="post" action="<?php echo base_url().'index.php/Main/create'; ?>">
					<table class="table table-borderless">
						<tr>
							<td><label>customer Name</label></td>
							<td>:</td>
							<td><input type="text" name="cust_name" value="<?php if(isset($_POST['cust_name'])) {echo $_POST['cust_name'];} ?>" required></td>
						</tr>
						<tr>
							<td><label>Mob No</label></td>
							<td>:</td>
							<td><input type="text" name="mob" value="<?php if(isset($_POST['mob'])) {echo $_POST['mob'];} ?>" required></td>
						</tr>
						<tr>
							<td><label>Flat Type</label></td>
							<td>:</td>
							<td>
								<select name="flat_type" id="flat_type">
								  <option value="1 BHK">1 BHK</option>
								  <option value="2 BHK">2 BHK</option>
								  <option value="3 BHK">3 BHK</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label>Flat No</label></td>
							<td>:</td>
							<td><input type="text" name="flat_no" value="<?php if(isset($_POST['flat_no'])) {echo $_POST['flat_no'];} ?>" required></td>
						</tr>
						<tr>
							<td><label>Area</label></td>
							<td>:</td>
							<td><input type="text" name="area" value="<?php if(isset($_POST['area'])) {echo $_POST['area'];} ?>" required></td>
						</tr>
						<tr>
							<td><label>Rate</label></td>
							<td>:</td>
							<td><input type="text" name="rate" value="<?php if(isset($_POST['rate'])) {echo $_POST['rate'];} ?>" required></td>
						</tr>
						<tr>
							<td><label>carpet Area</label></td>
							<td>:</td>
							<td><input type="text" name="car_area" value="<?php if(isset($_POST['car_area'])) {echo $_POST['car_area'];} ?>" required></td>
						</tr>
						<tr>
							<td class="text-center"><input class="btn btn-primary" type="submit" name="submit" value="submit"></td>
							<td></td>
							<td class="text-center"><a class="btn btn-danger" role="button" href="<?php echo base_url().'index.php/main/index'?>">cancel</a></td>
						</tr>
					</table>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>