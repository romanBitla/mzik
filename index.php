<?php
$con=mysql_connect("localhost","root","");

	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("wdc",$con);
	session_start();
	$result = mysql_query("SELECT * FROM mzik");
	
  

?>	
		<!DOCTYPE html>
<html lang="en">
<head>
<title>mZik</title>
<meta charset="utf-8">
<meta name="mZik" content="Your sound station" />
<meta name="keywords" content="music, network, sound, social, upload, browse" />
<meta name="author" content="PrAdAt" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/login.css" type="text/css" media="all">
<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="js/js-image-slider.js" type="text/javascript"></script>   
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/ITC_Busorama_500.font.js"></script>


</head>
<body id="page1">
<div class="wrap">
   <!-- header -->
   <header>
   <div class="container">
         <h1></h1>
      <nav>
         <ul>
            <li class="m1"><a href="index.php" class="active"><span>mZik</span></a></li>
            <li class="m2"><a href="profile.php"><span>Profile</span></a></li>
			<li class="m4"><a><span>
		<?php 	$row = mysql_fetch_array($result);
				$ch=0;
				if($row['email-id']==$_SESSION['username'])
				{
				echo "welcome ".$row['firstname'] . " " . $row['surname'];
				$ch=1;
				}
				else
				while($row = mysql_fetch_array($result))
					{
					if($row['email-id']==$_SESSION['username'])
						break;
						}
 
				if ($ch== 0) echo "welcome ".$row['firstname'] . " " . $row['surname'];		?>
				
				
				
				</span></a></li>
			<li class="m3"><a href="logout.php">		
			<span>Logout</span></a></li>
			
            
         </ul>
      </nav>
   </div>
   </header>
   
     <div id="sliderFrame">
        <div id="slider">
            
                <img src="slider/1.jpg"  alt="Gangnam Style"/>
            
            <img src="slider/2.jpg" alt="One More Night" />
            <img src="slider/3.jpg" alt="Diamonds"/>
            <img src="slider/4.jpg" alt="We are never getting back together"/>
        </div>
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb">
                <div class="frame"><img src="slider/12.jpg" /></div>
                <div class="thumb-content"><p>Gangnam Style</p>PSY</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="slider/22.jpg" /></div>
                <div class="thumb-content"><p>One More Night</p>Maroon 5</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="slider/32.jpg" /></div>
                <div class="thumb-content"><p>Diamonds</p>Rihanna</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="slider/42.jpg" /></div>
                <div class="thumb-content"><p>We are never getting back</p>Taylor Swift</div>
                <div style="clear:both;"></div>
            </div>
        </div>

        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
        <div style="clear:both;height:0;"></div>
    </div>
	
   <div class="container">
      
      <!-- content -->
      <section id="content">
         <div class="wrapper">
		 
		 
            <article class="col-1">
               <center><h2><br>What is mZik ?</br></h2>
			    <ul class="list">
				<li><strong>Your quest for Music ends here</strong></li>
                  <li><strong>65536 users and counting</strong></li>
                  <li><strong>198453 songs uploaded</strong></li>
                                </ul>
               
              
               <p class="p0">A pioneering FTP file sharing Internet service that emphasizes sharing audio files, typically music, encoded in MP3 format.Founded in October 2012, mZik allows billions of people to discover, listen and share originally-created music. mZik provides a forum for people to connect, inform, and inspire others across the globe and acts as a distribution platform for original content creators. </br></br></p>
            </center></article>
            
         </div>
      </section>
      <div class="clear"></div>
   </div>
</div>
<!-- footer -->
<footer>
   <div class="container">
     
      <div class="inside"> &copy 
         <a rel="nofollow" class="new_window">mZik</a> designed by PrAdAt  </div>
   </div>
</footer>
</body>
</html>
