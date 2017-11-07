<?php
	include 'assets/langs.php';
?>



<link rel="stylesheet" type="text/css" href="style/footer.css">

<footer class="wrapf">
	<div id="footer">
		<div class="footer_logo"><a href="https://latekolizings.lv/"><img src="img/lateko.png"></a></div>
		<div id="f">
			<ul>
				<li><h5><?php echo $language[$lang]['contacts']?></h5></li>
				<li><a>Lāčplēša iela 41, <br>Rīga, LV-1011</a></li>
				<li><a>67775079</a></li>
				<li><a>info@latekolizings.lv</a></li>
			</ul>
		</div>
		<div id="s">
			<ul>
				<li><h5><?php echo $language[$lang]['client']?></h5></li>
				<li><a href="<?php echo $language[$lang]['f1'] ?>"><?php echo $language[$lang]['ak']?></a></li>
				<li><a href="<?php echo $language[$lang]['f2'] ?>"><?php echo $language[$lang]['qe']?></a></li>
				<li><a href="<?php echo $language[$lang]['f3'] ?>"><?php echo $language[$lang]['pa']?></a></li>
			</ul>
		</div>
		<div id="t">
			<ul>
			<li><h5><?php echo $language[$lang]['latlizing']?></h5></li>
			<li><a href="<?php echo $language[$lang]['f4'] ?>"><?php echo $language[$lang]['us']?></a></li>
			<li><a href="<?php echo $language[$lang]['f5'] ?>"><?php echo $language[$lang]['part']?></a></li>
			<li><a href="<?php echo $language[$lang]['f6'] ?>"><?php echo $language[$lang]['lic']?></a></li>
			<li><a href="<?php echo $language[$lang]['f7'] ?>"><?php echo $language[$lang]['pris']?></a></li>
			</ul>
		</div>
		<div id="fo">
			<ul>
			<li><h5><?php echo $language[$lang]['jur_information']?></h5></li>
			<li><a href="<?php echo $language[$lang]['f8'] ?>"><?php echo $language[$lang]['priv']?></a></li>
			<li><a href="<?php echo $language[$lang]['f9'] ?>"><?php echo $language[$lang]['autor']?></a></li>
			</ul>
		</div>
	</div>
	<div id="footer2">
		<div class="wraps" id="fiv">
			<div><h5>STAY IN TOUCH:</h5></div>
			<div id="socials">
				<div><a href="https://www.facebook.com/hercuskarte.lv/"><img src="img/fb.png"></a></div>
				<div><a href="https://www.instagram.com/hercuskarte.lv/"><img src="img/inst.png"></a></div>
				<!--<div><img src="img/tw.png"></div>
				<div><img src="img/g.png"></div>
				<div><img src="img/in.png"></div>
				<div><img src="img/y.png"></div>-->
			</div>
		</div>
		<div><p><?php echo $language[$lang]['2']?></p></div>
	</div>
</footer>