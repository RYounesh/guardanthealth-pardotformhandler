$(document).ready(function() {
    $("#form3").hide(), $("#form4").hide(), $(".validate").click(function() {
        if($('#npi').hasClass('warning_red'))
        {
            return false;
        }
        if ($("input[name=typeOfCancer]:checked").val()) {
            if ($(".cancer-type").remove(), !t($("#sEmail").val())) return $("#sEmail").closest("div").find("p").remove(), $("#sEmail").closest("div").append('<p class="error-msg">Invalid Email Address</p>'), !1;
            $("#sEmail").closest("div").find("p").remove(), $(".form-one input").each(function() {
                if ("" == $(this).val()) return $(this).addClass("warning_red"), $(this).closest("div").find("p").remove(), $(this).closest("div").append('<p class="error-msg">This field is required.</p>'), !1;
                $(this).removeClass("warning_red"), $(this).closest("div").find("p").remove()
            }), $(".form-one input[type=text]").hasClass("warning_red") || ($(".validate .stepwizard-step").hide(500), $("#two").removeClass("btn-default"), $("#two").addClass("btn-primary"), $(".form-two").show(500), $(".form-one").hide(500), "one" == $(this).attr("id") ? ($("#next").show(500), $("#two").removeClass("btn-primary"), $("#two").addClass("btn-default"), $(".form-one").show(500), $(".form-two").hide(500)) : ($(this).removeClass("btn-default"), $(".form-two").show(500), $(".form-one").hide(500), $("#next").hide(500)))
        } else $(".cancer-type").remove(), $("#cancer-type").append('<div class="col-md-12 text-center cancer-type error-msg">Please select cancer type</div>'), $(".form-one input").each(function() {
            "" == $(this).val() ? ($(this).addClass("warning_red"), $(this).closest("div").find("p").remove(), $(this).closest("div").append('<p class="error-msg">This field is required.</p>')) : ($(this).removeClass("warning_red"), $(this).closest("div").find("p").remove())
        })
    }), $("#SubmitButton").click(function() {
        if ($(".form-two input[type=text]").each(function() {
                "" == $(this).val() ? ($(this).addClass("warning_red"), $(this).closest("div").find("p").remove(), $(this).closest("div").append('<p class="error-msg">This field is required.</p>')) : ($(this).removeClass("warning_red"), $(this).closest("div").find("p").remove())
            }), !$(".form-two input[type=text]").hasClass("warning_red")) {
            if (!t($("#pcEmail").val())) return $("#pcEmail").closest("div").find("p").remove(), $("#pcEmail").closest("div").append('<p class="error-msg">Invalid Email Address</p>'), !1;
            $("#pcEmail").closest("div").find("p").remove(), $("#two").removeClass("btn-default"), $("#two").addClass("btn-primary"), $(".form-two").show(500), $(".form-one").hide(500);
            var e = document.getElementsByName("FirstName")[0].value,
                s = document.getElementsByName("LastName")[0].value,
                i = document.getElementsByName("NPINumber")[0].value,
                a = document.getElementsByName("Email")[0].value,
                o = document.getElementsByName("pcFname")[0].value,
                n = document.getElementsByName("pcLname")[0].value,
                r = document.getElementsByName("pcEmail")[0].value,
                l = document.getElementsByName("pcShipping")[0].value,
                d = document.getElementsByName("pcAddress")[0].value,
                m = document.getElementsByName("pcCity")[0].value,
                c = document.getElementsByName("pcState")[0].value,
                p = document.getElementsByName("pcZip")[0].value,
                v = $('input[name="typeOfCancer"]:checked').val(),
				xx = 'FirstName : '+e+'\n'+'LastName : '+s+'\n''NPINumber : '+i+'\n'+'Email : '+a+'\n'+'pcFname : '+o+'\n'+'pcLname : '+n+'\n'+'pcEmail : '+r+'\n'+'pcShipping : '+l+'\n'+'pcAddress : '+d+'\n'+'pcCity : '+m+'\n'+'pcState : '+c+'\n'+'pcZip : '+p+'\n'+'TypeOfCancer : '+v
                u = {
                    Email: a,
                    FirstName: e,
                    LastName: s,
                    NPINumber: i,
                    PC_FIRSTNAME: o,
                    PC_LASTNAME: n,
                    PC_OFFICECONTACTEMAIL: r,
                    PRACTICENAME: l,
                    AddressOne: d,
                    City: m,
                    State: c,
                    Zip: p,
                    TypeOfCancer: v,
					RequestaKitContactDetails: xx
                },
                f = $.param(u);
            $.ajax({
                url: "https://go.pardot.com/l/360001/2018-05-14/3rt2y?" + f,
                jsonpCallback: "callback",
                dataType: "jsonp"
            }), window.callback = function(e) {
                "success" == e.result && ("OTHER CANCER" == v ? ($("#form4").show(500), $(".form-one").hide(500), $(".form-two").hide(500), $("#shift").hide(500)) : ($("#form3").show(500), $(".form-one").hide(500), $(".form-two").hide(500), $("#shift").hide(500)))
            }
        }
    }), $(".custom-button .btn-default").click(function() {
        $(".custom-label").removeClass("active"), $(this).addClass("active")
    });
    var e = document.getElementById("video-container");

    function t(e) {
        return !!/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(e)
    }
      $("#video-section").click(function() {
        $(this).find('i').hasClass("fa-pause") ? ($(this).find('i').removeClass("fa-pause"), $(this).find('i').addClass("fa-play"), e.pause()) : ($(this).find('i').removeClass("fa-play"), $(this).find('i').addClass("fa-pause"), e.play())
        $(".vid-controller").toggle()
    }), $(".stepwizard-step .btn").click(function() {
        "one" == $(this).attr("id") && ($("#two").removeClass("btn-primary"), $("#two").addClass("btn-default"), $(".form-one").show(500), $(".form-two").hide(500), $("#next").show(500))
    }), $("input[type=text]").keyup(function(event) {
        "" == $(this).val() ? ($(this).addClass("warning_red"), $(this).closest("div").find("p").remove(), $(this).closest("div").append('<p class="error-msg">This field is required.</p>')) : ($(this).removeClass("warning_red"), $(this).closest("div").find("p").remove());
        var e = $(this).attr("id"),
            s = $("#" + e).val();
        if ("sEmail" == e || "pcEmail" == e) {
            if (!t(s)) return $("#" + e).closest("div").find("p").remove(), $("#" + e).closest("div").append('<p class="error-msg">Invalid Email Address</p>'), !1;
            $("#" + e).closest("div").find("p").remove()
        }
        var npi = $(this).attr("id"),
            npiVal = $("#" + npi).val();
        if(npi=='npi')
        {
        if (npiVal.match(/^\d+$/)) { 
            if(npiVal.length!=10){
                $(this).addClass("warning_red");
               $(this).closest("div").find('p').remove();
               $(this).closest("div").append('<p class="error-msg">Enter 10 digit only</p>');
               return false;
            }else{
                $(this).removeClass("warning_red");
                $(this).closest("div").find('p').remove();
            }
                   
        }else{
            $("#" + npi).val('');
            $(this).closest("div").find('p').remove();
            $(this).closest("div").append('<p class="error-msg">Enter digit only</p>');
            return false;
        }
    
    }
    }), $("input[name=typeOfCancer]").click(function() {
        $(".cancer-type").remove()
    })
});