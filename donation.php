<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Caring Heart Foundation</title>
	<link rel="shortcut icon" href="assets/img/12.jpg"  height="50px" width="200px">

	<meta name="FemiFolayanSamsonPortfolio" content="Nonprofit website">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css-include -->

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- themify-icon.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- Video-min -->
	<link rel="stylesheet" type="text/css" href="assets/css/video.min.css">
	<!-- animate.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="rev-slider/css/settings.css">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" type="text/css" href="rev-slider/css/layers.css">
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" type="text/css" href="rev-slider/css/navigation.css">
	<!-- menu style -->
	<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- responsive.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>
<!-- /end of head -->
<body>
	<?php
    include("menu.php");
    ?>



	<!-- Start of Donate page content
	============================================= -->
	<section id="donate-page" class="donate-page-section">
		<div class="container">
			<div class="row section-content">
				<div class="donation-content">
					<div class="row">
						<div class="col-sm-8">
							<div class="donate-type pb50">
								<div class="row">
									<div class="col-sm-6">
										<div class="donate-info">
											<div class="side-bar-title mb20">
                                            <h3>Donation Information</h3>
                                            
											</div>
											
											
										</div>
										<!-- /info -->
									</div>
									<!-- /col-sm-6 -->
									
								</div>
							</div>
							<!-- /donate-type -->

							<div class="donar-type">
								<div class="donar-info">
									<div class="side-bar-title mb40">
                                    <div class="comment-form clearfix  mb20">
											<form method="POST" enctype="multipart/form-data">
                                            <?php
   
    include("db_conn.php");
	$rand=rand(10, 99);
                             $today=date("Ym");
                             $time=date("H:i:s"); 
                             $uin="CHFdonation" . "/" . $rand;

	 error_reporting(E_ALL);
    if(isset($_REQUEST["donate"])){
       
		$uin=$_REQUEST["uin"];
        $name=$_REQUEST["name"];
       $email=trim(addslashes($_REQUEST["email"]));
        $phone=$_REQUEST["phone"];
        $amount=trim(addslashes($_REQUEST['amount']));
       

		    // SMS API
//   $email = "christianabimbola@gmail.com";
//   $password = "jason2014";
//   $message = "Dear $fullname, your registration is successful with matric nos $matric.";
//   $sender_name = "CODEACA";
//   $recipients = $phone;
//   $forcednd = "1";

//   $data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
//   $data_string = json_encode($data);
//   $ch = curl_init('https://api.bulksmslive.com/v2/app/sms');
//   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//   curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//   curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
//   $result = curl_exec($ch);
//   $res_array = json_decode($result);
//   //print_r($res_array);

          $sql="INSERT INTO ngo_donate (uin, name, email, phone, amount) VALUES ('$uin','$name','$email','$phone','$amount')";
        

          mysqli_query($conn,$sql) or die(mysqli_error($conn));
          $num=mysqli_insert_id($conn);
          if(mysqli_affected_rows($conn)!=1){
             $message="error! Please check your input";
          }
         
          echo "<script>alert('PROCEED')
          location.href='donate/pay.php?uin=".$_REQUEST['uin']."'</script>";
    }
        
    ?>
											<div class="contact-comment-info">
											<input type="hidden" class="form-control" name="uin" placeholder="Enter UIN" value="<?php echo $uin?>" readonly required>
											</div>

												<div class="contact-comment-info">
													<input name="name" type="text" placeholder="Your Name*" required>
												</div>
												<div class="contact-comment-info">
													<input name="email" type="email" placeholder="Email*" required>
												</div>
												<div class="contact-comment-info">
													<input name="phone" type="tel" placeholder="Phone*" required>
												</div>
												<div class="contact-comment-info">
													<input name="amount" type="number" placeholder="Amount*" required>
												</div>
                                                <div class="contact-comment-info">
												<button type="donate" name="donate" value="donate">Donate</button>
												</div>
											</form>
										</div>
									</div>
									</div>
									<div class="donate-form">
									
									<!-- /col-sm-6 -->
								</div>
							</div>
							<!-- /donar-type -->
						</div>
						<!-- /col-sm-8 -->
						<div class="col-sm-4">
							<div class="side-bar-content ml15">
								<div class="side-bar-search mb40">
									<!-- <form action="#" method="get">
										<input type="text" class="" placeholder="Search here...">
										<button type="submit"><span class="ti-search"></span></button>
									</form> -->
								</div>
								<!-- /side-bar-search -->
								<div class="category mb40">
									<div class="side-bar-title mb40">
										<!-- <h3>Categories</h3> -->
									</div>
									
								</div>
								<!-- /category-item -->	
							</div>
						</div>
						<!-- /col-md-4 -->
					</div>
					<!-- /row -->
				</div>
			</div>
		</div>
	</section>
	<!-- End of  Dontae page content
	============================================= -->



	<?php
    include("footer.php");
    ?>
    
	<!-- End of footer section
	============================================= -->


	<!-- js -->
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
	<script type="text/javascript" src="assets/js/parallax.min.js"></script>
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<script type="text/javascript">new WOW().init();</script>
	<script type="text/javascript" src="assets/js/circle-progress.js"></script>
	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems !
    The following part can be removed on Server for On Demand Loading) -->

    <script type="text/javascript" src="rev-slider/js/revolution.extension.actions.min.js"></script>
    
    <script type="text/javascript" src="rev-slider/js/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="assets/js/function.js"></script>
</body> 
</html>