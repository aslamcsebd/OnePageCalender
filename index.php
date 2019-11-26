<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="ISO-8859-1">
		<title>User Home</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/fontawesome-all.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

<!-------------- navbar  -------------->

		<nav class="navbar navbar-default">
	    	<div class="container">	        
	        	<div class="collapse navbar-collapse">
	            <ul class="nav navbar-nav navbar-right">
	               <li class="active"><a href="#">Home</a></li>
	               <li><a href="#">Admin</a></li>
	               <li><a href="#">User</a></li>
	               <li><a href="#">Contact</a></li>
	           	</ul>             
	        	</div>
	    	</div>
		</nav>
		<h1>Date Page</h1>	
		<div id="index" class=" text-center">
			<?php 
				date_default_timezone_set("Asia/Dhaka");
				echo "Time ". date("h:i:sa");				
				echo "<br>";

				$year=date("Y");
				echo "Year: ".$year ;
				echo "<br>";

				$month=date("F");
				echo "Month: ". $month;
				echo "<br>";

				$date=date("d");
				echo "Date: ".$date;
				echo "<br>";

				$day=date("l");
				echo "Day: ".$day;
				echo "<br>";

				$MS ='style="background: #1B1464"'; 	//month style...
				$MS2=$MS3='';				
			 ?>
			
			<div class="row">	
				<table class="text-center" style="background-color: #636e72; margin-top: 50px; ">
				  	<tr>
				    	<th colspan="12">One Page Calendar 2019</th>
				  	</tr>			

				  	<tr>
				    	<th class="dateMonth" rowspan="3" colspan="5">Months <i class="far fa-arrow-alt-circle-right"></i> <br> Dates <br> <i class="far fa-arrow-alt-circle-down"></i>
				    	 </th>

				    	<?php if($month =='April'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Apr</td>				    	
				    	<?php if($month =='April'){ $MS2=$MS3; } ?> 

				    	<?php if($month =='January'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Jan</td>				    	
				    	<?php if($month =='January'){ $MS2=$MS3; } ?> 

				    	<?php if($month =='May'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >May</td>				    	
				    	<?php if($month =='May'){ $MS2=$MS3; } ?> 

				    	<?php if($month =='August'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Aug</td>				    	
				    	<?php if($month =='August'){ $MS2=$MS3; } ?> 

				    	<?php if($month =='February'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Feb</td>				    	
				    	<?php if($month =='February'){ $MS2=$MS3; } ?> 

				    	<td></td>
				    	<td></td>
				  	</tr>

				  	<tr>
				  		<?php if($month =='July'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Jul</td>				    	
				    	<?php if($month =='July'){ $MS2=$MS3; } ?> 

				  		<?php if($month =='October'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Oct</td>				    	
				    	<?php if($month =='October'){ $MS2=$MS3; } ?> 

				    	<td></td>
				    	<td></td>
				    	<?php if($month =='March'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Mar</td>				    	
				    	<?php if($month =='March'){ $MS2=$MS3; } ?> 

				    	<?php if($month =='June'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Jun</td>				    	
				    	<?php if($month =='June'){ $MS2=$MS3; } ?> 

				    	<?php if($month =='September'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Sep</td>				    	
				    	<?php if($month =='September'){ $MS2=$MS3; } ?> 
				  	</tr>

				  	<tr>
				    	<td></td>
				    	<td></td>
				    	<td></td>
				    	<td></td>
				    	<?php if($month =='November'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Nov</td>				    	
				    	<?php if($month =='November'){ $MS2=$MS3; } ?> 
				    	<td></td>
				    	<?php if($month =='December'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Dec</td>				    	
				    	<?php if($month =='December'){ $MS2=$MS3; } ?> 
				  	</tr>	

				  	<tr>
				  		<?php if($date =='1'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >1</td>				    	
				    	<?php if($date =='1'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='8'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >8</td>				    	
				    	<?php if($date =='8'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='15'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >15</td>				    	
				    	<?php if($date =='15'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='22'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >22</td>				    	
				    	<?php if($date =='22'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='29'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >29</td>				    	
				    	<?php if($date =='29'){ $MS2=$MS3; } ?> 


				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='April'||$month=='July')){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Mon</td>	
				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='April'||$month=='July')){ $MS2=$MS3; } ?> 

				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='January'||$month=='October')){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Tue</td>	
				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='January'||$month=='October')){ $MS2=$MS3; } ?> 

				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='May')){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Wed</td>	
				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='May')){ $MS2=$MS3; } ?> 

				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='August')){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Thu</td>	
				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='August')){ $MS2=$MS3; } ?> 

				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Fri</td>	
				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS3; } ?> 

				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='June')){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Sat</td>	
				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='June')){ $MS2=$MS3; } ?> 

				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='September'||$month=='December')){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >Sun</td>	
				    	<?php if(($date =='1'||$date =='8'||$date =='15'||$date =='22'||$date =='29')&&($month=='September'||$month=='December')){ $MS2=$MS3; } ?> 

				  	</tr>	

				  	<tr>
				  		<?php if($date =='2'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >2</td>				    	
				    	<?php if($date =='2'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='9'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >9</td>				    	
				    	<?php if($date =='9'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='16'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >16</td>				    	
				    	<?php if($date =='16'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='23'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >23</td>				    	
				    	<?php if($date =='23'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='30'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >30</td>				    	
				    	<?php if($date =='30'){ $MS2=$MS3; } ?> 

				    	<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='April'||$month=='July')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Tue</td>	
						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='April'||$month=='July')){ $MS2=$MS3; } ?> 

						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='January'||$month=='October')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Wed</td>	
						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='January'||$month=='October')){ $MS2=$MS3; } ?> 

						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='May')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Thu</td>	
						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='May')){ $MS2=$MS3; } ?> 

						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='August')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Fri</td>	
						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='August')){ $MS2=$MS3; } ?> 

						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sat</td>	
						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS3; } ?> 

						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='June')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sun</td>	
						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='June')){ $MS2=$MS3; } ?> 

						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='September'||$month=='December')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Mon</td>	
						<?php if(($date =='2'||$date =='9'||$date =='16'||$date =='23'||$date =='30')&&($month=='September'||$month=='December')){ $MS2=$MS3; } ?> 

				    	
				  	</tr>	

				  	<tr>
				  		<?php if($date =='3'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >3</td>				    	
				    	<?php if($date =='3'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='10'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >10</td>				    	
				    	<?php if($date =='10'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='17'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >17</td>				    	
				    	<?php if($date =='17'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='24'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >24</td>				    	
				    	<?php if($date =='24'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='31'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >31</td>				    	
				    	<?php if($date =='31'){ $MS2=$MS3; } ?> 

				    	<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='April'||$month=='July')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Wed</td>	
						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='April'||$month=='July')){ $MS2=$MS3; } ?> 

						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='January'||$month=='October')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Thu</td>	
						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='January'||$month=='October')){ $MS2=$MS3; } ?> 

						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='May')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Fri</td>	
						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='May')){ $MS2=$MS3; } ?> 

						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='August')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sat</td>	
						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='August')){ $MS2=$MS3; } ?> 

						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sun</td>	
						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS3; } ?> 

						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='June')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Mon</td>	
						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='June')){ $MS2=$MS3; } ?> 

						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='September'||$month=='December')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Tue</td>	
						<?php if(($date =='3'||$date =='10'||$date =='17'||$date =='24'||$date =='31')&&($month=='September'||$month=='December')){ $MS2=$MS3; } ?> 		    	
				  	</tr>	

				  	<tr>
				  		<?php if($date =='4'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >4</td>				    	
				    	<?php if($date =='4'){ $MS2=$MS3; } ?> 

				    	<?php if($date =='11'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >11</td>				    	
				    	<?php if($date =='11'){ $MS2=$MS3; } ?>

				    	<?php if($date =='18'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >18</td>				    	
				    	<?php if($date =='18'){ $MS2=$MS3; } ?>

				    	<?php if($date =='25'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >25</td>				    	
				    	<?php if($date =='25'){ $MS2=$MS3; } ?>

				    	<td></td>	    	

						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='April'||$month=='July')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Thu</td>	
						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='April'||$month=='July')){ $MS2=$MS3; } ?> 

						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='January'||$month=='October')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Fri</td>	
						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='January'||$month=='October')){ $MS2=$MS3; } ?> 

						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='May')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sat</td>	
						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='May')){ $MS2=$MS3; } ?> 

						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='August')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sun</td>	
						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='August')){ $MS2=$MS3; } ?> 

						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Mon</td>	
						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS3; } ?> 

						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='June')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Tue</td>	
						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='June')){ $MS2=$MS3; } ?> 

						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='September'||$month=='December')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Wed</td>	
						<?php if(($date =='4'||$date =='11'||$date =='18'||$date =='25')&&($month=='September'||$month=='December')){ $MS2=$MS3; } ?> 
				  	</tr>	

				  	<tr>
				  		<?php if($date =='5'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >5</td>				    	
				    	<?php if($date =='5'){ $MS2=$MS3; } ?>

				    	<?php if($date =='12'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >12</td>				    	
				    	<?php if($date =='12'){ $MS2=$MS3; } ?>

				    	<?php if($date =='19'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >19</td>				    	
				    	<?php if($date =='19'){ $MS2=$MS3; } ?>

				    	<?php if($date =='26'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >26</td>				    	
				    	<?php if($date =='26'){ $MS2=$MS3; } ?>

				    	<td></td>

						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='April'||$month=='July')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Fri</td>	
						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='April'||$month=='July')){ $MS2=$MS3; } ?> 

						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='January'||$month=='October')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sat</td>	
						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='January'||$month=='October')){ $MS2=$MS3; } ?> 

						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='May')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sun</td>	
						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='May')){ $MS2=$MS3; } ?> 

						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='August')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Mon</td>	
						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='August')){ $MS2=$MS3; } ?> 

						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Tue</td>	
						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS3; } ?> 

						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='June')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Wed</td>	
						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='June')){ $MS2=$MS3; } ?> 

						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='September'||$month=='December')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Thu</td>	
						<?php if(($date =='5'||$date =='12'||$date =='19'||$date =='26')&&($month=='September'||$month=='December')){ $MS2=$MS3; } ?> 
				  	</tr>	

				  	<tr>
				  		<?php if($date =='6'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >6</td>				    	
				    	<?php if($date =='6'){ $MS2=$MS3; } ?>

				    	<?php if($date =='13'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >13</td>				    	
				    	<?php if($date =='13'){ $MS2=$MS3; } ?>

				    	<?php if($date =='20'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >20</td>				    	
				    	<?php if($date =='20'){ $MS2=$MS3; } ?>

				    	<?php if($date =='27'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >27</td>				    	
				    	<?php if($date =='27'){ $MS2=$MS3; } ?>

				    	<td></td>

				    	<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='April'||$month=='July')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sat</td>	
						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='April'||$month=='July')){ $MS2=$MS3; } ?> 

						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='January'||$month=='October')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sun</td>	
						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='January'||$month=='October')){ $MS2=$MS3; } ?> 

						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='May')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Mon</td>	
						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='May')){ $MS2=$MS3; } ?> 

						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='August')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Tue</td>	
						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='August')){ $MS2=$MS3; } ?> 

						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Wed</td>	
						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS3; } ?> 

						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='June')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Thu</td>	
						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='June')){ $MS2=$MS3; } ?> 

						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='September'||$month=='December')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Fri</td>	
						<?php if(($date =='6'||$date =='13'||$date =='20'||$date =='27')&&($month=='September'||$month=='December')){ $MS2=$MS3; } ?> 
				  	</tr>	

				  	<tr>
				  		<?php if($date =='7'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >7</td>				    	
				    	<?php if($date =='7'){ $MS2=$MS3; } ?>

				    	<?php if($date =='14'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >14</td>				    	
				    	<?php if($date =='14'){ $MS2=$MS3; } ?>

				    	<?php if($date =='21'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >21</td>				    	
				    	<?php if($date =='21'){ $MS2=$MS3; } ?>

				    	<?php if($date =='28'){ $MS2=$MS; } ?> 
				    		<td <?=$MS2?> >28</td>				    	
				    	<?php if($date =='28'){ $MS2=$MS3; } ?>

				    	<td></td>			  
						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='April'||$month=='July')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sun</td>	
						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='April'||$month=='July')){ $MS2=$MS3; } ?> 

						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='January'||$month=='October')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Mon</td>	
						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='January'||$month=='October')){ $MS2=$MS3; } ?> 

						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='May')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Tue</td>	
						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='May')){ $MS2=$MS3; } ?> 

						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='August')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Wed</td>	
						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='August')){ $MS2=$MS3; } ?> 

						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Thu</td>	
						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='February'||$month=='March'||$month=='November')){ $MS2=$MS3; } ?> 

						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='June')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Fri</td>	
						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='June')){ $MS2=$MS3; } ?> 

						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='September'||$month=='December')){ $MS2=$MS; } ?> 
							<td <?=$MS2?> >Sat</td>	
						<?php if(($date =='7'||$date =='14'||$date =='21'||$date =='28')&&($month=='September'||$month=='December')){ $MS2=$MS3; } ?> 
				  	</tr>	
				</table>				
			</div>				
     	</div>    			
	</body>	
</html>