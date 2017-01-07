<!doctype html> 
<html> 
    <head>
    <style type=text/css>
    h1 {
        color:#4baaaf;
        font-family:impact;
        font-size:80px;
    }
 
    buttons {
    	font-size:20px;
    }

    results {
    	font-size:20px;
    }
    </style>


    <title> Tip Calculator </title>
    </head>

    <body>
        <h1><center>Tip Calculator</h1>
             
	     <buttons>

	      <center>
	        <form method="post" />
	            <center> <label> Bill Subtotal <input type="number" name="subtotal" placeholder="ie. 100" /> </label>
	         </form>
	       	<br/> <br/>
	          <label>Tip Percentage</label>            
	          <input type = "radio"
	                 name = "tipPercent"
	                 id = "tipTen"
	                 value = "ten" /> 10%
	          <input type = "radio"
	                 name = "tipPercent"
	                 id = "tipFifteen"
	                 value = "fifteen" /> 15%
	          <input type = "radio"
	                 name = "tipPercent"
	                 id = "tipTwenty"
	                 value = "twenty" /> 20%

	        </buttons> 
	                   <input type="submit" value="Submit" /></center>
      
			</form>
			</center>
			</body>

		</center>

		<center>
			<results>

			<?php
				if($_POST && isset($_POST['tipPercent']) && ($_POST['subtotal'] >= 1) ) {

				
					$subTotal = $_POST['subtotal'];
					$percentCheck = $_POST['tipPercent'];  
					
					if ( $percentCheck == "ten") {  
						$tipTotal = $subTotal  * .10; 


					}
					if ( $percentCheck == "fifteen") {  
						$tipTotal = $subTotal  * .15; 


					}
					if ( $percentCheck == "twenty") {  
						$tipTotal = $subTotal  * .20; 


					}
					 echo "Bill Total: $";
					 echo $subTotal + $tipTotal;
					echo "\n         Tip: $";
					echo $tipTotal;
			}
			?>
			</results>
		</center>
</html>

