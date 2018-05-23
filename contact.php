<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardant360</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/gotham-rounded.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Gotham Rounded Light';
            font-weight: normal;
        }

        h3 {
            color: #346094;
            font-size: 40px;
        }

        .row.text-center h4 {
            color: #346094;
            font-size: 36px;
        }

        .head-img {
            padding: 0px;
        }

        .head-img img {
            width: 100%;
        }

        header p {
            color: #464A4D;
            font-size: 18px;
            line-height: 22px;
        }

        .form-head {
            background-color: #346094;
            padding: 15px;
            color: #ffffff;
            margin-top: -77px;
            position: relative;
            z-index: 11;
        }

        footer {
            background-color: #346094;
            padding-top: 15px;
            padding-bottom: 1px;
            margin-top: 50px;
            color: #ffffff;
            text-align: center;
        }

        .h4,
        h4 {
            font-size: 25px;
            font-weight: normal;
        }

        .form {
            margin-top: 30px;
        }

        .input-type,option {
            height: 44px; 
            border-radius: unset;
            font-family: 'Gotham Rounded Book' !important;
            font-size: 14px;
            color:#464A4D !important;
            background-color: rgba(70, 74, 77, 0.1);
            border: 1px solid #ececed;
        }

        .submit .btn-submit {
            height: 50px;
            margin-bottom: 50px;
            font-family: 'Gotham Rounded Bold';
            font-size: 16px;
        }

 ::placeholder { 
    opacity: 1; 
    color:#464A4D !important;
}
        ::-webkit-input-placeholder {
            /* Chrome */
            color:#464A4D !important;
            font-size: 14px;
            text-transform: uppercase;
            opacity: 1; 
        }

        :-ms-input-placeholder {
            /* IE 10+ */
            color:#464A4D !important;
            font-size: 14px;
            text-transform: uppercase;
            opacity: 1; 
        }

        ::-moz-placeholder {
            /* Firefox 19+ */
            color:#464A4D !important;
            font-size: 14px;
            text-transform: uppercase;
            opacity: 1;
        }

        :-moz-placeholder {
            /* Firefox 4 - 18 */
            color:#464A4D !important;
            font-size: 14px;
            text-transform: uppercase;
            opacity: 1;
        }

        .arrow-down {
            width: 0;
            height: 0;
            margin: auto;
            border-left: 40px solid transparent;
            border-right: 40px solid transparent;
            border-top: 25px solid #346094;
        }

        .custom-button {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .custom-button .btn-default {
            height: 60px;
            font-size: 14px;
            padding: 20px;
            text-align: center;
            color: #555;
            margin-top: 10px;
            text-transform: uppercase;
            border-radius: unset;
        }

        .custom-button .btn-default:hover {
            color: #346094;
            border: 2px solid #346094;
            cursor: pointer;
            background: #fff;
        }

        .btn-default.active {
            background: #fff;
            border: 2px solid #346094;
            font-family: 'Gotham Rounded Bold' !important;
            color: #346094 !important;

        }

        .btn-header {
            padding: 10px;
            font-family: 'Gotham Rounded book';
            color: #353535;
            font-size: 20px;
        }

        @media (max-width: 600px) {
            .contact-container{
                width: 100% !important;
            }
        }
        @media (min-width: 960px) {
            .contact-container{
                width:846px !important;
            }
        }

        /*steps form bottom*/

        .stepwizard-step p {
            margin-top: 10px;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            width: 100%;
            margin: 40px auto;
            position: relative;
        }

        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;

        }

        .stepwizard-step {
            display: table-cell;
            position: relative;
        }

        .btn-circle:hover,
        .btn-circle:visited,
        .btn.focus,
        .btn:focus {
            border: 10px solid #ffffff !important;
        }

        *:focus {
            outline: 0 !important;
        }

        .btn-circle {
            width: 40px;
            height: 40px;
            text-align: center;
            padding: 6px 0;
            font-size: 17px;
            margin-top: -5px;
            line-height: 1.428571429;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            text-align: center;
            padding: 6px 0;
            font-size: 17px;
            margin-top: -16px;
            line-height: 1.428571429;
            border-radius: 50%;
            border: 10px solid #fff;
        }

        .btn-default.btn-circle {
            background-color: #dadbdb;
            color: #fff;
        }

        .second-footer {
            padding: 20px;
            border: 1px solid #b9c8da;
        }

        .form-two {
            display: none;
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 10px;
            padding-top: 10px;
            font-size: 16px;
            color: #353535;
            font-weight: 500;
        } 

        /* Style the video: 100% width and height to cover the entire window */

        #video-container {
            position: relative;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }

        .custom-label input {
            opacity: 0;
            position: absolute;
        }

        .contact-option .btn-default {
            height: 60px;
    font-size: 14px;
    padding: 20px 10px;
    text-align: center;
    color: #464A4D;
    font-family: 'Gotham Rounded Book';
    margin-top: 10px;
    text-transform: uppercase;
    border-radius: unset;
        }

         .selectpicker {
           -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            
        } 
        .select-opt:after{ 
            content: '';
    position: absolute;
    top: 20px;
    /* left: 0; */
    right: 30px;
    margin: 0 auto;
    width: 0;
    height: 0;
    border-top: solid 5px #a79c96;
    border-left: solid 5px transparent;
    border-right: solid 5px transparent;
} 
 
        .contact-container{
            width: 846px;
            margin: auto;
            box-shadow: 0 0 24px 0 rgba(0,0,0,0.1);
            -webkit-box-shadow: 0 0 24px 0 rgba(0,0,0,0.1);
            -moz-box-shadow: 0 0 24px 0 rgba(0,0,0,0.1);
            -ms-box-shadow: 0 0 24px 0 rgba(0,0,0,0.1);
            -o-box-shadow: 0 0 24px 0 rgba(0,0,0,0.1);
        }
        .form-group{
            margin-left: -6px;
    margin-right: -6px; 
    margin-bottom: 20px; 
        }
        .contact-submit{
            clear: both;
            margin-top: 20px;
            padding: 9px;
        }
        .contact-footer2{
            margin-top:40px; 
            margin-bottom: 40px;
        }
      .contact-footer2 h4{
          margin-bottom: 30px;
          font-family: 'Gotham Rounded Book';
          color:#464A4D;
      }
      .contact-footer2 p{
          margin-bottom: 30px;
          font-family: 'Gotham Rounded Light';
          color:#464A4D;
          font-size:16px;
      }
      
      .btn-primary{
        background-color: #346094;
      }
      .form-control { 
    padding: 6px 16px;
      }
    </style>

</head>

<body>

    <div class="container-fluid">
        <header>
            <div class="row text-center">
                <h4>Contact</h4>
            </div>

        </header>
    </div>

    <div class="container contact-container">

        <form class="form"> 
            <div class="col-md-12">
                <div class="col-md-12">
                    <h4 class="text-center btn-header ">I am a ...</h4>
                </div>

                <div class="row custom-button contact-option">
                    
                    <div class="col-md-3">
                        <div class="form-group">                        
                        <label class="btn-default form-control custom-label" for="">
                            <input type="radio" name="" id="" value="507044" onchange=""> Physician </label>
                    </div>
                </div>
                
                    <div class="col-md-3">
                        <div class="form-group">
                        <label class="btn-default form-control custom-label" for="">
                            <input type="radio" name="" id="" value="507046" onchange="">Patient</label>

                    </div>
                </div>
                    
                    <div class="col-md-3">
                        <div class="form-group">
                        <label class="btn-default form-control custom-label" for="">
                            <input type="radio" name="" id="" value="507048" onchange="">Media Outlet</label>

                    </div>
                </div>
                
                    <div class="col-md-3">
                        <div class="form-group">
                        <label class="btn-default form-control custom-label" for="">
                            <input type="radio" name="" id="" value="507050" onchange="">OTHER INQUIRY</label>

                    </div>
                </div>
                </div>
                <div class="row cust-row">
                    <div>


                        <div class="col-md-6">


                            <div class="form-group select-opt">
                                <select class="form-control input-type selectpicker">
                                    <option>INQUIRY TYPE<i class="fa fa-caret-down" aria-hidden="true"></i></option>
                                    <option>OTHER</option>
                                    <option>GUARDANT 360 KIT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="First name *" class="form-control input-type ">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Last name *" class="form-control input-type ">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email *" class="form-control input-type ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea   rows="11" cols="50" placeholder="Your inquiry" class="form-control input-type" ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="contact-submit">
                            <div class="submit">
                                <button type="button" class="btn-primary btn-submit form-control">SUBMIT</button>
                            </div>
                        </div>

                </div>
            </div>  


    </div>

   
    </form>


    </div>
    <div class="col-md-8 col-md-offset-2 text-center contact-footer2">
                <h4>Guardant Health, Inc.</h4>
                <div class="col-md-6">
                    <p>505 Penobscot Dr.<br/>
                            Redwood City, CA 94063<br/>
                           <p/>
                           <p> 
                            Telephone: 855.698.8887<br/>
                            Fax: 888.974.4258</p>
                </div>
                <div class="col-md-6">
                        <p> Contact us via email at:<br/>
                        clientservices@guardanthealth.com</p>
                        
                        <p>Media inquiries:<br/>
                        press@guardanthealth.com</p>
                </div>
            </div>

</body>

<script>
    $(document).ready(function () {
        $('.stepwizard-step .btn').click(function () {
            if ($(this).attr('id') == 'one') {
                $('#two').removeClass('btn-primary');
                $('#two').addClass('btn-default');
                $('.form-one').show(500);
                $('.form-two').hide(500);
            } else {
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
                $('.form-two').show(500);
                $('.form-one').hide(500);
            }
        });

        $('.custom-button .btn-default').click(function () {
            $('.custom-label').removeClass('active');
            $(this).addClass('active');
        })
    });
</script>

</html>