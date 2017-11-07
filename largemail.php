<?php
    if(isset($_POST['short_form']))
    {
 		
        $mailSuccess = "";

        $name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$p_code = $_POST['p_code'];
        $phone = $_POST['phone'];
        $email = $_POST['mail'];

        $to      = "my.worktest94@gmail.com";
		$subject = 'hercuskarte.lv';
		$message = "Vārds:" . " " . $name . "\r\n" . "Uzvārds:" . " " . $lastname . "\r\n" . "Personas Kods:" . " " . $p_code . "\r\n" . "Telefona numurs:" . " " . $phone . "\r\n" . "e-pasts:" . " " . $email;
		$headers = "my.worktest94@gmail.com" . "\r\n";

		if(mail($to, $subject, $message, $headers)){
			$mailSuccess = true;
		}

		echo $language[$lang]['1'];
    }

	if(isset($_POST['long_form']))
	{
    	

        $mailSuccess = "";
        
        // 1.
        $amount = $_POST['amount'];
        $till = $_POST['till'];
        $name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$p_code = $_POST['p_code'];
        $phone = $_POST['phone'];
		$email = $_POST['mail'];
		$p_id_number = $_POST['passport'];
		$p_id_number_valid_till = $_POST['p_or_id_number_valid_till'];
		$v_pass = $_POST['voice_pass'];
        $re_v_pass = $_POST['re_voice_pass'];
        // 2.
        $city = $_POST['city'];
		$street = $_POST['street'];
		$h_numb = $_POST['h_numb'];
        $f_numb = $_POST['f_numb'];
		$postcode = $_POST['postcode'];
        // 3.
        $city2 = $_POST['city2'];
		$street2 = $_POST['street2'];
		$h_numb2 = $_POST['h_numb2'];
        $f_numb2 = $_POST['f_numb2'];
        $postcode2 = $_POST['postcode2'];
        // 4.
        $status = $_POST['statuss'];
		$name_of_job = $_POST['n_o_t_workplace'];
		$position = $_POST['position'];
        $startdate = $_POST['start_date'];
		$city_of_job = $_POST['city_o_workplace'];
		$street_of_job = $_POST['street_o_workplace'];
        $job_house_number = $_POST['house_num_workplace'];
        // 5.
        $salary = $_POST['n_salary'];
		$th_income = $_POST['o_income'];
		$cred_payment = $_POST['c_payments'];
        $fam_income = $_POST['f_income'];
		$fam_cred_pay = $_POST['f_c_payments'];
		$n_of_dependents = $_POST['n_of_dependents'];
        // 6.
        $name2 = $_POST['name2'];
		$username2 = $_POST['username2'];
		$phone2 = $_POST['phone2'];
		
		$language[$lang]['form1'] . " : " . " " . $name . "\r\n" .

		$to      = "my.worktest94@gmail.com";
		$subject = 'hercuskarte.lv';
        $message = "-- Personīgā informācija --" . "\r\n" ."Aizdevuma apjoms: ".$amount . "\r\n" ."Apmaksas termiņš: ".$till . "\r\n" . "Vārds:" . " " . $name . "\r\n" . "Uzvārds:" . " " . $lastname . "\r\n" . "Personas Kods:" . " " . $p_code . "\r\n" . "Telefona numurs:" . " " . $phone . "\r\n" . "e-pasts:" . " " . $email . "\r\n" . "Pases Numurs:" . " " . $p_id_number . "\r\n" . "Pases Derīguma termiņš:" . " " . $p_id_number_valid_till . "\r\n" . "Balss Parole:" . " " . $v_pass . "\r\n" . "\r\n" . "\r\n" .
        "-- Deklerētā Dzīves vieta --" . "\r\n" . "Pilsēta:" . " " . $city . "\r\n" . "Iela:" . " " . $street . "\r\n" . "Mājas numurs:" . " " . $h_numb . "\r\n" . "Dzīvokļa numurs:" . " " . $f_numb . "\r\n" . "Pasta Indekss:" . " " . $postcode . "\r\n" . "\r\n" . "\r\n" .
        "-- Faktiskā Dzīves vieta --" . "\r\n" . "Pilsēta:" . " " . $city2 . "\r\n" . "Iela:" . " " . $street2 . "\r\n" . "Mājas numurs:" . " " . $h_numb2 . "\r\n" . "Dzīvokļa numurs:" . " " . $f_numb2 . "\r\n" . "Pasta Indekss:" . " " . $postcode2 . "\r\n" . "\r\n" . "\r\n" .
        "-- Informācija Par Darbu --" . "\r\n" . "Statuss:" . " " . $status . "\r\n" . "Darbvietas Nosaukums:" . " " . $name_of_job . "\r\n" . "Amats:" . " " . $startdate . "\r\n" . "Datums Kurā Darbs Uzsākts:" . " " . $city_of_job . "\r\n" . "Pilsēta:" . " " . $postcode2 . "Iela:" . " " . $street_of_job . "\r\n" . "Mājas Numurs:" . " " . $job_house_number . "\r\n" . "\r\n" . "\r\n" .
        "-- Informācija Par Ienākumiem --" . "\r\n" . "Ienākumi:" . " " . $salary . "\r\n" . "Citi Ienākumi:" . " " . $th_income . "\r\n" . "Kredīti/Maksājumi:" . " " . $cred_payment . "\r\n" . "Ģimenes Ienākumi:" . " " . $fam_income . "\r\n" . "Ģimenes Kredīti/Maksājumi:" . " " . $fam_cred_pay . "\r\n" . "Apgādājamie" . " " . $n_of_dependents . "\r\n" . "\r\n" . "\r\n" .
        "-- Kontakti --" . "\r\n" . "Vārds:" . " " . $name2 . "\r\n" . "Uzvārds:" . " " . $username2 . "\r\n" . "Telefona Numurs:" . " " . $phone2 . "\r\n" . "\r\n" . "\r\n" .
		$headers = "my.worktest94@gmail.com" . "\r\n";

		if(mail($to, $subject, $message, $headers)){
			$mailSuccess = true;
		}

		echo $language[$lang]['1'];

	}
	$_POST = array();
?>