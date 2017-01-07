<html>
	<head>
		<title> Information Gathered </title>
	</head>

	<body>
	<?php
			
	$subTotal = $_POST['subtotal'];
	$percentCheck = $_POST['tipPercent'];  

	$tenper = .10;
	$fifteenper = .15;
	$twentyper = .20;

	if ($percentCheck === "ten") {  
		echo 'Tip: $subtotal * $tenper';        
	}
		echo $percentCheck;

		echo $subTotal;
	?>
	</body>
</html>
