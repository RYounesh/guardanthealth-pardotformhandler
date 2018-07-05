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
    <link rel="stylesheet" type="text/css" href="./css/gotham-rounded.css">
    <link rel="stylesheet" type="text/css" href="contactStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="contactApp.js"></script>
    <style>
        .contact-fields {
            display: none;
        }
    </style>
</head>

<body>

    <div class="container-fluid contact-head">
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
                    <h4 class="text-center btn-header ">I am a...</h4>
                </div>

                <div class="row custom-button contact-option">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="btn-default form-control custom-label" for="" id="physician">
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
                <div class="row cust-row contact-fields">
                    <div>

                        <div class="col-md-6">

                            <div class="form-group select-opt" id="select-opt">
                                <select class="form-control input-type selectpicker" id="inquiry-type">
                                    <option value="">INQUIRY TYPE<i class="fa fa-caret-down" aria-hidden="true"></i></option>
                                    <option value="OTHER">OTHER</option>
                                    <option value="REQUEST A GUARDANT360 KIT">REQUEST A GUARDANT360 KIT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="First name *" class="form-control input-type ">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Last name *" class="form-control input-type ">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email *" class="form-control input-type " id="pcEmail">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea rows="11" cols="50" placeholder="Your inquiry" class="form-control input-type" id="txt-area"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="contact-submit">
                        <div class="submit">
                            <button type="button" class="btn-primary btn-submit form-control" id="SubmitButton">SUBMIT</button>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </div>
    <div class="col-md-8 col-md-offset-2 text-center contact-footer2">
        <h4>Guardant Health, Inc.</h4>
        <div class="col-md-6">
            <p>505 Penobscot Dr.
                <br/> Redwood City, CA 94063
                <br/>
                <p/>
                <p>
                    Telephone: 855.698.8887
                    <br/> Fax: 888.974.4258</p>
        </div>
        <div class="col-md-6">
            <p> Contact us via email at:
                <br/> clientservices@guardanthealth.com
            </p>

            <p>Media inquiries:
                <br/> press@guardanthealth.com
            </p>
        </div>
    </div>
</body>
</html>