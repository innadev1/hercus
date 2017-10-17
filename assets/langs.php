<?php
    if(!isset($_SESSION)) {
        session_start();
   }

    $language = [];    

    $language['lv'] = [];
    $language['en'] = [];
    $language['ru'] = [];


    $SiteUrl = 'http://localhost/www/hercus/';
    $language;

    if (isset($_GET['lang'])&&!empty($_GET['lang'])) {
        if ($_GET['lang']=='lv'||$_GET['lang']=='en'||$_GET['lang']=='ru'||$_GET['lang']=='ee') {
            $_SESSION['lang'] = $_GET['lang'];
        }
    }

    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    }else{
        $lang = 'lv';
    }
// 1.

    // LV
	$language['lv']['LV'] = 'LV';
    $language['lv']['RU'] = 'RU';
    // RU
    $language['ru']['LV'] = 'ЛАТ';
    $language['ru']['RU'] = 'РУС';
    // LV
	$language['lv']['hercus-cart'] = 'HERCUS karte</b> ar kredītlīniju -';
    $language['lv']['freepay'] = 'Jūsu pirkumu brīvība';
    $language['lv']['credit'] = 'Vēlaties iegūt ikvienam Jūsu plānotajam vai neplānotajam pirkumam? Vēlaties veikt pirku- mu uzreiz, bet par to norēķinātos pakāpeniski? Mūsu atbilde Jums - HERCUS karte ar kredītlīniju līdz pat 3000 € apmērā.';
    // RU
    $language['ru']['hercus-cart'] = 'Карта HERCUS</b> с кредитной линией -';
    $language['ru']['freepay'] = 'Свободные покупки';
    $language['ru']['credit'] = 'Хотите получать выгоду за запланированную или незапланированную покупку? Хотите сделать покупку сразу, но выплатить за нее постепенно? Наш ответ вам - карточка HERCUS с кредитной линией до 3000 €.';
    // LV
	$language['lv']['subscribe'] = 'Piesakies';
    // RU
    $language['ru']['subscribe'] = 'Подать заявление';

// 2.

    // LV
	$language['lv']['why_hercus'] = 'Kāpēc HERCUS karte ar<br> kredītlīniju ir <b>labāka izvēle?';
    $language['lv']['hercus_credline'] = 'HERCUS karti ar kredītlīniju savā rīcībā kā drošības spilvenu varat iegūt pilnīgi par brīvu. Jums nebūs jāmaksā ne par kartes, ne par kredītlīnijas uzturēšanu. Tikai pēc pirkuma veikšanas, Jums būs jāatmaksā daļa no iztērētās summas un tās izmantošanas procenti.';
    // RU
    $language['ru']['why_hercus'] = 'Почему карта HERCUS с<br> кредитной линией- <b>лучший выбор?';
    $language['ru']['hercus_credline'] = 'Вы можете получить карту Hercus с кредитной линией в вашем распоряжении в качестве подушки безопасности бесплатно. Вам не придется платить за карточку или обслуживание кредитной линии. Только после совершения покупки вам придется погасить часть потраченной суммы и процент ее использования.';
    // LV
	$language['lv']['1.1'] = 'Operatīva kredītlīnijas noformēšana';
    $language['lv']['1.2'] = 'Bezmaksas HERCUS kartes uzturēšana';
    $language['lv']['1.3'] = 'Iespēja veikt pirkumus visur, kur var norēķināties ar MasterCard';
    $language['lv']['1.4'] = 'Viens līgums - vairāki pirkumišana';
    $language['lv']['1.5'] = 'Iespēja izlietoto summu atmaksāt uzreiz vai pa daļām';
    // RU
    $language['ru']['1.1'] = 'Оперативное офрмление кредитной линии';
    $language['ru']['1.2'] = 'Бесплатное обслуживание карт HERCUS';
    $language['ru']['1.3'] = 'Возможность совершать покупки везде, где вы можете оплатить с MasterCard';
    $language['ru']['1.4'] = 'Один контракт - несколько покупок';
    $language['ru']['1.5'] = 'Возможность погасить потраченную сумму, немедленно или по частям';

     // LV
	$language['lv']['why_cart2'] = 'Kāpēc <b>HERCUS karte</b><br> ar kredītlīniju?';
    $language['lv']['lizing'] = 'Apvienojot pasaulē pazīstamās Mastercard un kredītlīnijas priekšrocības,
    AS "LATEKO LĪZINGS" izveidoja pavisam jaunu un modernu piedāvājumu – HERCUS karti ar kredītlīniju.';

    // RU 
       // LV
	$language['ru']['why_cart2'] = 'Почему <b>карта HERCUS</b><br> с кредитной линией?';
    $language['ru']['lizing'] = 'Объединив преимущества всемирно известной Mastercard и кредитной линии, AS LATEKO LIZINGS создали совершенно новое и современное предложение - карту HERCUS с кредитной линией.';

    // LV
    $language['lv']['why_cart2'] = 'Kāpēc <b>HERCUS karte</b><br> ar kredītlīniju?';
    $language['lv']['lizing'] = 'Apvienojot pasaulē pazīstamās Mastercard un kredītlīnijas priekšrocības';

    // LV
	$language['lv']['how_get_cart'] = 'Kā iegūt</b> HERCUS karti<br> ar kredītlīniju?';
    $language['lv']['write_subscribe'] = 'AIZPILDI PIETEIKUMU';
    $language['lv']['internet'] = 'Internetā';
    $language['lv']['call'] = 'Zvanot pa tālr. +371 67775079<br>Ierodoties jebkurā AS "LATEKO LĪZINGS" filiālē.';
    // LV
	$language['lv']['write_contract'] = 'PARAKSTI LĪGUMU';
    $language['lv']['credit_history'] = 'Saskaņā ar Jūsu ienākumiem un kredītvēsturi AS<br>"LATEKO LĪZINGS" klientu apkalpošanas speciālisti<br>noteiks Jūsu kredītlīnijas maksimālo apmēru.<br>Jums atliks vien noslēgt kreditēšanas līgumu.';
    $language['lv']['active'] = 'AKTIVIZĒ UN SĀC LIETOT';
    $language['lv']['after_reg'] = 'Pēc līguma noslēgšanas aktivizējiet HERCUS<br>MasterCard norēķinu karti Jums ērtākajā veidā:<br>Zvanot pa tālr. +371 67775079<br>Ierodoties jebkurā AS "LATEKO LĪZINGS" filiālē.';


     // LV
	$language['ru']['how_get_cart'] = 'Как получить</b> карту HERCUS<br>с кредитной линией?';
    $language['ru']['write_subscribe'] = 'ЗАПОЛНЕНИЕ ЗАЯВКУ';
    $language['ru']['internet'] = 'В Интернете';
    $language['ru']['call'] = 'Звоните по телефону +371 67775079<br>Приходите в любой филиал ОАО «ЛАТЕКО ЛИЗИНГ».';
    // RU
	$language['ru']['write_contract'] = 'ПОДПИСАТЬ КОНТРАКТ';
    $language['ru']['credit_history'] = 'Согласно вашим доходам и кредитной истории AS<br>«LATEKO LĪZINGS»Специалисты по обслуживанию клиентов<br> определит максимальную сумму вашей кредитной линии.<br>Вам нужно будет заключить кредитное соглашение.';
    $language['ru']['active'] = 'АКТИВИРУЙТЕ И НАЧНИТЕ ПОЛЬЗОВАТСЯ';
    $language['ru']['after_reg'] = 'После регистрации активируйте HERCUS<br>Платежной карты MasterCard наиболее удобным способом:<br>Позвонив по телефону +371 67775079<br>Придя в любой филиал ОАО «ЛАТЕКО ЛИЗИНГ».';

     // LV
    $language['lv']['contacts'] = 'KONTAKTI';
       
    $language['lv']['client'] = 'KLIENTIEM';
        $language['lv']['ak'] = 'Akcijas';
        $language['lv']['qe'] = 'Jautājumi';
        $language['lv']['pa'] = 'Pakalpojumi';
       

    $language['lv']['latlizing'] = 'LATEKO LĪZINGS';
        $language['lv']['us'] = 'Par mums';
        $language['lv']['part'] = 'Kļūsti par partneri';
        $language['lv']['lic'] = 'Licence';
        $language['lv']['pris'] = 'Cenrādis';

    $language['lv']['jur_information'] = 'JURIDISKĀ INFORMĀCIJA.';
        $language['lv']['priv'] = 'Privātuma atruna';
        $language['lv']['autor'] = 'Autortiesības';



    // RU
    $language['ru']['contacts'] = 'КОНТАКТЫ';
    
    $language['ru']['client'] = 'КЛИЕНТЫ';
        $language['ru']['ak'] = 'Акции';
        $language['ru']['qe'] = 'Вопросы';
        $language['ru']['pa'] = 'Услуги';
        

    $language['ru']['latlizing'] = 'ЛАТЕКО ЛИЗИНГ';
        $language['ru']['us'] = 'О КОМПАНИИ';
        $language['ru']['part'] = 'Стать партнером';
        $language['ru']['lic'] = 'лицензия';
        $language['ru']['pris'] = 'прейскурант';

    $language['ru']['jur_information'] = 'ЮРИДИЧЕСКАЯ ИНФОРМАЦИЯ.';
        $language['ru']['priv'] = 'Конфиденциальность';
        $language['ru']['autor'] = 'авторское право';


        $language['lv']['1'] = 'Sekojiet jaunumiem:';
        $language['lv']['2'] = '© 2017 LATEKO LIZINGS . All rights reserved.';

        $language['ru']['1'] = 'Оставайтесь:';
        $language['ru']['2'] = '© 2017 LATEKO LIZINGS. Все права защищены.';
?>