<?php
error_reporting(0);
if(isset($_POST['login']))

$user = $_POST['user'];
$pass = $_POST['pass'];


if($user&&$pass){
	
	
	
	$connection=mysqli_connect("localhost", "root", "", "ecommerce");
	$sql= mysqli_query($connection,"SELECT * FROM admin WHERE username='$user'");
	
	$numrows=(mysqli_num_rows($sql));
	
	if($numrows !=0)
	{
		
		while($row=mysqli_fetch_array($sql))
		{
			
		$dbuser=$row["username"];
		$dbpass=$row["password"];
			
		}
		
		if($user==$dbuser)
		{
			
			if($pass==$dbpass)
			{
			
				header("location: adminpage.php");
			
			
			
			
				
			}else{
				
				echo "incorrect pass";
			
			}
			
			
		}else{
			
			echo "incorrect user";
			
			}
	}else {
			echo"this name is not registerd";	
			
		
	}
	
	
}

?>


<!-- Admin Loging -->
 
 
 	 <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <h5 class="modal-title text-info text-uppercase" id="exampleModalLabel">Admin Login</h5>
        <button type="button " class="close btn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form action="" class="form-group" method="post">
			<label>Username:</label>
			<input type="text" class="form-control  col-sm-12" name="user" placeholder="Username">
			<label class="control-label">Password:</label>
            	<div  class="form-group">
			<input type="Password" class="form-control col-sm-12 " name="pass" placeholder="Password">
     </div>
     
     
		<button type="submit"  name="login" class="btn  btn-info text-center  fa   fa-key">Sign-In</button>
   
		</form>
       
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
 
 
  <!--End  Admin Loging -->



