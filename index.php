<?php
	include 'assets/langs.php';
	
?>


<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>hercus</title>
		
		<script src="js/jquery-3.2.1.js"></script>
		
		<script>
    	$(document).ready(function(){
			$('a[href^="#"]').bind('click.smoothscroll',function (e) {
 			/*e.preventDefault();
 
			var target = this.hash,
 			$target = $(target);
 
			$('html, body').stop().animate({
 				'scrollTop': $target.offset().top
 			}, 500, 'swing', function () {

 			window.location.hash = target;
			});*/
			var body = $("html, body");
body.stop().animate({scrollTop:1000}, 1, function() { 
   //alert("Finished animating");
});
			});
			});
		</script>

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
			
    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
	
			<div id="menu">
				<a id='trigger'><img src="img/mn.png"></a>
				
				<div id='box' style="display:none;">
					<ul>
						<li><a href="#block1">example</a></li>
						<li><a href="#block2">example</a></li>
						<li><a href="#block3">example</a></li>
						<li><a href="#block4">example</a></li>
						<li><a href="#block5">example</a></li>
						<li><a href="?lang=lv"><?php echo $language[$lang]['LV'] ?></a></li>
						<li><a href="?lang=ru"><?php echo $language[$lang]['RU'] ?></a></li>
					</ul>
				</div>
			</div>
	
		<div id="block1">	
				
			<div><img src="img/lateko.png"></div>
			<div class="content">
				<h1><b><?php echo $language[$lang]['hercus-cart'] ?></h1>
				<h2><?php echo $language[$lang]['freepay'] ?></h2>

				<p><?php echo $language[$lang]['credit'] ?></p>
				
				<button><?php echo $language[$lang]['subscribe'] ?></button>
			</div>
		</div>
		
		<div id="block2">
			<div class="content2">
				<h3><?php echo $language[$lang]['why_hercus'] ?></b></h3>
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
				<h3><b><?php echo $language[$lang]['how_get_cart']?></h3>
				<button><?php echo $language[$lang]['subscribe']?></button>
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
		
	</body>
</html>
