<?php 
	include('largemail.php');
?>
<link rel="stylesheet" type="text/css" href="style/form.css">
<body>
	<?php 
	// print_r($_POST)
	  ?>



	<div class="remodal-overlay"
		<?php if(isset($_POST['step1'])) { ?>

				style="display: none;" <?php

		}else{
			?>
				<?php
		} ?>
		>
		<?php if(!$mailSuccess){ ?>

			<div class="remodal" data-remodal-id="modal" style="visibility: visible;">


			<form id="form" name="orderform" method="post" action="index.php">

				<div class="all-forma">
					<div class="person_information selected xxx">
						<div class="form_head">
							<h1><?php echo $language[$lang]['pers.info'] ?></h1>
						</div>
						<!-- NAME --> 
						<div class='inputs' >

							<div class="bookinput">
								<label for="amount"><?php echo $language[$lang]['amount'] ?></label>
								<span class=" your-name"><input type="number" value = "<?php if(isset($_POST['amount'])){ echo $_POST['amount']; } ?>" name="amount" size="20" class="wpcf7-text" required="required" id="amount" lenght="1" chtype="amountCheck" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<div class="bookinput">
								<label for="till"><?php echo $language[$lang]['till'] ?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['till'])){ echo $_POST['till']; } ?>" name="till" size="20" class="wpcf7-text" required="required" id="till" lenght="9" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<div class="bookinput">
								<label for="name"><?php echo $language[$lang]['f.name'] ?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>" name="name" size="20" class="wpcf7-text" required="required" id="name" lenght="2" chtype="tekstLen" onfocus="focus($(this))" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- LASTNAME -->
							<div class="bookinput">
								<label for="lastname"><?php echo $language[$lang]['l.name'] ?></label>
								<span class="your-name"><input type="text" value = "<?php if(isset($_POST['lastname'])){ echo $_POST['lastname']; } ?>" name="lastname" size="20" class="wpcf7-text" required="required" id="lastname" lenght="2" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- PERSONAL CODE -->
							<div class="bookinput">
								<label for="p_code"><?php echo $language[$lang]['pers.code'] ?></label>
								<span class="your-name"><input type="text" value = "<?php if(isset($_POST['p_code'])){ echo $_POST['p_code']; } ?>" name="p_code" size="20" class="wpcf7-text" required="required" id="p_code" data-mask="000000-00000" lenght="11" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- PHONE -->
							<div class="bookinput" style="width: 48%">
								<label for="phone2"><?php echo $language[$lang]['phone1']?></label>
								<span class="your-name"><input type="tel" value = "<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>" name="phone2" size="20" class="wpcf7-text" required="required" id="phone2" lenght="8" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- EMAIL -->
							<div class="bookinput" style="width: 48%">
								<label for="email"><?php echo $language[$lang]['email']?></label>
								<span class="your-name"><input type="text" value = "<?php if(isset($_POST['mail'])){ echo $_POST['mail']; } ?>" name="mail" size="20" class="wpcf7-text"  id="email" chtype="emailcheck" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- PASS ID NUMBER -->
							<div class="bookinput long">
								<label for="passport"><?php echo $language[$lang]['pass.numb']?></label>
								<span class="your-name"><input type="text" value = "<?php if(isset($_POST['passport'])){ echo $_POST['passport']; } ?>" name="passport" size="20" class="wpcf7-text" id="passport" lenght="8" chtype="tekstLen"  onkeyup="checkk($(this))"><div class="correct"></div></span>

							</div>

							<!-- PASS ID VALID TILL -->
							<div class="bookinput long">
								<label for="p_or_id_number_valid_till"><?php echo $language[$lang]['pass.valid.till']?></label>
								<span class="your-name"><input type="text" value = "<?php if(isset($_POST['p_or_id_number_valid_till'])){ echo $_POST['p_or_id_number_valid_till']; } ?>"  size="20" class="wpcf7-text" required="required" placeholder="" id="p_or_id_number_valid_till" lenght="8" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- VOICE PASS -->
							<div class="bookinput long">
								<label for="pass1"><?php echo $language[$lang]['voice.pass']?></label>
								<span class="your-name"><input type="password" value = "<?php if(isset($_POST['voice_pass'])){ echo $_POST['voice_pass']; } ?>" name="voice_pass" size="20" id="pass1" class="wpcf7-text" required="required"  lenght="6" chtype="tekstLen" onkeyup="checkk($(this))" ><div class="correct"></div></span>
							</div>

							<!-- RE_VOICE PASS -->
							<div class="bookinput long">
								<label for="pass2" "><?php echo $language[$lang]['re.voice.pass']?></label>
								<span class="your-name"><input type="password" value = "<?php if(isset($_POST['re_voice_pass'])){ echo $_POST['re_voice_pass']; } ?>" name="re_voice_pass" id="pass2" size="20" class="wpcf7-text" required="required" lenght="6" chtype="passw" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>
						</div>

					</div>
						

					<div class="living_place_info selected">
						<div class="form_head">
							<h1><?php echo $language[$lang]['dek.life.place']?></h1>
						</div>
						<!-- city -->
						<div class='inputs'>
							<div class="bookinput">
								<label for="city"><?php echo $language[$lang]['city']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['city'])){ echo $_POST['city']; } ?>" name="city" size="20" class="wpcf7-text" required="required" id="city" lenght="1" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- street -->
							<div class="bookinput">
								<label for="street"><?php echo $language[$lang]['street']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['street'])){ echo $_POST['street']; } ?>" name="street" size="20" class="wpcf7-text" required="required" id="street" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- house number -->
							<div class="bookinput">
								<label for="h_numb"><?php echo $language[$lang]['house.number']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['h_numb'])){ echo $_POST['h_numb']; } ?>" name="h_numb" size="20" class="wpcf7-text" required="required" id="h_numb" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>


							<!-- Flat number -->
							<div class="bookinput">
								<label for="f_numb"><?php echo $language[$lang]['flat.number']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['f_numb'])){ echo $_POST['f_numb']; } ?>" name="f_numb" size="20" class="wpcf7-text" required="required" id="f_numb" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- Postcode -->
							<div class="bookinput">
								<label for="d_postcode"><?php echo $language[$lang]['postcode']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['postcode'])){ echo $_POST['postcode']; } ?>" name="postcode" id="d_postcode" size="20" length="4" chtype="tekstLen" class="wpcf7-text" required="required" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>
						</div>
					</div>


					<div class="living_place_info selected">
						<div class="form_head">
							<h1><?php echo $language[$lang]['fakt.life.place']?></h1>
						</div>
						<!-- city -->
						<div class='inputs'>
							<div class="bookinput">
								<label for="city2"><?php echo $language[$lang]['city']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['city2'])){ echo $_POST['city2']; } ?>" name="city2" size="20" class="wpcf7-text" required="required" id="city2" lenght="1" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- street -->
							<div class="bookinput">
								<label for="street2"><?php echo $language[$lang]['street']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['street2'])){ echo $_POST['street2']; } ?>" name="street2" size="20" class="wpcf7-text" required="required" id="street2" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- house number -->
							<div class="bookinput">
								<label for="h_numb2"><?php echo $language[$lang]['house.number']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['h_numb2'])){ echo $_POST['h_numb2']; } ?>" name="h_numb2" size="20" class="wpcf7-text" required="required" id="h_numb2" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- House number -->
							<div class="bookinput">
								<label for="f_numb2"><?php echo $language[$lang]['flat.number']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['f_numb2'])){ echo $_POST['f_numb2']; } ?>" name="f_numb2" size="20" class="wpcf7-text" required="required" id="f_numb2" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- Postcode -->
							<div class="bookinput">
								<label for="postcode2"><?php echo $language[$lang]['postcode']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['postcode2'])){ echo $_POST['postcode2']; } ?>" name="postcode2" lenght='3' size="20" class="wpcf7-text" chtype="tekstLen" id='postcode2' required="required" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>
							<div class="bookinput" style="display: flex;display: -webkit-flex; justify-content:flex-start;-webkit-justify-content: flex-start;">
								<p  style="font-size: 14px"><?php echo $language[$lang]['mach']; ?></p>
								<span style="width: fit-content; "><input style="width: initial;" type="checkbox" id="mach" name="living_place_mach" chtype="mach" onchange="checkk($(this))"></span>
							</div>
						</div>
					</div>



					<div class="cash_info selected">
						<div class="form_head">
							<h1 class=""><?php echo $language[$lang]['about_job']?></h1>
						</div>
						<!-- Name of the workplace -->
						<div class="inputs" style="overflow-y: scroll;">

						<div class="bookinput" id="bookinput">
							<div>
								<label for="statuss" style="position: relative; top: 0;left: 0;"><?php echo $language[$lang]['work_type']; ?></label>
								<select id="list" id="statuss" name="statuss" lenght="1" chtype="tekstLen" onchange="checkk($(this))">
									<option value="-" id="n">-</option>
									<option value="worker"><?php echo $language[$lang]['work1']?></option>
									<option value="pensioner"><?php echo $language[$lang]['work2']?></option>
									<option value="another"><?php echo $language[$lang]['work3']?></option>
								</select>
							</div>
						</div>


						<div class="bookinput hidable" id="bookinput">
							<label for="n_o_t_workplace"><?php echo $language[$lang]['job_place']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['n_o_t_workplace'])){ echo $_POST['n_o_t_workplace']; } ?>" name="n_o_t_workplace" size="20" class="wpcf7-text" required="required" id="n_o_t_workplace" lenght="1" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>

						<!-- Position -->
						<div class="bookinput hidable">
							<label for="Position"><?php echo $language[$lang]['position']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['position'])){ echo $_POST['position']; } ?>" name="position" size="20" class="wpcf7-text" required="required" id="position" lenght="1" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>

						<!-- Start Date -->
						<div class="bookinput hidable">
							<label for="start_date"><?php echo $language[$lang]['start_date']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['start_date'])){ echo $_POST['start_date']; } ?>" name="start_date" size="20" class="wpcf7-text" required="required" id="start_date" lenght="8" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>

						<!-- <h1>Job adress</h1> -->

						<!-- City -->
						<div class="bookinput hidable">
							<label for="city_o_workplace"><?php echo $language[$lang]['city']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['city_o_workplace'])){ echo $_POST['city_o_workplace']; } ?>" name="city_o_workplace" size="20" class="wpcf7-text" required="required" id="city_o_workplace" lenght="1" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>

						<!-- Street -->
						<div class="bookinput hidable">
							<label for="street_o_workplace"><?php echo $language[$lang]['street']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['street_o_workplace'])){ echo $_POST['street_o_workplace']; } ?>" name="street_o_workplace" size="20" class="wpcf7-text" required="required" id="street_o_workplace" lenght="1" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>

						<!-- house number -->
						<div class="bookinput hidable">
							<label for="house_num_workplace"><?php echo $language[$lang]['house.number']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['house_num_workplace'])){ echo $_POST['house_num_workplace']; } ?>" name="house_num_workplace" size="20" class="wpcf7-text" required="required" id="house_num_workplace" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>
						

						<!-- <h1>Informācija par ienākumiem, saistībām</h1> -->

						<!-- Neto salary -->
						<div class="bookinput">
							<label><?php echo $language[$lang]['salary']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['n_salary'])){ echo $_POST['n_salary']; } ?>" name="n_salary" size="20" class="wpcf7-text" required="required" id="n_salary" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>

						<!-- Other income -->
						<div class="bookinput">
							<label for="o_incomes"><?php echo $language[$lang]['o_incomes']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['o_income'])){ echo $_POST['o_income']; } ?>" name="o_income" size="20" class="wpcf7-text" required="required" id="o_income" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>

						<!-- Credit payments -->
						<div class="bookinput">
							<label for="c_payments"><?php echo $language[$lang]['credits']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['c_payments'])){ echo $_POST['c_payments']; } ?>" name="c_payments" size="20" class="wpcf7-text" required="required" id="c_payments" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>

						<!-- Family income -->
						<div class="bookinput">
							<label for="f_income"><?php echo $language[$lang]['fam.income']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['f_income'])){ echo $_POST['f_income']; } ?>" name="f_income" size="20" class="wpcf7-text" required="required" id="f_income" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>

						<!-- Family credit payments -->
						<div class="bookinput">
							<label for="f_c_payments"><?php echo $language[$lang]['fam.cred.pay']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['f_c_payments'])){ echo $_POST['f_c_payments']; } ?>" name="f_c_payments" size="20" class="wpcf7-text" required="required" id="f_c_payments" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>

						<!-- Number of dependents -->
						<div class="bookinput">
							<label for="n_of_dependents"><?php echo $language[$lang]['n.o.dependents']?></label>
							<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['n_of_dependents'])){ echo $_POST['n_of_dependents']; } ?>" name="n_of_dependents" size="20" class="wpcf7-text" required="required" id="n_of_dependents" lenght="0" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
						</div>
					</div>
				</div>


					<div class="Contacts selected">
						<div class="form_head">
							<h1><?php echo $language[$lang]['contacts']?></h1>
						</div>
						<!-- NAME -->
						<div class='inputs'>
							<div class="bookinput">
								<label for="name2"><?php echo $language[$lang]['f.name']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['name2'])){ echo $_POST['name2']; } ?>" name="name2" size="20" class="wpcf7-text" required="required" id="name2" lenght="1" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- USERNAME -->
							<div class="bookinput">
								<label for="username2"><?php echo $language[$lang]['l.name']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['username2'])){ echo $_POST['username2']; } ?>" name="username2" size="20" class="wpcf7-text" required="required" id="username2" lenght="1" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>

							<!-- Phone -->
							<div class="bookinput">
								<label for="phone2"><?php echo $language[$lang]['phone1']?></label>
								<span class=" your-name"><input type="text" value = "<?php if(isset($_POST['phone'])){ echo $_POST['phone']; }else{echo "";} ?>" name="phone" size="20" class="wpcf7-text" id="phone2" required="required" lenght="7" chtype="tekstLen" onkeyup="checkk($(this))"><div class="correct"></div></span>
							</div>
						</div>
					</div>

					<div class="last_block selected">
						<div class="checking">
							<div class="form_head">
								<h1><?php echo $language[$lang]['cck']?></h1>
							</div>
							<p><?php echo $language[$lang]['text']?></p>

							<input type="checkbox" id="check" class="check" onclick="func();"/><p class="agree"><?php echo $language[$lang]['agree']?></p>
						</div>

						<div class="col-sm-12">
							<!-- <button class="blackbutton" type="" name="step1" value="Send" onclick="" id="submit"></button> -->
							<button type="button" id="but2" name="long_form" value="submited"><?php echo $language[$lang]['www']?></button>
							<!-- <input type = "submit" name = "step1" value = "step1">  -->
						</div>
					</div>
					<button type="button"  id="expand"><?php echo $language[$lang]['next']?></button>
						<button type="button" name="button" id="shrink"><?php echo $language[$lang]['bit']?></button>
						<button type="submit" id="short_sbm" name="short_form" value="<?php echo $language[$lang]['submit_long'] ?>"><?php echo $language[$lang]['www']?></button>
						<div class="form_move_buttons"><button type="button" class="prev"><?php echo $language[$lang]['back']?></button> <button class="next" type="button" disabled><?php echo $language[$lang]['next']?></button></div>
				</div>
			</form>

		<?php
			}else if($mailSuccess){

			$checkemail = $language[$lang]['subscribe'];

			echo $checkemail;
		} ?>

		<a class="remodal-close"></a>

		</div>
	</div>


	<script src="check2.js"></script>

	<script>
		var func = function(){}
		var checkk = function(){}
		var focus = function(){
        alert('go')
			
		}
	</script>

	
	
</body>
