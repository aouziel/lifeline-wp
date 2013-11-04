<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>International Lifeline Fund</title>
	
	<link rel="stylesheet" href="../assets/css/style.css">
	<script src="assets/js/stuHover.js" type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	

</head>
<body>



	
	<header class="default"> 
		<div class="container full">
		
			<div class="logo">
				<a href="index.php"><img src="../assets/images/logo.png"></a>

			</div>
			<div class="side_menu">
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'sub_nav' ) ); ?>
					
				</ul>
				<form>
			    	<input type="email" name="email" placeholder="Newsletter">
			    	<button type="submit">
			    		<img src="../assets/images/newsletter.png" alt="">
			    	</button>

			    </form>
			</div>
			<nav id="nav">
				<ul class="select">


				<?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?>

                        <ul class="sub about ">
                            <li><a href="">history</a></li>
                            <li><a href="">our vision & mission</a></li>
                            <li><a href="">team</a></li>
                            <li><a href="">board</a></li>
                            <li><a href="">partners</a></li>
                        </ul>
	                
						<ul class="sub initiatives <?php echo $subnav_class; ?>">
                            <li><a href="">clean water</a></li>
                            <li><a href="">fuel efficent technology</a></li>
                            <li><a href="">micro enterprise</a></li>
                        </ul>
					
						 <ul class="sub take_action ">
                            <li><a href="">raise funds</a></li>
                            <li><a href="">donate</a></li>
                            <li><a href="">stay informed</a></li>
                        </ul>
					
						<li class="right"> <a href"#"> <img src="../assets/images/header_twit.png" alt=""></a></li>
						<li class="right"> <a href"#"> <img src="../assets/images/header_fb.png" alt=""></a></li>
					
				</ul>
			</nav>
		</div>
	</header>