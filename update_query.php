<?php

	require_once "conn.php";

	if(ISSET($_POST['update'])){

		$pipeid = $_POST['pipeid'];

		$loanNumber = $_POST['loannumber'];

		$customerName = $_POST['customername'];

		$processor = $_POST['processor'];
		
		$lender = $_POST['lender'];
		
		$address = $_POST['address'];
		
		$appDocs = $_POST['appdocs'];
		
		$appraisal = $_POST['appraisal'];
		
		$approval = $_POST['approval'];
		
		$closingDate = $_POST['closingdate'];
		
		$closingLocation = $_POST['closingloc'];
		
		$closingTime = $_POST['closingtime'];
		
		$contractPrice = $_POST['contractprice'];
		
		$loanAmount = $_POST['loanamount'];
		
		$notes = $_POST['interestrate'];
		
		$product = $_POST['product'];
		
		$purchaseAgreement = $_POST['purchagreement'];
		
		$rateQuote = $_POST['ratequote'];
		
		$riskRating = $_POST['riskrating'];
		
		$titleCompany = $_POST['titleco'];
		
		$titleOrdered = $_POST['titleordered'];
		
		$confirmed_value = isset($_POST['clsdateconfirmed']) ? 1 : 0;


		$sql = "UPDATE user SET loannumber = NULLIF('$loanNumber',''), customername = '$customerName', processor = '$processor', lender = '$lender', address = '$address', appdocs = '$appDocs', appraisal = '$appraisal', approval = '$approval', closingdate = NULLIF('$closingDate',''), closingloc = '$closingLocation', closingtime = NULLIF('$closingTime',''), contractprice = NULLIF('$contractPrice',''), loanamount = NULLIF('$loanAmount',''), notes = '$notes', product = '$product', purchagreement = '$purchaseAgreement', ratequote = '$rateQuote', riskrating = '$riskRating', titleco = '$titleCompany', titleordered = '$titleOrdered', confirmed = $confirmed_value WHERE pipeid = '$pipeid'";

		if (mysqli_query($conn, $sql)) {
			header("Location: index.php");
		} else {
			echo "Error: " . mysqli_errno($conn) . "<br/>" . mysqli_error($conn) . "<br/>" . "<br/>";
			echo $sql;
		}

	}

?>