<?php

	require_once "conn.php";

	if(ISSET($_POST['save'])){
		
		$pipeID = $_POST['pipeid'];

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
		

		$sql = "INSERT INTO user (loannumber, customername, processor, lender, address, appdocs, appraisal, approval, closingdate, closingloc, closingtime, contractprice, loanamount, notes, product, purchagreement, ratequote, riskrating, titleco, titleordered, confirmed) VALUES (NULLIF('$loanNumber',''), '$customerName', '$processor', '$lender', '$address', NULLIF('$appDocs',''), NULLIF('$appraisal',''), '$approval', NULLIF('$closingDate',''), '$closingLocation', NULLIF('$closingTime',''), NULLIF('$contractPrice',''), NULLIF('$loanAmount',''), '$notes', '$product', NULLIF('$purchaseAgreement',''), NULLIF('$rateQuote',''), '$riskRating', '$titleCompany', NULLIF('$titleOrdered',''), $confirmed_value)";
		
		if (mysqli_query($conn, $sql)) {
			header("Location: index.php");
		} else {
			echo "Error: " . mysqli_errno($conn) . "<br/>" . mysqli_error($conn) . "<br/>" . "<br/>";
			echo $sql;
		}
		
		

	}

?>