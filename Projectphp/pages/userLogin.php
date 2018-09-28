<?php 
session_start(); 
//error_reporting(0);
if(!empty($_SESSION["u_id"]))
{
 //header("Location:http://localhost:8080/Projectphp/pages/dashboard/pages/index.php");
 header("Location:http://localhost:8080/Projectphp/index.php");
}

?>


<?php


require '../includes/connection.php';

if(isset($_POST['submit']))
{ 
$email=$_POST['email'];
$password=$_POST['password'];

if($email!=" " && $password!=" ")
{
	
	$query="SELECT * FROM tbl_user WHERE u_email='".$email."' and u_password='".$password."'";
	$run=mysqli_query($conn,$query);
	$check=mysqli_num_rows($run);
    
	if($check > 0)
	{
		while($row=mysqli_fetch_array($run))
		
		{
		 $_SESSION['u_id']=$row['u_id'];
		}
	
//echo "online.....";
	 header("Location:http://localhost:8080/Projectphp/index.php");
	
	
	
}
else
{
echo "<p style='color:red'>Invalid Inputs.... </p>";
	
}


	


	
}

}


 ?>







<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SignUp User</title>
<link href="../css/bootstrap.css">
<link href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>

     #box{

  border: 1px solid black ;
  height: 100%;

}
#main-div{

height: 900px;
background-image:url(../img/bgadmin.jpg);
background-size:100% 900px;    

}
.insidebox{
    border: 1px solid black;
    margin: 10% auto 10% auto;
 max-width: 500px;
min-width: 200px; 
   padding-left: 60px;
   padding-right: 60px;
    
     border-radius:10px;
    
    background-color: whitesmoke;
}
div h1{
    text-align: center;
   
   
    
}
p#para{
    text-align: center;
    font-size: 14px;
}

	</style>







</head>

<body>
 
  
   <form method="post" action="">
    <script src="js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery.js"></script>

    <div id="main-div">
	<div id="box" class="img-responsive">

		<div class="insidebox">
         <div> <h1>Log In</h1></div>
         
       




                   <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                        
                        <input  type="text"  name="email" class="form-control" placeholder="Username" required />
                        
                         
                      </div>
                       
     
                     </div>

                       <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                      
                       
                                      <input  type="password"  name="password" class="form-control" placeholder="Password"  required="required" />
                         
                      </div>
     
                     </div>


            
                       



                      <div class="form-group"  >
                         
                          
                            <input type="submit" value="SignIn" name="submit"  class="form-control  btn-success">
                            
                         </div>
              

                      <div class="form-group"  >
                          <asp:Label ID="Label1" runat="server" Text="" ForeColor="Red"></asp:Label>
                         </div>
              

            <p id="para">Dont have an account? <a href="#">register now</a> </p>
           
		</div>
	</div>


</div>


    </form>



   
</body>
</html>
