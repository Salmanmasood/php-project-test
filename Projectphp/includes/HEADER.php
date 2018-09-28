 <?php 
	session_start();			
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../css/slider.css" rel="stylesheet" type="text/css" media="all"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>



    <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Need help?</span> call us <span class=""></span></span></p>
			</div>
			<div class="account_desc">
				<ul>
                <?php 
				if(!empty($_SESSION["u_id"]))
				{
					echo '
					<li><a href="http://localhost:8080/Projectphp/pages/postAd.php">Post An Ad</a></li>';
					
				}
				else if (!empty($_SESSION["ad_id"]))
				{
				echo '
					<li><a href="http://localhost:8080/Projectphp/pages/dashboard/pages/index.php">Admin Pannel</a></li>';
					
					
				}
				else
				{
					echo '
					<li><a href="#">Register</a></li>
					<li><a href="http://localhost:8080/Projectphp/pages/AdminLogin.php">Admin Login</a></li>
					<li><a href="http://localhost:8080/Projectphp/pages/userlogin.php">User Login</a></li>
					
					
					';
				}
				
 				if(!empty($_SESSION["ad_id"]) || !empty($_SESSION["u_id"]))
           	{
		
echo ' <li><a href="#"><form method="post" style="display:inline ">
        <input type="submit" value="LogOut" name="logout" class="btn-link">
        </form></a></li>


';

	       } 
		   
		   
	if(isset($_POST['logout']))
	{ session_destroy(); 
	header("Location:http://localhost:8080/Projectphp/index.php");  
					
			}
				?>
		
        
       
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="../images/logo.png" alt="" /></a>
			</div>
			  <div class="cart">
			  	   <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="">Home</a></li>
			    	<li><a href="">About</a></li>
			    	<li><a href="">Delivery</a></li>
			    	<li><a href="">News</a></li>
			    	<li><a href="">Contact</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	     </div>	     


</body>
</html>