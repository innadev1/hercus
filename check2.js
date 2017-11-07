// var textlenght = function(){}

// $(function(){
$(function(){


    $('#isa').click(function(){
        $('#short_form').css('display','block')
        $('#box1').css('display','none')
    })
    $('#gara').click(function(){
        $('#box2').css('display','block')
        $('#box1').css('display','none')

    })

    $('#expand').click(function(){
        $('.long').css({'display':'flex','display':'-webkit-flex'})
        $('.form_move_buttons').css('display','block')
        $(this).css('display','none')
        // $('#shrink').css('display','block')
        $('#counter').css('display','block')
        manageval('remove')
        $('#short_sbm').css('display','none')
    })

    $('#shrink').click(function(){
        $('.xxx').removeClass('xxx')
        $('.person_information').addClass('xxx')
        $('.long').css('display','none')
        $(this).css('display','none')
        $('#expand').css('display','block')
        $('#counter').css('display','none')
        $('.form_move_buttons').css('display','none')
        $('#short_sbm').css('display','block')


        manageval('add')


    })

    function manageval(x){
            console.log('GO')


        if (x=='add') {

                for (var i = 5; i < $('#form input').length; i++) {
         
                   type = $('#form .bookinput:eq('+i+') span input').attr('type')
                   val = $('#form .bookinput:eq('+i+') span input').val()


                   if ((type=='tel'||type=='number'||type=='date')&&(val=='_'||val=='0'||val==''||val==undefined||val==null)) {
                        $('#form .bookinput:eq('+i+') span input').val('0')    
                   }else if(val=='_'||val=='0'||val==''||val==undefined||val==null){
                        $('#form .bookinput:eq('+i+') span input').val('0')    
                   }
                }

        }else if(x=='remove'){

            for (var i = 5; i < $('#form input').length; i++) {
         
                   type = $('#form .bookinput:eq('+i+') span input').attr('type')
                   val = $('#form .bookinput:eq('+i+') span input').val()

                   if (val==''||val=='_'||val=='0') {
                        $('#form .bookinput:eq('+i+') span input').val('')    
                   }
                }

        }
    }
    //manageval('add')

    $('.mailSuccess .close, .mailSuccess span ').click(function(){
        $('.mailSuccess').css('display','none')
    })
    function checkAll(){
        count = $('#form .wpcf7-text').length
        $('#form .wpcf7-text').css('outline','solid blue 2px')
        // alert(count)

        for(i=0;count<i;i++){
            elem = $('form input:eq('+i+')')
            check(elem)
        }
    }

    func =  function (){
        var check = document.getElementsByClassName('check');
        var submit = $('#submit');

        if(check[0].checked)
        {
       //    $('#check').css('outline','solid red 2px')
           $("#but2").attr("type", "submit");
           $('#but2').css('opacity','1.0')
            checkAll()
            return false
        }else {

            $('#but2').css('opacity','0.5')
            $("#but2").attr("type", "button");
            return true
        }
    }
// ------------------------------------------------------------------->
    // MEIĢINĀTS TAISĪT  TIKAI APLHA. PRIEKŠ NAME/LASTNAME

    function validateEmail(name) {
        var re = /^[A-Za-z]+$/;
        return re.test(name);
        return true;
    }

    function namecheck(x){
        name = x[0].value;
        if(validateEmail(name)){
                x.siblings('.correct').css('display','block')
           
            return true
        }else{

            x.siblings('.correct').css('display','none')
            return false
        }
    }
    
    // function validateName(name) {
    //     if (document.myForm.name.value == "") {
    //         alert("Enter a name");
    //         document.myForm.name.focus();
    //         return false;
    //     }
    //     if (!/^[a-zA-Z]*$/g.test(document.myForm.name.value)) {
    //         alert("Invalid characters");
    //         document.myForm.name.focus();
    //         return false;
    //     }
    // }
    
// ------------------------------------------------------------------->
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
        return true;
    }

    

    function emailcheck(x){
        email = x[0].value;
        if(validateEmail(email)){
                x.siblings('.correct').css('display','block')
           
            return true
        }else{

            x.siblings('.correct').css('display','none')
            return false
        }
    }

    var summ = 0
    textlenght = function (len,x) {
        console.log(curent_input)
        
        val = x.val()

        if(val.length<=len){
            if(!(x[0].className.search(" incorect_input")+1)){
                x.siblings('.correct').css('display','none')
              
                return false
            }
        }else {
                x.siblings('.correct').css('display','block')
           

          //  x[0].className = x[0].className.replace(' incorect_input','')
            return true
        }
    }
    function amountCheck (x){
        //alert('lkjhgf')
        val = x.val()
        if (!isNaN(val)) {
            if(val>3000){
                x.val(3000)
            }else if (val<0) {
                x.val(0)
                
            }
            if (val>0) {
                x.siblings('.correct').css('display','block')
                return true
            }else{
                
                x.siblings('.correct').css('display','none')
                return false

            }
        }else{
                x.siblings('.correct').css('display','none')
                x.val(0)

            return false

        }
        
    }
    function mach(x){
        if (x.is(':checked')) {
            $('#city2').val($('#city').val())
            $('#street2').val($('#street').val())
            $('#h_numb2').val($('#h_numb').val())
            $('#f_numb2').val($('#f_numb').val())
            $('#postcode2').val($('#d_postcode').val())
            for (var i = 0; i < form_[current_block].length; i++) {
                form_[current_block][i] = true
            }
             $('#form .living_place_info input').parent().siblings('label').animate({'top':0,fontSize:'10px'},200,function(){
        

        })
        }else{
            $('#city2').val('')
            $('#street2').val('')
            $('#h_numb2').val('')
            $('#f_numb2').val('')
            $('#postcode2').val('')
            $('#form .living_place_info .correct').css('display','none')
            for (var i = 0; i < form_[current_block].length-1; i++) {
                form_[current_block][i] = false
            }
             $('#form .living_place_info input').parent().siblings('label').animate({'top':15,fontSize:'14px'},200,function(){
        

        })
        }
    }

    var anoyher_var = $('.xxx input')
    var my_arr = [false]

    // console.log(my_arr)

    for(i=0; i < anoyher_var.length; i++){
        my_arr[i] = false
    }

    var form_ = [[],[],[],[],[],[]]
    // form_[0] = []
   // var current_block = 0
   current_block = $('.xxx').index()
   

    check_array = function(array){
        for (var i = 0; i < array.length; i++) {
            if(!array[i]){
                return false;
            }else{
                return true;
            }
        }
    }

    checkk = function (x){
      curent_input = x.parent().parent().index()
      chtype = x.attr("chtype")

      if(chtype=='tekstLen'){
        len = x.attr('lenght')
        form_[current_block][curent_input] =  textlenght(len,x)
      }

      if(chtype=='emailcheck'){
        form_[current_block][curent_input] = emailcheck(x)
      }

      if(chtype=='passw'){
        len = x.attr('lenght')
        if(checkPass() && textlenght(len,x)) {
          form_[current_block][curent_input] = true
        } else {
          form_[current_block][curent_input] = false
        }

        var xxx = $('.xxx')
        var anoyher_var = $('.xxx input')
      }

    if (chtype=='mach'){
        mach(x)
    }

    if (chtype=='amountCheck') {
        form_[current_block][curent_input] = amountCheck(x)
    }

      if(chtype=="none"){
        form_[current_block][curent_input] = true
    }
// console.log(chtype)


      let hasError = form_[current_block].find(item => item == false);
        console.log(form_[current_block]);
        if(hasError === undefined) {
          $('.next').prop('disabled', false).css('opacity','1');
        }else{
          $('.next').prop('disabled', true).css('opacity','0.5');
        }
    }

    $('#p_code').mask('000000-00000', {placeholder: ""});
    $('#phone').mask('0000-0000', {placeholder: ""});
    $('#phone2').mask('0000-0000', {placeholder: ""});
    $('#p_or_id_number_valid_till').mask('00/00/0000', {placeholder: ""});
    $('#start_date').mask('00/00/0000', {placeholder: ""});
    $('#till').mask('00/00/0000', {placeholder: ""});

    function checkPass()
    {
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        if(pass1.value == pass2.value){
            pass2.style.backgroundColor = goodColor;
            return true
        }else{
            pass2.style.backgroundColor = badColor;
            return false
        }
    }

    var save_stuff = $('.hiding_stuff').html();

    $('#list').change(function(){
        console.log($(this).val())
        if($(this).val() == 'worker') {
            //alert('sssss')
            //$('.hiding_stuff').html(save_stuff);
            $('.hidable').css('display','block');

            for(i=0;i<=$('.hidable').length;i++){
                if (true) {}
                form_[3][i]=false
            }
             form_[current_block][0]=true

            
        } else if($(this).val() == 'pensioner'||$(this).val() == 'another') {
           // alert('sdsdsds')
            
            $('.hidable').css('display','none');
            for(i=0;i<=$('.hidable').length;i++){
                form_[3][i]=true
                $('.hidable:eq('+i+') input').val('_')
            }
             form_[current_block][0]=true

        } else{

        }

    });

    var slides = $(".selected");
    // console.log(slides)
    var i_i_b = 0

    function changeSlide(direction) {
        var target, current = slides.filter(".xxx");
        target = current[direction]();

        if(target.length) {
            current.removeClass('xxx');
            target.addClass("xxx");
        }
        current_block = $('.xxx').index()
        define_form()

        let hasError = form_[current_block].find(item => item == false);
        console.log(form_[current_block]);
        if(hasError === undefined) {
          $('.next').prop('disabled', false).css('opacity','1');
        }else{
          $('.next').prop('disabled', true).css('opacity','0.5');
        }

        if (current_block==0) {
            $('.prev').css('opacity','0.5')
        }else{
            $('.prev').css('opacity','1')

        }
        $('#counter').html((current_block+1)+'/'+6)
        if (current_block==5) {
            $('.form_move_buttons').css('display','none')
        }
    }

    define_form = function(){

        if(form_[current_block].length<1){

            inputs_len = $('.xxx input, .xxx select, .xxx checkbox').length
            console.log('current_block '+current_block)
                for(i=0;i<inputs_len;i++){
                form_[current_block][i] = false;
                if (current_block==2&&i==inputs_len-1) {
                form_[current_block][i] = true;

                }
            }
        }
    }

    define_form()
    // console.log(form_)
    $(".next").on("click", function () { changeSlide('next') });
    $(".prev").on("click", function () { changeSlide('prev') });




    $('#box2 .close').click(function(){
        $('#box2').css('display','none')
    })




    $('#form input, #sform input').focus(function(){
        $(this).parent().siblings('label').animate({'top':0,fontSize:'10px'},200,function(){
        

        })
    })

    $('#form input, #sform input').blur(function(){
            if (!($(this).val()!=null&&$(this).val()!=undefined&&$(this).val()!='')) {
               
                $(this).parent().siblings('label').animate({'top':15,fontSize:'14px'},200,function(){
            })
            
        }
    })

    $('#short_form .close').click(function(){
        $('#short_form').css('display','none')
    })

});
