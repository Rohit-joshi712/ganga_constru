<!DOCTYPE html>
<html>
<head>
	<title>Create Users</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <style>
    	.section{
    		padding-top: 20px: 
    	}
    </style>
</head>
<body>
	<nav style="background-color: #d9d9d9;" class="navbar navbar-light pt-0">
	  <a class="navbar-brand mr-0" href="#">
	    <img src="<?php echo base_url().'assets/images/logo.jpg'?>" width="150" alt="Logo">
	  </a>
	  <ul style="list-style: none; margin: auto; width: 350px;" class="pl-0 font-weight-bold ">
	  	<li class="py-3"><span style="font-size: 18px; border-radius: 15px; border: 2px solid red;" class="p-2">GANGA FERNHILL PHASE</span></li>
	  	<li><span style="font-size: 18px; margin-left: 90px;">UNDRI</span></li>
	  </ul>
	</nav>
	<div class="section container-fluid" id="cust_data">
		<div class="row">
			<div class="col-md-8 pl-5">
				<table>
					<?php 
						foreach($clients as $client) { 
					?>
					<tr>
						<td class="font-weight-bold">Customer Name:</td>
						<td class="font-weight-bold"><?php echo $client['cust_name']?></td>
					</tr>
					<tr>
						<td class="font-weight-bold">Mobile Number:</td>
						<td class="font-weight-bold"><?php echo $client['mob']?></td>
					</tr>
					<tr>
						<td class="font-weight-bold">Flat:</td>
						<td class="font-weight-bold"><?php echo $client['flat_no']?></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
		</div>
	</div>

	<div text-white" class="section container-fluid text-light text-uppercase" id="repost_head">
		<div class="row" style="color: #fff; background-color: black">
			<center>
			<h3 class="mb-0"><strong>costsheet details & calculations</strong></h3>
		</center>
		</div>
	</div>
	
	<div class="section container pt-2" id="report">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<table class="table table-bordered text-center font-weight-bold">
					<?php 
						foreach($clients as $client) {
					?>
					<tr style="background-color: #e10c0c" class="text-light">
						<td>Type</td>
						<td><?php echo $client['flat_type']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">Area</td>
						<td style="border: 2px solid black"><?php echo $client['area']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">Rate</td>
						<td style="border: 2px solid black"><?php echo $client['rate']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">Carprt Area</td>
						<td style="border: 2px solid black"><?php echo $client['carpet_area']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">Agr. Cost</td>
						<td style="border: 2px solid black"><?php echo $client['agr_cost']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">MSEB</td>
						<td style="border: 2px solid black"><?php echo $client['mseb']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">Society Formation</td>
						<td style="border: 2px solid black"><?php echo $client['society_form']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">Club house Charge</td>
						<td style="border: 2px solid black"><?php echo $client['club_house_charges']?></td>
					</tr>
					<tr>
						<td style="background-color: #ff7e7e">Total Amount Paid to Developer</td>
						<td style="background-color: #b0b0b0; border: 2px solid black"><?php echo $client['total_amt']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">Stamp -Duty</td>
						<td style="border: 2px solid black"><?php echo $client['stamp_duty']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">Maintenance</td>
						<td style="border: 2px solid black"><?php echo $client['maintainance']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">Registration</td>
						<td style="border: 2px solid black"><?php echo $client['registration']?></td>
					</tr>
					<tr>
						<td style="background-color: #fdb1b1">GST</td>
						<td style="border: 2px solid black"><?php echo $client['gst']?></td>
					</tr>
					<tr>
						<td style="background-color: #ff7e7e">Total cost</td>
						<td style="background-color: #b0b0b0; border: 2px solid black"><?php echo $client['total']?></td>
					</tr>
					<?php
						}
					?>
				</table>
				</center>	
			</div>
		</div>
	</div>

	<hr style="border: 1px solid black">
	<div class="section container-fluid" id="note">
		<div class="row">
			<div class="col-8">
				<table class="font-weight-bold">
					<tr>
						<td class="pl-5 pr-3">Note:</td>
						<td>1.</td>
						<td>cheque should Be drawn in favor of" Meenamani Ganga Builder LLP."</td>
					</tr>
					<tr>
						<td></td>
						<td>2.</td>
						<td>1% TDS will be applicable for agreement Value more than 50Lac.</td>
					</tr>
					<tr>
						<td></td>
						<td>3.</td>
						<td>GST 12% on Agreement Cost, GST 18% on Maintenance Cost.</td>
					</tr>
					<tr>
						<td></td>
						<td>4.</td>
						<td>Rates are subject to change without prior notice.</td>
					</tr>
					<tr>
						<td></td>
						<td>5.</td>
						<td>Govt. Taxes May vary as per Govt. Policies and are to be paid as per actual.</td>
					</tr>
					<tr>
						<td></td>
						<td>6.</td>
						<td>Rates are calculated after giving 200/- per sqft GST Discount.</td>
					</tr>
					<tr>
						<td></td>
						<td>7.</td>
						<td>Legal Charges of Rs.10000/- to be paid at the time of Agreement Registration.</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="pt-5"></div>
</body>
</html>