	<?php
		
		$dagdeel = date("H:i:s") ; //23
		// nacht 0 -6
		// ochtend 6-12
		// middag 12- 18
		// avond 18 - 0
		if ($dagdeel <= 6) {
			$daytime = "night";
			$message = "slaap lekker";
		}	
   		elseif ($dagdeel <= 12) {
			$daytime = "morning";
			$message = "goedemorgen";
		}
		elseif($dagdeel > 12) {
			$daytime = "afternoon";
			$message = "goedemiddag";
			}
		elseif ($dagdeel > 18	) {
		$daytime = "evening";
			$message = "goedeavond";
		}	
		?>

<html>
<head>
	<title><?php echo $daytime ?></title>
	 <link href="dagdeel.css" rel="stylesheet" type="text/css">
</head>


<body style="background: url('images/<?php echo $daytime ?>.png') 50% 50% / cover no-repeat fixed">
 <p>
 <?php 
 echo $message;
?>
</p>
<h1>
	het is nu
<?php

 echo date("H:i:s") ;


?>

</h1> 

</body>
</html>
