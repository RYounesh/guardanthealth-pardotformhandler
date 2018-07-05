$(document).ready(function() {

    $('.custom-button .btn-default').click(function() { 
        $('.custom-label').removeClass('active');
        $(this).addClass('active');
        $('.contact-fields').fadeIn();

        if($(this).attr('id')=='physician'){
            $('#select-opt').show(500); 
            $("#txt-area").animate({ 
                height: 236
          }, 500);
            
        }else{
            $('#select-opt').hide(500);  
            $("#txt-area").animate({ 
                height: 172
          }, 500);
        }

    });

    $('#SubmitButton').click(function() {
        $(".input-type").each(function() {
            if ($(this).val() == '') {
                $(this).addClass("warning_red");
                $(this).closest("div").find('p').remove();
                $(this).closest("div").append('<p class="error-msg">This is required</p>');

            } else {

                $(this).removeClass("warning_red");
                $(this).closest("div").find('p').remove();


            }
        });

        if (!($(".input-type").hasClass('warning_red'))) {

            var pcEmail = $('#pcEmail').val();
            if (validateEmail(pcEmail)) {
                $("#pcEmail").closest("div").find('p').remove();
            } else {
                $("#pcEmail").closest("div").find('p').remove();
                $("#pcEmail").closest("div").append('<p class="error-msg">Invalid Email Address</p>');
                return false;
            }

            //add code to post data
        }

    });



    $(".input-type").keyup(function() {
        if ($(this).val() == '') {
            $(this).addClass("warning_red");
            $(this).closest("div").find('p').remove();
            $(this).closest("div").append('<p class="error-msg">This is required</p>');
        } else {
            $(this).removeClass("warning_red");
            $(this).closest("div").find('p').remove();
        }
        var sEmail = $(this).attr('id');
        var sEmailVal = $("#" + sEmail).val();
        if (sEmail == "sEmail" || sEmail == "pcEmail") {
            if (validateEmail(sEmailVal)) {
                $("#" + sEmail).closest("div").find('p').remove();
            } else {
                $("#" + sEmail).closest("div").find('p').remove();
                $("#" + sEmail).closest("div").append('<p class="error-msg">Invalid Email Address</p>');
                return false;
            }
        }
    });

    $('.selectpicker').change(function() {
        if ($(this).val() == "REQUEST A GUARDANT360 KIT") {
            window.location.replace("https://guardanthealth.herokuapp.com/landingWithoutVideo/");
        }
        $(this).removeClass("warning_red");
        $(this).closest("div").find('p').remove();

    });

    function validateEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        } else {
            return false;
        }
    }


});