 <?php 
 function redirect ($location = ''){
        header ("location: $location");
     }

 function displayMessage($title, $message, $color){
 		echo "<div class='alert alert-'$color'>
 			<strong>'$title'</strong>
 			'$message'
 		</div>";
 }

   ?>