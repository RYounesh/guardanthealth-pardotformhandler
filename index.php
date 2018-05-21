<php

?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="font/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

    <div class="container-fluid">
        <header>
            <div class="row text-center">
                <h3>The Limitations Of Tissue</h3>
            </div>
            <div class="col-md-8 col-md-offset-2 text-center">
                <p class="header-content">A physician panel of Oncologists discuss their own experiences with the limitations of tissue and how an extensively validated liquid biopsy helps guide treatment selection.</p>
            </div>

        </header>
    </div>

    <div class="container head-img" id="video-section">
        <video autoplay muted loop id="video-container" autoplay>
            <source src="https://go.pardot.com/l/360001/2018-05-15/3rxh9/360001/24402/455515626__2_.mp4" type="video/mp4">
        </video>
        <i class="fa fa-pause-circle-o vid-controller"></i>
    </div>
    <div class="container custom-container">

        <div class="row">
            <div class="col-md-12 form-head text-center">
                <h4>Request a Guardant360 Kit</h4>
            </div>
            <div class="arrow-down"></div>
        </div>
        <div class="wrapper">
            <form class="form">
                <div class="form-one" id="form-one">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="First Name" class="form-control input-type " name="FirstName" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Last Name" class="form-control input-type " name="LastName" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="npi number" class="form-control input-type " name="NPINumber" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email for results delivery" class="form-control input-type " name="Email" id="sEmail">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-12" id="cancer-type">
                                <h4 class="text-center btn-header">What types of cancer patients do you primarily treat?</h4>
                            </div>

                            <div class="row custom-button">
                                <div class="col-md-4">
                                    <label class="btn-default form-control custom-label" for="360001_37368pi_360001_37368_507044_507044">
                                        <input type="radio" name="typeOfCancer" id="360001_37368pi_360001_37368_507044_507044" value="Lung Cancer" onchange="">
                                        <span class="info-text">Lung Cancer </span>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="btn-default form-control custom-label" for="360001_37368pi_360001_37368_507046_507046">
                                        <input type="radio" name="typeOfCancer" id="360001_37368pi_360001_37368_507046_507046" value="BREAST CANCER" onchange="">
                                        <span class="info-text">BREAST CANCER</span>
                                    </label>

                                </div>
                                <div class="col-md-4">
                                    <label class="btn-default form-control custom-label" for="360001_37368pi_360001_37368_507048_507048">
                                        <input type="radio" name="typeOfCancer" id="360001_37368pi_360001_37368_507048_507048" value="COLORECTAL CANCER" onchange="">
                                        <span class="info-text">COLORECTAL CANCER</span>
                                    </label>

                                </div>
                            </div>
                            <div class="row custom-button">
                                <div class="col-md-4">
                                    <label class="btn-default form-control custom-label" for="360001_37368pi_360001_37368_507050_507050">
                                        <input type="radio" name="typeOfCancer" id="360001_37368pi_360001_37368_507050_507050" value="GI/GU CANCER" onchange="">
                                        <span class="info-text">GI/GU CANCER</span>
                                    </label>

                                </div>
                                <div class="col-md-4">
                                    <label class="btn-default form-control custom-label" for="360001_37368pi_360001_37368_507052_507052">
                                        <input type="radio" name="typeOfCancer" id="360001_37368pi_360001_37368_507052_507052" value="MELANOMA CANCER" onchange="">
                                        <span class="info-text">MELANOMA CANCER</span>
                                    </label>

                                </div>
                                <div class="col-md-4">
                                    <label class="btn-default form-control custom-label" for="360001_37368pi_360001_37368_507054_507054">
                                        <input type="radio" name="typeOfCancer" id="360001_37368pi_360001_37368_507054_507054" value="OTHER CANCER" onchange="">
                                        <span class="info-text">OTHER CANCER</span>
                                    </label>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        <div class="form-two" id="form-two">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="row">
                        <div class="col-md-12">
                            <label class="info-text">Practice Contact</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="First Name" class="form-control input-type " name="pcFname" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Last Name" class="form-control input-type " name="pcLname" required="true">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Office Contact Email" class="form-control input-type " name="pcEmail" id="pcEmail" required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="info-text">Shipping Information</label>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Practice name" class="form-control input-type " name="pcShipping" required="true">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Address" class="form-control input-type " name="pcAddress" required="true">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" placeholder="city" class="form-control input-type " name="pcCity" required="true">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" placeholder="state" class="form-control input-type " name="pcState" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" placeholder="zip code" class="form-control input-type " name="pcZip" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="position:absolute; left:-9999px; top: -9999px;">
            <label for="pardot_extra_field">Comments</label>
            <input type="text" id="pardot_extra_field" name="pardot_extra_field">
        </div>

        <div class="form-three" id="form3">
            <div class="row">
                <i class="material-icons check-circle">&#xe5ca;</i>
            </div>
            <div class="row text-center">
                <h4 class="success">Success!</h4>
            </div>
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <p class="success-content">A Guardant Health representative will be in contact shortly.
                    </p>
                    <p class="success-content-link"> Click below to download the Physician Portal App.</p>
                </div>
            </div>
            <div class="row text-center portal-app">
                <a href="https://itunes.apple.com/us/app/guardant-health-physician-and-provider-portal/id1137717305?mt=8" target="_blank">
                    <img src="https://go.pardot.com/l/360001/2018-05-08/3rdfp/360001/23974/iTunesArtwork_2x.png" class="itune">
                </a>
                <a href="https://itunes.apple.com/us/app/guardant-health-physician-and-provider-portal/id1137717305?mt=8" target="_blank">
                    <img src="https://go.pardot.com/l/360001/2018-05-08/3rdfr/360001/23976/download_app_store.png" class="app-store">
                </a>
            </div>
        </div>

        <div class="form-four" id="form4">
            <div class="row">
                <i class="material-icons check-circle
">&#xe5ca;</i>
            </div>
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <p class="success-content-body">
                        <span class="bold">Thank you for requesting a Guardant360 Kit.</span>
                        <br> A Genomic Specialist will contact you for a consultation.</p>
                </div>
            </div>

        </div>

        <div class="row" id="shift">
            <div class="col-md-4 col-md-offset-4">
                <div class="stepwizard">
                    <div class="stepwizard-row">
                        <div class="stepwizard-step pull-left">
                            <button type="button" class="btn btn-primary btn-circle" id="one">
                                <span class="form-one">1 </span>
                                <i class="material-icons form-two">&#xe5ca;</i>
                            </button>

                        </div>
                        <div class="stepwizard-step pull-right">
                            <button type="button" class="btn btn-default btn-circle validate" id="two">2</button>

                        </div>

                    </div>
                    <hr/>

                    <div class="btn-next">
                        <button type="button" id="next" class="btn-primary btn-submit form-control validate">NEXT</button>
                    </div>
                </div>
            </div>

        </div>
        <div style="position:absolute; left:-9999px; top: -9999px;">
            <label for="pardot_extra_field">Comments</label>
            <input type="text" id="pardot_extra_field" name="pardot_extra_field">
        </div>
        <div class="row form-two">
            <div class="col-md-8 col-md-offset-2 submit">
                <button type="button" id="SubmitButton" class="btn-primary btn-submit form-control">SUBMIT</button>
            </div>
        </div>
        </form>

    </div>
    <a href="https://www.guardant360.com/" target="_blank">
        <div class="container">
            <div class="row">
                <div class="second-footer text-center">
                    <div>CLICK HERE TO LEARN MORE ABOUT </div>
                    <img src="https://go.pardot.com/l/360001/2018-05-04/3r4dh/360001/23658/logo_1x.svg" class="text-center">
                </div>
            </div>
        </div>
    </a>
    <div class="container-fluid">
        <div class="row">
            <footer>
                <p>2018 Guardant Health, Inc. All Rights Reserved. Legal/Privacy</p>
            </footer>
        </div>
    </div>
</body>
</html>