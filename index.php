<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="UTF-8" name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
		<title>Loan Pipeline</title>
	</head>

<body>

	<nav class="navbar navbar-default">

		<div class="container-fluid">

			<h2 class="text-primary">Loan Pipeline &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h2>
			<input type="text" id="myInput" onKeyUp="searchNames()" placeholder="Search by Lender or Processor..." title="Type in a name"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
			
			<?php
			
			include_once "conn.php";
			
			
			$queryRob = mysqli_query($conn, "SELECT pipeid, lender, SUM(loanamount) AS loanTotal FROM user WHERE lender='Rob'");
			$queryAmy = mysqli_query($conn, "SELECT pipeid, lender, SUM(loanamount) AS loanTotal FROM user WHERE lender='Amy'");
			$queryCassie = mysqli_query($conn, "SELECT pipeid, lender, SUM(loanamount) AS loanTotal FROM user WHERE lender='Cassie'");
			$queryLiz = mysqli_query($conn, "SELECT pipeid, lender, SUM(loanamount) AS loanTotal FROM user WHERE lender='Liz'");
			$queryNancy = mysqli_query($conn, "SELECT pipeid, lender, SUM(loanamount) AS loanTotal FROM user WHERE lender='Nancy'");
			
			while($fetch = mysqli_fetch_array($queryRob)){
					$robTotal = "$".number_format($fetch['loanTotal'], 2);
			}
			
			while($fetch = mysqli_fetch_array($queryAmy)){
					$amyTotal = "$".number_format($fetch['loanTotal'], 2);
			}
			
			while($fetch = mysqli_fetch_array($queryCassie)){
					$cassieTotal = "$".number_format($fetch['loanTotal'], 2);
			}
			
			while($fetch = mysqli_fetch_array($queryLiz)){
					$lizTotal = "$".number_format($fetch['loanTotal'], 2);
			}
			
			while($fetch = mysqli_fetch_array($queryNancy)){
					$nancyTotal = "$".number_format($fetch['loanTotal'], 2);
			}
			
			?>
			
			<h5 class="text-primary">Amy: <?php echo $amyTotal;?></h5> &nbsp;&nbsp;&nbsp;&nbsp;
			<h5 class="text-primary">Cassie: <?php echo $cassieTotal;?></h5> &nbsp;&nbsp;&nbsp;&nbsp;
			<h5 class="text-primary">Liz: <?php echo $lizTotal;?></h5> &nbsp;&nbsp;&nbsp;&nbsp;
			<h5 class="text-primary">Nancy: <?php echo $nancyTotal;?></h5> &nbsp;&nbsp;&nbsp;&nbsp;
			<h5 class="text-primary">Rob: <?php echo $robTotal;?></h5>	

		</div>
		


	</nav>

	<div class="col-md-3"></div>

	<div class="col-md-6 well">

		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add New Loan</button> &nbsp;&nbsp;&nbsp;
		
		
		
		<br /><br />

		<table class="table table-bordered" id="allLoans">

			<thead class="alert-success">

				<tr>

					<th>Additional Info</th>
					
					<th>Loan Number</th>

					<th>Customer Name</th>

					<th>Processor</th>

					<th>Lender</th>
					
					<th>Title Company</th>
					
					<th>Contract Price</th>
					
					<th>Loan Amount</th>
					
					<th>Closing Date</th>
					
					<th>Closing Time</th>
					
					<th>Product</th>
					
					<th>Rate</th>
				

				</tr>

			</thead>

			<tbody style="background-color:#fff;">

				<?php

					require "conn.php";

					$query = mysqli_query($conn, "SELECT * FROM user ORDER BY customername");

					while($fetch = mysqli_fetch_array($query))
					{
					if(is_null($fetch['closingdate'])) {
						$closingDate = '';
					} else {
						$closingDate = date("m/d/Y", strtotime($fetch['closingdate']));
					}

					if(is_null($fetch['closingtime'])) {
						$closingTime = '';
					} else {
						$closingTime = date("h:i A", strtotime($fetch['closingtime']));
					}

					if(is_null($fetch['contractprice'])) {
						$contractPrice = '';
					} else {
						$contractPrice = "$".number_format($fetch['contractprice'], 2);
					}

					if(is_null($fetch['loanamount'])) {
						$loanAmount = '';
					} else {
						$loanAmount = "$".number_format($fetch['loanamount'], 2);
					}
					
					$closingConf = $fetch['confirmed'];
					
					if($closingConf == 0) {
						$style = 'style="background-color:white;"';
					} elseif($closingConf == 1) {
						$style = 'style="background-color:rgba(91,244,91,1.00);"';
					}
				?>

				<tr>
					
					<td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $fetch['pipeid'];?>"><span class="glyphicon glyphicon-edit"></span> Info</button></td>

					<td><?php echo $fetch['loannumber'];?></td>

					<td><?php echo $fetch['customername'];?></td>

					<td><?php echo $fetch['processor'];?></td>
					
					<td><?php echo $fetch['lender'];?></td>
					
					<td><?php echo $fetch['titleco'];?></td>
					
					<td><?php echo $contractPrice;?></td>
					
					<td><?php echo $loanAmount;?></td>
					
					<td <?php echo $style;?>><?php echo $closingDate;?></td>
					
					<td <?php echo $style;?>><?php echo $closingTime;?></td>
					
					<td><?php echo $fetch['product'];?></td>
					
					<td><?php echo $fetch['notes'];?></td>

				</tr>

				<?php

					

					include "update_user.php";

					

					}

				?>

			</tbody>

		</table>

	</div>
	
	<div class="footer">
		
		<p>&copy; <?php echo date("Y");?> Foresight Bank All Rights Reserved<br><br>
			
		Created by <a href="mailto:ZackE@Foresight.bank">Zack Elcombe</a>
			
		</p>
		
	</div>		

	<div class="modal fade" id="form_modal" aria-hidden="true">

		<div class="modal-dialog">

			<div class="modal-content">

				<form method="POST" action="save_user.php">

					<div class="modal-header">

						<h3 class="modal-title">Add Loan Info</h3>

					</div>

					<div class="modal-body">

						<div class="col-md-2"></div>

						<div class="col-md-8">

							<div class="form-group1">

								<label >* Required Field</label>

							</div>							

							<div class="form-group">

								<label>Loan Number</label>

								<input type="text" name="loannumber" class="form-control"/>

							</div>

							<div class="form-group">

								<label>Customer Name *</label>

								<input type="text" name="customername" class="form-control" required="required" />

							</div>

							<div class="form-group">

								<label>Processor</label>

								<input type="text" name="processor" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>Lender *</label>

								<input type="text" name="lender" class="form-control" required="required"/>

							</div>

							<div class="form-group">

								<label>Title Company</label>

								<input type="text" name="titleco" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>Contract Price</label>

								<input type="text" name="contractprice" class="form-control"/>

							</div>

							<div class="form-group">

								<label>Loan Amount</label>

								<input type="text" name="loanamount" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>Closing Date</label>

								<input type="date" name="closingdate" class="form-control"/> <br>
								
								<input type="checkbox" name="clsdateconfirmed" class="forme-control"/>

								<label>Closing Date Confirmed</label>								

							</div>
							
							<div class="form-group">

								<label>Closing Time</label>

								<input type="time" name="closingtime" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>Interest Rate</label>

								<input type="text" name="interestrate" class="form-control"/>

							</div>							

							<div class="form-group">

								<label>Product</label>

								<input type="text" name="product" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>App Docs Signed?</label>

								<input type="text" name="appdocs" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>Approval Required?</label>

								<input type="text" name="approval" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>Appraisal Ordered?</label>

								<input type="text" name="appraisal" placeholder="Yes/No" class="form-control"/>

							</div>								
							
							<div class="form-group">

								<label>Closing Location</label>

								<input type="text" name="closingloc" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>Purchase Agreement</label>

								<input type="text" name="purchagreement" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>Rate Quote</label>

								<input type="text" name="ratequote" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>Risk Rating</label>

								<input type="text" name="riskrating" class="form-control"/>

							</div>
							
							<div class="form-group">

								<label>Title Ordered</label>

								<input type="text" name="titleordered" class="form-control" placeholder="Yes/No"/>

							</div>								

						</div>

					</div>

					<div style="clear:both;"></div>

					<div class="modal-footer">

						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>

						<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>

					</div>

					</div>

				</form>

			</div>

		</div>

	</div>

<script src="js/jquery-3.2.1.min.js"></script>	

<script src="js/bootstrap.js"></script>	

<script>
function searchNames() {
  var input, filter, table, tr, td, i, td2, txtValue, txtValue2;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("allLoans");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
	td2 = tr[i].getElementsByTagName("td")[4];
    if (td || td2) {
      txtValue = td.textContent || td.innerText;
	  txtValue2 = td2.textContent || td2.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 ) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}	
</script>

</body>	

</html>