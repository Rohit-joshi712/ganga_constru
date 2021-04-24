<!DOCTYPE html>
<html>
<head>
	<title>Create Users</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
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

	<div class="container pt-4">
		<div class="row justify-content-center">
			<div class="col-md-10 d-flex justify-content-between">
				<div class="pl-4">
					<h2 class="font-weight-bold ">Clients List</h2>
				</div>
				<div class="pr-5">
					<a href="<?php echo base_url().'index.php/Main/create'?>" class="btn btn-primary" role="button"><strong style="font-size: 18px;">+ Add Clients</strong></a>
				</div>		
			</div>
		</div>
		<div class="row justify-content-center pt-2">
			<div class="col-md-10 table-responsive-sm">
				<table class="table table-striped table-hover">
					<thead class="bg-dark text-light">
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>Mobile No</th>
							<th>Flat Type</th>
							<th>Flat No</th>
							<th>Total Amt</th>
							<th>Estimate</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						    if(!empty($clients)) {
							    foreach($clients as $client)  { ?>
	                    			<tr style="background-color: #d9d9d9;">
	                    				<td><?php echo $client['id'] ?></td>
	                    				<td><?php echo $client['cust_name'] ?></td>
	                    				<td><?php echo $client['mob'] ?></td>
	                    		    	<td><?php echo $client['flat_type'] ?></td>
	                    		    	<td><?php echo $client['flat_no'] ?></td>
	                    				<td><?php echo $client['total'] ?></td>
	                    				<td><a href="<?php echo base_url().'index.php/Main/report/'.$client['id'] ?>" class="btn btn-danger" role="button">Generate</a></td>
	                    			</tr>
	                    <?php    
							    }	
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>