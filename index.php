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
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/form.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>hercus</title>
		
		<script src="js/jquery.mask.js"> </script>	
		<script src="js/jquery-3.2.1.js"></script>
		
			<script>
					window.onload= function() {
					document.getElementById('trigger').onclick = function() {
						openbox('box', this);
						return false;
					};
				};
					function openbox(id, toggler) {
						var div = document.getElementById(id);
						if(div.style.display == 'block') {
							div.style.display = 'none';
						}
						else {
							div.style.display = 'block';
						}
				}
			</script>
			
			<!--formas-->
			<script>
			$(document).ready(function(){
				$(".toggler").click(function () {
				$("#box1").css("display","block");
			});
				$(".close").click(function () {
				$("#box1").css("display","none");
				$("#box2").css("display","none");
				$("#box3").css("display","none");
			});
			
			
			
			
				$("#isa").click(function () {
				$("#box2").css("display","block");
				$("#box1").css("display","none");
			});
			
				$("#gara").click(function () {
				$("#box3").css("display","block");
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
	
		<div id="block1">	
				
			<div><img src="img/lateko.png"></div>
			<div class="content">
				<h1><b><?php echo $language[$lang]['hercus-cart'] ?></b></h1>
				<h2><?php echo $language[$lang]['freepay'] ?></h2>

				<p><?php echo $language[$lang]['credit'] ?></p>
				
				<button class="toggler"><?php echo $language[$lang]['subscribe'] ?></button>
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
			<div class="buttonflex">
				<div><a><img src="img/1.png"></a></div>
				<div><a><img src="img/2.png"></a></div>
			</div>
		</div>
		
		<div id="block4">
			<div class="content4">
				<h3><b><?php echo $language[$lang]['how_get_cart']?></b></h3>
				<button class="toggler"><?php echo $language[$lang]['subscribe']?></button>
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
	
		<?php include 'assets/footer.php'; ?>
		
		
		<!--FORMAS FORMAS FORMAS FORMAS FORMAS-->
		
		<!--GALVENA-->
		<div id="box1" style="display:none">
			<div class="box_content">
				<div class="close"><a><img src="img/close_form.png"></a></div>
				
				<div class="text_in_form">
				<h5>Izvēlies pieteikuma<br>formas veidu!</h5>
				
				<button class="button_green" id="isa">Īsā pieteikšanās</button>
				<button class="button_blue" id="gara">Garā pieteikšanās</button>
				</div>
			</div>
		</div>
		
		<!--ISA-->
		<div id="box2" style="display:none">
			<div class="box_content">
				<div class="green-background"><p>ĪSĀ PIETEIKŠANĀS</p></div>
				<div class="close"><a><img src="img/close_form.png"></a></div>

					<?php if(isset($_POST['emailsent'])) { ?>

							style="display: block;" <?php
							
					}else{
						?>	
							 <?php
					} ?>
					<?php if(!$mailSuccess){ ?>
								
					<div class="remodal" data-remodal-id="modal" style="visibility: visible;">

						<form id="form" name="orderform" method="post" action="shortreg.php">

						<div class="name">
							<div class="bookinput">
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['name']) && $errors['name'] == 0){ echo $_POST['name']; } ?>" name="name" size="20" class="wpcf7-text" required="required" placeholder="Vārds"></span>
							</div>
							<!--ERRROR  -->
								<?php echo ($error_message_n); ?>
								<?php echo ($error_message_n2); ?>
							<!--END-->

							<div class="bookinput">
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['lastname']) && $errors['lastname'] == 0){ echo $_POST['lastname']; } ?>" name="lastname" size="20" class="wpcf7-text" required="required" placeholder="Uzvārds"></span>
							</div>
							<!--ERRROR  -->
								<?php echo ($error_message_l_n); ?>
								<?php echo ($error_message_l_n2); ?>
							<!--END-->
						</div>
							<!-- PERSONAL CODE -->
							<div class="bookinput">
							<span class="your-name" id="code"><input type="text" value = "<?php if(isset($_POST['p_code']) && $errors['p_code'] == 0){ echo $_POST['p_code']; } ?>" name="p_code" size="20" class="wpcf7-text" required="required" placeholder="Personālais kods" id="p_code" data-mask="000000-00000"></span>
							<?php echo ($error_message_p_code); ?>
							<?php echo ($error_message_p_code2); ?>

						<div class="kontakti">
							<div class="bookinput">
								<span class="your-name"><input type="tel" value = "<?php if(isset($_POST['phone']) && $errors['phone'] == 0){ echo $_POST['phone']; } ?>" name="phone" size="20" class="wpcf7-text" required="required" placeholder="Tel."></span>
							</div>
							<!--ERRROR  -->
								<?php echo ($error_message_p1); ?>
								<?php echo ($error_message_p2); ?>
							<!--END-->

							<div class="bookinput">
								<span class="your-name"><input type="text" value = "<?php if(isset($_POST['mail']) && $errors['mail'] == 0){ echo $_POST['mail']; } ?>" name="mail" size="20" class="wpcf7-text" placeholder="Epasts:"></span>
							</div>
							<!--ERRROR  -->
								<?php echo ($error_message_m); ?>
							<!--END-->
						</div>
						
							<div class="col-sm-12">
								<input class="blackbutton" type="submit" name="emailsent" value="Send">
							</div>					

						</form>
					
						<?php
							}else if($mailSuccess){
												
								$checkemail = "<p>Check your Email</p>";
											
									echo $checkemail;
							} ?>					
						</div>
					</div>
				
			</div>
		</div>
		
		<!--GARA-->
		<div id="box3" style="display:none">
			<div class="box_content">
				<div class="blue-background"><p>Personīgā informācija</p></div>
				<div class="close"><a><img src="img/close_form.png"></a></div>
				
				coming soon
				
			</div>
		</div>
		
	</body>
</html>
