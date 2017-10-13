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
	
		<div id="block1">	
			<div id="menu">
				<a id='trigger'><img src="img/mn.png"></a>
				<div id='box' style="display:none;">
					<ul>
						<li><a href="#block1">example</a></li>
						<li><a href="#block2">example</a></li>
						<li><a href="#block3">example</a></li>
						<li><a href="#block4">example</a></li>
						<li><a href="#block5">example</a></li>
					</ul>
				</div>	
			</div>
			
			<div><img src="img/lateko.png"></div>
			<div class="content">
				<h1><b>HERCUS karte</b> ar kredītlīniju -</h1>
				<h2>Jūsu pirkumu brīvība</h2>

				<p>Vēlaties iegūt ikvienam Jūsu plānotajam vai 
				neplānotajam pirkumam? Vēlaties veikt pirku-
				mu uzreiz, bet par to norēķinātos pakāpeniski?
				Mūsu atbilde Jums - HERCUS karte ar kredītlīniju
				līdz pat 3000 € apmērā.</p>
				
				<button>piesakies</button>
			</div>
		</div>
		
		<div id="block2">
			<div class="content2">
				<h3>Kāpēc HERCUS karte ar<br> kredītlīniju ir <b>labāka izvēle?</b></h3>
				<p>
				HERCUS karti ar kredītlīniju savā rīcībā kā drošības spilvenu varat iegūt pilnīgi par brīvu. Jums nebūs jāmaksā ne par kartes, ne par kredītlīnijas uzturēšanu. Tikai pēc pirkuma veikšanas, Jums būs jāatmaksā daļa no iztērētās summas un tās izmantošanas procenti.
				</p>
				
				<div class="wrap">
					<div class="wr">
						<div class="wrapimg"><img src="img/icons/1.png"></div>
						<div><h6>Operatīva kredītlīnijas noformēšana</h6></div>
					</div>
					<div class="wr">
						<div class="wrapimg"><img src="img/icons/2.png"></div>
						<div><h6>Bezmaksas HERCUS kartes uzturēšana</h6></div>
					</div>
					<div class="wr">
						<div class="wrapimg"><img src="img/icons/3.png"></div>
						<div><h6>Iespēja veikt pirkumus visur, kur var norēķināties ar MasterCard</h6></div>
					</div>
					<div class="wr">
						<div class="wrapimg"><img src="img/icons/4.png"></div>
						<div><h6>Viens līgums - vairāki pirkumišana</h6></div>
					</div>
					<div class="wr">
						<div class="wrapimg"><img src="img/icons/5.png"></div>
						<div><h6>Iespēja izlietoto summu atmaksāt uzreiz vai pa daļām</h6></div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="block3">
			<div class="content3">
				<h3>Kāpēc <b>HERCUS karte</b><br> ar kredītlīniju?</h3>
				<p>
				Apvienojot pasaulē pazīstamās Mastercard un kredītlīnijas priekšrocības,
				AS "LATEKO LĪZINGS" izveidoja pavisam jaunu un modernu piedāvājumu – HERCUS karti ar kredītlīniju.
				</p>
			</div>
			<div class="buttonflex">
				<div><a><img src="img/1.png"></a></div>
				<div><a><img src="img/2.png"></a></div>
			</div>
		</div>
		
		<div id="block4">
			<div class="content4">
				<h3><b>Kā iegūt</b> HERCUS karti<br> ar kredītlīniju?</h3>
				<button>piesakies</button>
			</div>
			
			<div class="content5">
				<div class="flex">
					<div><img src="img/icons/6.png"></div>
					<div><h1>AIZPILDI PIETEIKUMU</h1>
					<p>Internetā<br>
					Zvanot pa tālr. +371 67775079<br>
					Ierodoties jebkurā AS "LATEKO LĪZINGS" filiālē.</p></div>
				</div>
				<div class="flex">
					<div><img src="img/icons/12.png"></div>
					<div><h1>PARAKSTI LĪGUMU</h1>
					<p>Saskaņā ar Jūsu ienākumiem un kredītvēsturi AS<br>
					"LATEKO LĪZINGS" klientu apkalpošanas speciālisti<br>
					noteiks Jūsu kredītlīnijas maksimālo apmēru.<br>
					Jums atliks vien noslēgt kreditēšanas līgumu.</p></div>
				</div>
				<div class="flex">				
					<div><img src="img/icons/13.png"></div>
					<div><h1>AKTIVIZĒ UN SĀC LIETOT</h1>
					<p>Pēc līguma noslēgšanas aktivizējiet HERCUS<br>
					MasterCard norēķinu karti Jums ērtākajā veidā:<br>
					Zvanot pa tālr. +371 67775079<br>
					Ierodoties jebkurā AS "LATEKO LĪZINGS" filiālē.</p></div>
				</div>
			</div>
		</div>
	
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
