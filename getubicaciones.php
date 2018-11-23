<?php
 $conn = mysqli_connect("localhost","root","","dpmapas") or die("Couldn't connect");
     $string = "SELECT * FROM ubicaciones;";
       if(mysqli_num_rows($query = mysqli_query($conn,$string))!=0){
			    while($row = $query->fetch_assoc()) {
            	$myArray[] = $row;
    			}	
    			echo json_encode($myArray);
				}
				else echo "";
    	
?>