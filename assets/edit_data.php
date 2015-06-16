<?

include "connectDB.php";
$order = "UPDATE `users`
          SET `user_firstname` = `poep`, 
              `user_lastname` = `$address` 
          WHERE 
	      `user_id` = `$id` ";

	   
mysqli_query($con,$order);
header("location:edit.php");
?>