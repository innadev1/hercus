<?php
	include 'assets/langs.php';
	
?>
<?php
		$mailSuccess = "";

		
		$error_message_n = "";
		$error_message_n2 = "";
		$error_message_p_code = "";
		$error_message_p_code2 = "";
        $error_message_l_n = "";
        $error_message_l_n2 = "";
		$error_message_p1 = "";
        $error_message_p2 = "";
        $error_message_m = "";

	if(isset($_POST['emailsent']))
	{
		echo ($error_message_n);
		echo ($error_message_n2);
		echo ($error_message_p_code);
        echo ($error_message_p_code2);
        echo ($error_message_l_n);
        echo ($error_message_l_n2); 
		echo ($error_message_p1);
        echo ($error_message_p2);
		echo ($error_message_m);
	
        $name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$pass = $POST['p_code'];
        $phone = $_POST['phone'];
        $email = $_POST['mail'];
	
		$error_message_n = "";
		$error_message_n2 = "";
		$error_message_p_code = "";
		$error_message_p_code2 = "";
        $error_message_l_n = "";
        $error_message_l_n2 = "";
		$error_message_p1 = "";
        $error_message_p2 = "";
        $error_message_m = "";

		$errors = ['name'=>0,'lastname'=>0, 'p_code'=> 0,'phone'=>0,'mail'=>0];

		$email_exp_a = "/[^A-Za-z]/";

        // Pārbaudes ----------------------------------------------->

		// Name
		if(strlen($name) < 2) {
        	$error_message_n .= '<p class="red">Name too short.</p>';
			$errors['name'] = 1;
		}
		
		if(preg_match($email_exp_a,$_POST['name'])) {
			$error_message_n2 .= '<p class="red">Only alphabet.</p>';
			$errors['name'] = 1;
        }

        	// LastName
		if(strlen($lastname) < 2) {
        	$error_message_l_n .= '<p class="red">Lastname too short.</p>';
			$errors['lastname'] = 1;
		}
		
		if(preg_match($email_exp_a,$_POST['lastname'])) {
			$error_message_l_n2 .= '<p class="red">Only alphabet.</p>';
			$errors['lastname'] = 1;
		}
		
		// Pass
		if(strlen($_POST['p_code']) <= 10) {
        	$error_message_p_code .= '<p class="red">Personal code too short!</p>';
			$errors['p_code'] = 1;
		}

		if(preg_match($email_exp_a,$_POST['p_code'])) {
			$error_message_p_code2 .= '<p class="red">Only alphabet.</p>';
			$errors['p_code'] = 1;
		}
		
		// PHONE
		$error_message = "";
    	$email_exp = "/[^0-9]/";
 
    	if(preg_match($email_exp,$_POST['phone'])) {
        	$error_message_p1 .= '<p class="red">only numbers!</p>';
			$errors['phone'] = 1;
    	}
		if(strlen($_POST['phone']) < 7) {
        	$error_message_p2 .= '<p class="red">Phone too short!</p>';
			$errors['phone'] = 1;
		}
		
		// EMAIL 
		$error_message = "";
    	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
    	if(!preg_match($email_exp,$email)) {
        	$error_message_m .= '<p class="red">Please enter email!</p>';
			$errors['mail'] = 1;
		}
    

        // Email Sūtīšana ----------------------------------------------->

		$mailSuccess = false;
		if( empty($error_message_n) && empty($error_message_l_n) && empty($error_message_p) && empty($error_message_p_code) ) {
			$to      = 'my.worktest94@gmail.com';
			$subject = 'the Client';
			$message = "Name:" . " " . $name . "\r\n" . "Lastname:" . " " . $lastname . "\r\n" . "Password:" . " " . $pass . "\r\n" . "Phone:" . " " . $phone . "\r\n" . "E-Mail:" . " " . $email;
			$headers = 'From:' . $email . "\r\n" .
			'Reply-To:' . $email . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			if(mail($to, $subject, $message, $headers)){
				$mailSuccess = true;
			}
			
			// echo "check Your Email";
		}else{
			
			// $reply = "reply";
		}
	}
?>

<html>
    <head>     
         <meta name="google-site-verification" content="eSPYQKOOBrs3N3ba-4lgJ-AEYJiC9cZ9CxPWFwYSo2k" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  

		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/form.css">

        <title>hercus</title>
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/jquery.mask.js"> </script>	

		
		
	
			
			<!--formas-->
		

			<script>
				$(function(){


					
					$('#menu img').click(function(){
						$('#box').toggle()
					})



					var sent = <?php if (isset($_POST['short_form'])||isset($_POST['long_form'])) { echo "true";}else{echo "false";}; ?>


					$(".toggler").click(function () {
						if (sent) {
							$('.mailSuccess').css('display','block')
						}else{
							$("#box1").css("display","block");
						}
					});
					$(".close").click(function () {
						$("#box1").css("display","none");
					});
				});
			</script>
			
    </head>

	<body>

		<?php include 'assets/header.php'; ?>
	
			<div id="menu">
				<a id='trigger'><img src="img/mn.png"></a>
				
				<div id='box' style="display:none;">
					<ul>
						<!--<li><a href="#block1">example</a></li>
						<li><a href="#block2">example</a></li>
						<li><a href="#block3">example</a></li>
						<li><a href="#block4">example</a></li>
						<li><a href="#block5">example</a></li>-->
						<li><a href="?lang=lv"><?php echo $language[$lang]['LV'] ?></a></li>
						<li><a href="?lang=ru"><?php echo $language[$lang]['RU'] ?></a></li>
					</ul>
				</div>
			</div>
		

		<!-- PHP IF FORM HAS BEEN SUBMITED-->

			<?php if (isset($_POST['short_form'])||isset($_POST['long_form'])) {
			?>
			<div class="mailSuccess">
				<div class="close"><a><img src="img/close_form_w.png"></a></div>
				<div>
					<?php echo $language[$lang]['1'] ?>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
				</div>
			</div>

			<?php
			} ?>







		<div id="block1">	
				
			<div><img src="img/lateko.png"></div>
			<div class="content">
				<h1><b><?php echo $language[$lang]['hercus-cart'] ?></b></h1>
				<h2><?php echo $language[$lang]['freepay'] ?></h2>

				<p><?php echo $language[$lang]['credit'] ?></p>
				
				<button class="toggler"><?php echo $language[$lang]['subscribe1'] ?></button>
			</div>
		</div>
		
		<div id="block2">
			<div class="content2">
				<h3><b><?php echo $language[$lang]['why_hercus'] ?></b></h3>
				<p><?php echo $language[$lang]['hercus_credline'] ?></p>
				
				<div class="wrap">
					<div class="wr">
						<div class="wrapimg"><img src="img/icons/1.png"></div>
						<div><h6><?php echo $language[$lang]['1.1'] ?></h6></div>
					</div>
					<div class="wr">
						<div class="wrapimg"><img src="img/icons/2.png"></div>
						<div><h6><?php echo $language[$lang]['1.2'] ?></h6></div>
					</div>
					<div class="wr">
						<div class="wrapimg"><img src="img/icons/3.png"></div>
						<div><h6><?php echo $language[$lang]['1.3'] ?></h6></div>
					</div>
					<div class="wr">
						<div class="wrapimg"><img src="img/icons/4.png"></div>
						<div><h6><?php echo $language[$lang]['1.4'] ?></h6></div>
					</div>
					<div class="wr">
						<div class="wrapimg"><img src="img/icons/5.png"></div>
						<div><h6><?php echo $language[$lang]['1.5'] ?></h6></div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="block3">
			<div class="content3">
				<h3><?php echo $language[$lang]['why_cart2'] ?></h3>
				<p>
				<?php echo $language[$lang]['lizing']?>
				</p>
			</div>
			<!--<div class="buttonflex">
				<div><a><img src="img/1.png"></a></div>
				<div><a><img src="img/2.png"></a></div>
			</div>-->
		</div>
		
		<div id="block4">
			<div class="content4">
				<h3><b><?php echo $language[$lang]['how_get_cart']?></b></h3>
				<button class="toggler"><?php echo $language[$lang]['subscribe1']?></button>
			</div>
			
			<div class="content5">
				<div class="flex">
					<div><img src="img/icons/6.png"></div>
					<div><h1><?php echo $language[$lang]['write_subscribe']?></h1>
					<p><?php echo $language[$lang]['internet']?><br>
					<?php echo $language[$lang]['call']?></p></div>
				</div>
				<div class="flex">
					<div><img src="img/icons/12.png"></div>
					<div><h1><?php echo $language[$lang]['write_contract']?></h1>
					<p><?php echo $language[$lang]['credit_history']?></p></div>
				</div>
				<div class="flex">				
					<div><img src="img/icons/13.png"></div>
					<div><h1><?php echo $language[$lang]['active']?></h1>
					<p><?php echo $language[$lang]['after_reg']?></p></div>
				</div>
			</div>
		</div>
		
		<div id="block5">
			<div class="content6">
				<h3 style="opacity: 0"><?php echo $language[$lang]['block5h3']?></h3>
				<h5><?php echo $language[$lang]['block5h5']?></h5>
				<p><?php echo $language[$lang]['block5p']?></p>
				<br>
				<p><a href="https://www.latekolizings.lv/" target="_blank">https://www.latekolizings.lv/</a></p>
			</div>
		</div>
	
		<?php include 'assets/footer.php'; ?>
		
		
		<!--FORMAS FORMAS FORMAS FORMAS FORMAS-->
		
		<!--GALVENA-->
		<div id="box1" style="display:none">
			<div class="box_content">
				<div class="close"><a><img src="img/close_form.png"></a></div>
				
				<div class="text_in_form">
				<h5><?php echo $language[$lang]['form_type'];?></h5>
				
				<button class="button_green" id="isa"><?php echo $language[$lang]['phone_form']; ?></button>
				<button class="button_blue" id="gara"><?php echo $language[$lang]['online_form']; ?></button>
				</div>
			</div>
		</div>
		
		<!--ISA-->

		
		<div id="box2" style="display:none">
		
		<div id="boxx">
				<div class="box_content">
					<!-- <div class="green-background"><p><?php echo $language[$lang]['form'] ?></p></div> -->
					<div class="close"><a><img src="img/close_form_w.png"></a></div>
					<?php include 'longreg2.php' ?>
					<p id="counter">1/6</p>
				</div>
			</div>
		
		</div>
		

		
	
		<div id="box3" style="display:none">
			<div class="box_content">
				<div class="blue-background"><p><?php echo $language[$lang]['pers.info'] ?></p></div>
				<div class="close"><a><img src="img/close_form.png"></a></div>
				
				<!-- coming soon -->
				
			</div>
		</div>

		<div id="short_form" class="">
			<div class="box_content">
				
				<div class="person_information ">
				<div class="green-background"><h1><?php echo $language[$lang]['pers.info'] ?></h1><div class="close"><img src="img/close_form_w.png"></div></div>
						<form id="sform" method="POST" action="index.php">						<!-- NAME -->
							<div class='inputs' >
								<div class="bookinput">
									<label for="s_namea"><?php echo $language[$lang]['f.name'] ?></label>
									<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>" name="name" size="20" class="wpcf7-text" required="required" id="s_name" lenght="2" chtype="tekstLen" onkeyup="checkk($(this))"></span>
								</div>

								<div class="bookinput">
									<label for="s_lastname"><?php echo $language[$lang]['l.name'] ?></label>
									<span class="your-name"><input type="text" value = "<?php if(isset($_POST['lastname'])){ echo $_POST['lastname']; } ?>" name="lastname" size="20" class="wpcf7-text" required="required" id="s_lastname" lenght="2" chtype="tekstLen" onkeyup="checkk($(this))"></span>
								</div>

								<div class="bookinput" style="width: 30%;">
									<span>
										<select name="phone_loc" class="option_phone_loc">
											<option value="LV +371">LV(+371)</option>
											<option value="EE +372">EE(+372)</option>
											<option value="LT +370" >LT(+370)</option>
										</select>
									</span>
								</div>
								<!-- PHONE -->
								<div class="bookinput" style="width: 70%;">
									<label for="s_phone"><?php echo $language[$lang]['phone1']?></label>
									<span class="your-name"><input type="tel" value = "<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>" name="phone" size="20" class="wpcf7-text" required="required" id="s_phone" lenght="8" chtype="tekstLen" onkeyup="checkk($(this))"></span>
								</div>

								<!-- EMAIL -->
								<div class="bookinput">
									<label for="s_email"><?php echo $language[$lang]['email']?></label>
									<span class="your-name"><input type="text" value = "<?php if(isset($_POST['mail'])){ echo $_POST['mail']; } ?>" name="mail" size="20" class="wpcf7-text"  id="s_email" chtype="emailcheck" onkeyup="checkk($(this))"></span>
								</div>
							</div>
							<div><p><?php echo $language[$lang]['phone_agree']; ?></p></div>
							<div class="button_submit_in_short_form">
								<input type="submit" name="short_form" value="<?php echo $language[$lang]['submit_short'] ?>">
							</div>
						</form>
				</div>
			</div>
		</div>
		
	</body>
</html>
