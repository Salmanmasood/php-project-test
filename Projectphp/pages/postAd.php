<?php 
session_start(); 
if(empty($_SESSION["u_id"]))
{
header("Location:http://localhost:8080/Projectphp/index.php");  
}
?>







<?php 

require '../includes/connection.php';





if(isset($_POST['submit']))
{ 


$filename=$_FILES['upload']['name'];
$tmp=$_FILES['upload']['tmp_name'];

$folder="uploads/".$filename;
move_uploaded_file($tmp,$folder);


$productname=$_POST['Name'];
$price=$_POST['Price'];
$id= $_SESSION['u_id'];


if($productname!=""  && $folder!="" && $price!="")
{
$query="INSERT INTO `tbl_product`(`pro_name`, `pro_image`, `u_id`, `p_price`) VALUES ('$productname','$folder','$id','$price')";

$run=mysqli_query($conn,$query);

header("Location:http://localhost:8080/Projectphp/index.php");  
}
else
{
echo "<script>alert('Please Insert All Field....')</script>";	
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
         <div> <h1>Post An Ad</h1></div>
         
       




                   <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                        
                        <input  type="text"  name="Name" class="form-control" placeholder="Name" required />
                        
                         
                      </div>
                       
     
                     </div>

                       <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                      
                       
                                      <input  type="text"  name="Price" class="form-control" placeholder="Price"  required="required" />
                         
                      </div>
     
                     </div>


            
                       
                       
                                          <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                        
                        
                        
                        <input type="file" name="upload" class="form-control">
                        
                        
                        
                         
                      </div>
                       
     
                     </div>

                       
                       
                       



                      <div class="form-group"  >
                         
                          
                            <input type="submit" value="SignIn" name="submit"  class="form-control  btn-success">
                            
                         </div>
              

                      <div class="form-group"  >
                          <asp:Label ID="Label1" runat="server" Text="" ForeColor="Red"></asp:Label>
                         </div>
              

            
           
		</div>
	</div>


</div>


    </form>



   
</body>
</html>
