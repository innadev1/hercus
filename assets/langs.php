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
    $language['lv']['phone_form'] = 'PIETEIKTIES PA TELEFONU'; 
    $language['ru']['phone_form'] = 'ПОДАТЬ ЗАЯВКУ ПО ТЕЛЕФОНУ'; 
    $language['lv']['online_form'] = 'PIETEIKTIES INTERNETĀ';
    $language['ru']['online_form'] = 'ПОДАТЬ ЗАЯВКУ В ИНТЕРНЕТЕ';
    $language['lv']['phone_agree'] = 'Apliecinu, ka ievadītie dati ir korekti, un piekrītu, ka AS LATEKO LĪZINGS izmantos šajā pieteikumā norādītos datus, lai sazinātos ar mani, kā arī neiebilstu, ka AS LATEKO LĪZINGS izmantos iesniegtos datus, lai informētu par kompānijas akcijām, piedāvājumiem un sniegtajiem pakalpojumiem.';
    $language['ru']['phone_agree'] = 'Apliecinu, ka ievadītie dati ir korekti, un piekrītu, ka AS LATEKO LĪZINGS izmantos šajā pieteikumā norādītos datus, lai sazinātos ar mani, kā arī neiebilstu, ka AS LATEKO LĪZINGS izmantos iesniegtos datus, lai informētu par kompānijas akcijām, piedāvājumiem un sniegtajiem pakalpojumiem.';


    // LV
	$language['lv']['LV'] = 'LV';
    $language['lv']['RU'] = 'RU';
    // RU
    $language['ru']['LV'] = 'ЛАТ';
    $language['ru']['RU'] = 'РУС';

    // LV
    $language['lv']['hercus-cart'] = 'HERCUS karte</b> ar kredītlīniju -';
    $language['lv']['freepay'] = 'Jūsu pirkumu brīvība';
    $language['lv']['credit'] = 'Vēlaties iegūt ikvienam Jūsu plānotajam vai neplānotajam pirkumam? Vēlaties veikt pirkumu uzreiz, bet par to norēķināties pakāpeniski? Mūsu atbilde Jums - HERCUS karte ar kredītlīniju līdz pat 3000 € apmērā.';
    // RU
    $language['ru']['hercus-cart'] = 'Карта HERCUS</b> с кредитной линией -';
    $language['ru']['freepay'] = 'Свободные покупки';
    $language['ru']['credit'] = 'Хотите получать выгоду от запланированной или незапланированной покупки? Хотите сделать покупку сразу, но выплатить за нее постепенно? Наш ответ вам - карточка HERCUS с кредитной линией до 3000 €.';
    // LV
    $language['lv']['subscribe1'] = 'Piesakies';
    // RU
    $language['ru']['subscribe1'] = 'Подать заявление';

// 2.

    // LV
    $language['lv']['why_hercus'] = 'Kāpēc HERCUS karte ar<br> kredītlīniju ir <b>labākā izvēle?';
    $language['lv']['hercus_credline'] = 'HERCUS karti ar kredītlīniju savā rīcībā kā drošības spilvenu varat iegūt pilnīgi par brīvu. Jums nebūs jāmaksā ne par kartes, ne par kredītlīnijas uzturēšanu. Pēc pirkuma veikšanas Jums būs tikai jāatmaksā daļa no iztērētās summas un tās izmantošanas procenti.';
    // RU
    $language['ru']['why_hercus'] = 'Почему карта HERCUS с<br> кредитной линией- <b>лучший выбор?';
    $language['ru']['hercus_credline'] = 'Вы можете получить карту Hercus с кредитной линией в ваше распоряжение в качестве подушки безопасности бесплатно. Вам не придется платить за карточку или обслуживание кредитной линии. Только после совершения покупки вам придется погасить часть потраченной суммы и процент ее использования.';
    // LV
    $language['lv']['1.1'] = 'Operatīva kredītlīnijas noformēšana';
    $language['lv']['1.2'] = 'Bezmaksas HERCUS kartes uzturēšana';
    $language['lv']['1.3'] = 'Iespēja veikt pirkumus visur, kur var norēķināties ar MasterCard';
    $language['lv']['1.4'] = 'Viens līgums - vairāki pirkumi';
    $language['lv']['1.5'] = 'Iespēja izlietoto summu atmaksāt uzreiz vai pa daļām';
    // RU
    $language['ru']['1.1'] = 'Оперативное офрмление кредитной линии';
    $language['ru']['1.2'] = 'Бесплатное обслуживание карт HERCUS';
    $language['ru']['1.3'] = 'Возможность совершать покупки везде, где вы можете оплатить с MasterCard';
    $language['ru']['1.4'] = 'Один контракт - несколько покупок';
    $language['ru']['1.5'] = 'Возможность погасить потраченную сумму немедленно или по частям';

     // LV
    $language['lv']['why_cart2'] = 'Kāpēc <b>HERCUS karte</b><br> ar kredītlīniju?';
    $language['lv']['lizing'] = 'Apvienojot pasaulē pazīstamās Mastercard un kredītlīnijas priekšrocības,
    AS "LATEKO LĪZINGS" izveidoja pavisam jaunu un modernu piedāvājumu – HERCUS karti ar kredītlīniju.';

    // RU 
       // LV
    $language['ru']['why_cart2'] = 'Почему <b>карта HERCUS</b><br> с кредитной линией?';
    $language['ru']['lizing'] = 'Объединив преимущества всемирно известной Mastercard и кредитной линии, AS LATEKO LĪZINGS создали совершенно новое и современное предложение - карту HERCUS с кредитной линией.';

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
    $language['ru']['credit_history'] = 'Согласно вашим доходам и кредитной истории, AS<br>«LATEKO LĪZINGS»Специалисты по обслуживанию клиентов<br> определит максимальную сумму вашей кредитной линии.<br>Вам нужно будет заключить кредитное соглашение.';
    $language['ru']['active'] = 'АКТИВИРУЙТЕ И НАЧНИТЕ ПОЛЬЗОВАТЬСЯ';
    $language['ru']['after_reg'] = 'После регистрации активируйте HERCUS<br>Платежной карты MasterCard наиболее удобным способом:<br>Позвонив по телефону +371 67775079<br>Придя в любой филиал ОАО «ЛАТЕКО ЛИЗИНГ».';
    $language['ru']['work_type'] = 'Занятость:';

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

    $language['lv']['jur_information'] = 'JURIDISKĀ INFORMĀCIJA';
        $language['lv']['priv'] = 'Privātuma atruna';
        $language['lv']['autor'] = 'Autortiesības';



    // RU
    $language['ru']['contacts'] = 'КОНТАКТЫ';
    
    $language['ru']['client'] = 'КЛИЕНТЫ';
        $language['ru']['ak'] = 'Акции';
        $language['ru']['qe'] = 'Вопросы';
        $language['ru']['pa'] = 'Услуги';
        

    $language['ru']['latlizing'] = 'ЛАТЕКО ЛИЗИНГ';
        $language['ru']['us'] = 'О компании';
        $language['ru']['part'] = 'Стать партнером';
        $language['ru']['lic'] = 'Лицензия';
        $language['ru']['pris'] = 'Прейскурант';

    $language['ru']['jur_information'] = 'ЮРИДИЧЕСКАЯ ИНФОРМАЦИЯ';
        $language['ru']['priv'] = 'Конфиденциальность';
        $language['ru']['autor'] = 'Авторское право';


     //   $language['lv']['1'] = 'Sekojiet jaunumiem:';
        $language['lv']['2'] = '© 2017 LATEKO LIZINGS . All rights reserved.';

     //   $language['ru']['1'] = 'Оставайтесь:';
        $language['ru']['2'] = '© 2017 LATEKO LIZINGS. Все права защищены.';
        
        
    //footer links
        $language['ru']['f1'] = 'https://latekolizings.lv/ru/akcii';
        $language['lv']['f1'] = 'https://latekolizings.lv/lv/akcijas';
        
        $language['ru']['f2'] = 'https://latekolizings.lv/ru/casto-zadavaemye-voprosy';
        $language['lv']['f2'] = 'https://latekolizings.lv/lv/biezak-uzdotie-jautajumi';
        
        $language['ru']['f3'] = 'https://latekolizings.lv/ru/kreditnaa-linia';
        $language['lv']['f3'] = 'https://latekolizings.lv/lv/kreditlinija';
        
        $language['ru']['f4'] = 'https://latekolizings.lv/ru/o-nas';
        $language['lv']['f4'] = 'https://latekolizings.lv/lv/par-mums';
        
        $language['ru']['f5'] = 'https://latekolizings.lv/ru/partneram';
        $language['lv']['f5'] = 'https://latekolizings.lv/lv/partneriem';
        
        $language['ru']['f6'] = 'https://latekolizings.lv/ru/node/20';
        $language['lv']['f6'] = 'https://latekolizings.lv/lv/licence';
        
        $language['ru']['f7'] = 'https://latekolizings.lv/ru/node/19';
        $language['lv']['f7'] = 'https://latekolizings.lv/lv/pakalpojumu-cenradis';
        
        $language['ru']['f8'] = 'https://latekolizings.lv/ru/politika-konfidencialnosti';
        $language['lv']['f8'] = 'https://latekolizings.lv/lv/privatuma-atruna';
        
        $language['ru']['f9'] = 'https://latekolizings.lv/ru/avtorskie-prava';
        $language['lv']['f19'] = 'https://latekolizings.lv/lv/autortiesibas';


        // FORMA!!!! -------------------------------------------------------->

        // Forma_LV
        // 1.
        $language['lv']['amount'] = ' Aizdevuma summa € 0 - 3000';
        $language['lv']['till'] = 'Aizdevuma termiņš';
        $language['lv']['pers.info'] = 'Personīgā informācija';
        $language['lv']['f.name'] = 'Vārds:';
        $language['lv']['l.name'] = 'Uzvārds:';
        $language['lv']['pers.code'] = 'Personas kods:';
        $language['lv']['phone1'] = 'Telefons:';
        $language['lv']['email'] = 'E-pasts:';
        $language['lv']['pass.numb'] = 'Pase/ ID kartes sērija un numurs';
        $language['lv']['pass.valid.till'] = 'Pase/ ID kartes derīguma termiņš';
        $language['lv']['voice.pass'] = 'Balss parole';
        $language['lv']['re.voice.pass'] = 'Atkārtojiet balss paroli';
        // 2.
        $language['lv']['dek.life.place'] = 'Deklarētā dzīvesvieta';
        $language['lv']['city'] = 'Pilsēta:';
        $language['lv']['street'] = 'Iela:';
        $language['lv']['house.number'] = 'Mājas numurs:';
        $language['lv']['flat.number'] = 'Dzīvokļa numurs:';
        $language['lv']['postcode'] = 'Pasta indekss:';
        // 3.
        $language['lv']['fakt.life.place'] = 'Faktiskā dzīvesvieta';
        // 4.
        $language['lv']['about_job'] = 'Par Darbu ';
        $language['lv']['work1'] = 'Darbinieks:';
        $language['lv']['work2'] = 'Pensionārs:';
        $language['lv']['work3'] = 'Cits:';
        $language['lv']['job_place'] = 'Darba vieta:';
        $language['lv']['position'] = 'Amats:';
        $language['lv']['start_date'] = 'Darba sākums:';

        $language['lv']['salary'] = 'Neto alga:';
        $language['lv']['o_incomes'] = 'Citi ienākumi:';
        $language['lv']['credits'] = 'Kredīta maksājumi:';
        $language['lv']['fam.income'] = 'Ģimenes ienākumi:';
        $language['lv']['fam.cred.pay'] = 'Kredītu maksajumi:';
        $language['lv']['n.o.dependents'] = 'Apgādājamie:';

        // 5.
        $language['lv']['cck'] = 'Pārbaude';
        $language['lv']['agree'] = 'Es piekrītu';

        $language['lv']['back'] = 'Atpakaļ';
        $language['lv']['next'] = 'Tālāk';
        $language['lv']['www'] = 'Pieteikties';

        $language['lv']['more'] = 'Vairāk';
        $language['lv']['bit'] = 'Mazāk';

        $language['lv']['contacts'] = 'Kontakti';

        $language['lv']['text'] = 'Iesniedzējs izsaka savu piekrišanu tam, ka AS “LATEKO LĪZINGS” saņem, apstrādā un glabā viņa personas datus pakalpojuma sniegšanai un ar to saistītām darbībām, kas izriet vai var izrietēt no savstarpējām līgumattiecībām, vadoties no LR Fizisko personu datu aizsardzības likuma normām. Iesniedzējs neiebilst par savas sniegtās informācijas pārbaudi jebkurā datu bāzē vai reģistrā, kā arī pilnvaro AS “LATEKO LĪZINGS” bez papildus apliecinājuma saņemt Iedzīvotāju reģistrā iekļauto informāciju par Iesniedzēju. Nosūtot pieteikumu, iesniedzējs apliecina, ka visas sniegtās ziņas ir patiesas, un ka viņš apzinās sekas, kuras var rasties nepatiesu ziņu sniegšanas dēļ, kā arī uzņemas pilnu atbildību par nepatiesu ziņu sniegšanas rezultātā nodarītajiem zaudējumiem. Iesniedzējs neiebilst , ka AS “LATEKO LĪZINGS” izmanto šajā pieteikumā norādītos Iesniedzēja datus (tālruņa numurs, mobilā tālruņa numurs, elektroniskais pasts, dzīvesvietas adrese u.c.), lai informētu Iesniedzēju par kompānijas akcijām, piedāvājumiem un sniegtajiem pakalpojumiem. AS „LATEKO LĪZINGS” ir tiesības atteikt aizdevuma piešķiršanu, nepamatojot iemeslus. Pieņemot pozitīvu vai negatīvu lēmumu par aizdevuma piešķiršanu, AS „LATEKO LĪZINGS” patur tiesības neatgriezt no pieteicēja saņemtos dokumentus, kas izmantoti par pamatu lēmuma pieņemšanai.';
        $language['lv']['form'] = 'Pieteikšanās forma';

        $language['lv']['1'] ='<p>Paldies, Jūsu kredīta pieteikums ir saņemts!<br>Mūsu speciālists ar Jums sazināsies tuvākajā laikā.</p><span>Atgriezties sākumlapā</span>';
        $language['lv']['2'] = '';
        $language['lv']['work_type'] = 'Nodarbošanās:';



        $language['lv']['submit_short'] = 'Sazinieties ar mani';
        $language['ru']['submit_short'] = 'Свяжитесь со мной';
        $language['lv']['submit_long'] = 'Nosūtīt';
        $language['ru']['submit_long'] = 'Отправить';

        // Forma_RU
        $language['lv']['mach'] = 'Faktiskā dzīvesvieta atbilst deklerētajai';
        $language['ru']['mach'] = 'Фактическое место жительства совпадает с декларированным';
        // 1.
        $language['ru']['amount'] = ' Сумма займа € 0 - 3000';
        $language['ru']['till'] = 'Срок займа';

        $language['ru']['pers.info'] = 'Персональная информация';
        $language['ru']['f.name'] = 'Имя:';
        $language['ru']['l.name'] = 'Фамилия:';
        $language['ru']['pers.code'] = 'Персональный код:';
        $language['ru']['phone1'] = 'Телефон:';
        $language['ru']['email'] = 'Эл. почта:';
        $language['ru']['pass.numb'] = 'Паспорт/ ID карты серийный номер: ';
        $language['ru']['pass.valid.till'] = 'Паспорт/ ID карты срок годности:';
        $language['ru']['voice.pass'] = 'Голосовой пароль:';
        $language['ru']['re.voice.pass'] = 'Повторите голосовой пароль:';
        // 2.
        $language['ru']['dek.life.place'] = 'Декларированое место жительство';
        $language['ru']['city'] = 'Город:';
        $language['ru']['street'] = 'Улица:';
        $language['ru']['house.number'] = 'Номер улицы:';
        $language['ru']['flat.number'] = 'Номер квартиры:';
        $language['ru']['postcode'] = 'Почтовый индекс:';
        // 3.
        $language['ru']['fakt.life.place'] = 'Фактическое место жительство';

        // 4.
        $language['ru']['about_job'] = 'О работе';
        $language['ru']['work1'] = 'Работник:';
        $language['ru']['work2'] = 'Пенсионер:';
        $language['ru']['work3'] = 'Другое:';
        $language['ru']['job_place'] = 'Место работы:';
        $language['ru']['position'] = 'Должность:';
        $language['ru']['start_date'] = 'Начало работы:';

        $language['ru']['salary'] = 'Нето заработок:';
        $language['ru']['o_incomes'] = 'Другие доходы:';
        $language['ru']['credits'] = 'Кредиты:';
        $language['ru']['fam.income'] = 'Семейные доходы:';
        $language['ru']['fam.cred.pay'] = 'семейные выплаты за кредит:';
        $language['ru']['n.o.dependents'] = 'Колличество иждевенцев:';
        // 5.

        $language['ru']['cck'] = 'Проверка ';
        $language['ru']['agree'] = 'Я согласен/на';

        $language['ru']['back'] = 'Назад';
        $language['ru']['next'] = 'Дальше';
        $language['ru']['www'] = 'Подать заявку';

        $language['ru']['more'] = 'Больше';
        $language['ru']['bit'] = 'Меньше';
       
        $language['ru']['text'] = 'Заявитель дает свое согласие AS “LATEKO LĪZINGS” принять , обработать и хранить свои личные данные для оказания услуги и связанных с этим действий, которые исходят или могут исходить из взаимных договорных отношений, руководствуясь нормами закона Защиты данных физических лиц. Заявитель не возражает, что предоставленная им информация будет проверена в базах данных или регистре, а так же доверяет AS “LATEKO LĪZINGS” без дополнительного разрешения получить имеющуюся информацию о заявителе в базах данных Регистра жителей. Подписав заявку, заявитель подтверждает, что все предоставленные им данные соответствуют действительности, а также берёт на себя полную ответственность за убытки, которые могут возникнуть по причине предоставления им недостоверных данных. Заявитель не возражает, что AS “LATEKO LĪZINGS” будет информировать его об акциях, предложениях и предоставляемых компанией услугах, используя данные заявителя, указанные в этой заявке (номер телефона, номер мобильного телефона, электронная почта, домашний адрес и т.д.). AS “LATEKO LĪZINGS" имеет право отказать в предоставлении займа без объяснения причин. Приняв позитивное или негативное решение о предоставлении кредита, AS “LATEKO LĪZINGS” вправе не возвращать полученные от заявителя документы, использованные для принятия решения';
        $language['ru']['1'] = '<p>Спасибо, Ваша кредитная заявка принята!<br>Наш специалист свяжется с Вами в ближайшее время.</p><span>Вернуться на главную страницу</span>';
        $language['ru']['2'] = '';
        $language['ru']['form'] = 'Форма заявки';

		
		
		$language['ru']['block5h3'] = 'Действительный физический адрес рекламируемой компании.';
        $language['lv']['block5h3'] = 'Reklamētās firmas fiziskā adrese.';
		
		$language['ru']['block5h5'] = 'Сведения о дополнительных комиссионных сборах.';
        $language['lv']['block5h5'] = 'Informācija par komisijas maksu.';
		
		$language['ru']['block5p'] = 'Возвращать потраченную сумму Вы сможете по частям. Минимальный платёж составляет 5 % от потраченной суммы (минимум 10 €) плюс проценты за использование кредитной линии. Минимальный платёж необходимо перечислять на банковский счёт AS "LATEKO LĪZINGS"  до 15 числа каждого месяца.';
        $language['lv']['block5p'] = 'Atmaksa ir jāveic tikai pēc tam, kad veicat norēķinus ar HERCUS Mastercard. Atmaksa par izlietoto summu ir jāveic pa daļām, minimālā atmaksājamā summa ir 5 % no iztērētās summas (minimums 10 €) plus procenti par kredītlīnijas izmantošanu. Minimālais maksājums ir jāpārskaita AS "LATEKO LĪZINGS" bankas kontā līdz katra mēneša 15. datumam.';


        $language['lv']['form_type'] = 'Izvēlies pieteikuma
formas veidu!';
        $language['ru']['form_type'] = 'Выберите форму заявки!';
        
?>