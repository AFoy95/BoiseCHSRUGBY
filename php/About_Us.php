
<?php
	session_start();
?>

<html>
  <header><title>About Us</title></header>
  <head>
  <link href="/css/About_Us.css" type="text/css" rel="stylesheet" />
  </head>
						<div id="header">
                                <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
							
							<div class="topnav">
								<a href="/php/main_page.php">Main-page</a>
								<a class="active" href="/php/About_Us.php">About-Us</a>
								<a href="/php/Personal_Bios.php">Personal-Bios</a>	
								<a href="/php/Schedules.php">Schedule</a>	
								<a href="/php/Tables.php">Tables</a>
								<a href="/php/login.php">Admin Login</a>
								<?php if($_SESSION['logged_in']){
											echo" 
								<a href=/php/logout.php> LOGOUT</a> 
									";}?>
							</div>
                                </div>		
 
	<body id="background">
	  Hello all, This will be a basic page, that will include a basic
	  about us in the program. am writing something. Yes, I plan to make it the most boring thing ever written. I go to the store. A car is parked. Many cars are parked or moving. Some are blue. Some are tan. They have windows. In the store, there are items for sale. These include such things as soap, detergent, magazines, and lettuce. You can enhance your life with these products. Soap can be used for bathing, be it in a bathtub or in a shower. Apply the soap to your body and rinse. Detergent is used to wash clothes. Place your dirty clothes into a washing machine and add some detergent as directed on the box. Select the appropriate settings on your washing machine and you should be ready to begin. Magazines are stapled reading material made with glossy paper, and they cover a wide variety of topics, ranging from news and politics to business and stock market information. Some magazines are concerned with more recreational topics, like sports card collecting or different kinds of hairstyles. Lettuce is a vegetable. It is usually green and leafy, and is the main ingredient of salads. You may have an appliance at home that can quickly shred lettuce for use in salads. Lettuce is also used as an optional item for hamburgers and deli sandwiches. Some people even eat lettuce by itself. I have not done this. So you can purchase many types of things at stores. -The Bradezone
  </body>
  <div class="footer">
  <p>&copy; boisechsrugby.com</p>
  <p>Posted by: Austin Foy</p>
  <p>Contact information: <a href="mailto:afoy95@live.com">
  afoy95@live.com</a>.</p>
</div>
</html>
