<!DOCTYPE html>
<html data-bs-theme="light" lang="en" data-bss-forced-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DOAN</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/FontAwesome.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List-.css">
</head>

<body>
<?php include("header2.php"); ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="bg-white shadow-sm rounded-lg p-5">
                    <ul class="nav nav-pills nav-fill bg-light rounded-pill mb-3" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active rounded-pill" role="tab" data-bs-toggle="pill" data-toggle="pill" href="#nav-tab-card"><i class="fas fa-credit-card"></i> Credit Card </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link rounded-pill" role="tab" data-bs-toggle="pill" data-toggle="pill" href="#nav-tab-paypal"><i class="fa fa-paypal"></i> Paypal </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link rounded-pill" role="tab" data-bs-toggle="pill" data-toggle="pill" href="#nav-tab-bank"><i class="fas fa-university"></i> Bank Transfer </a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active fade show" role="tabpanel" id="nav-tab-card">
                            <p class="alert alert-success">Some text success or error</p>
                            <form role="form">
                                <div class="form-group"><label class="form-label" for="username">Full name (on the card)</label><input class="form-control form-control" type="text" name="username" placeholder="Jeff Doe" required=""></div>
                                <div class="form-group"><label class="form-label" for="cardNumber">Card number</label>
                                    <div class="input-group"><input class="form-control form-control" type="text" name="cardNumber" placeholder="Your card number" required="">
                                        <div class="input-group-text input-group-append"><span class="text-muted input-group-text"><i class="fa fa-cc-visa mx-1"></i><i class="fa fa-cc-amex mx-1"></i><i class="fa fa-cc-mastercard mx-1"></i></span></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"><label class="form-label"><span class="hidden-xs">Expiration</span></label>
                                            <div class="input-group"><input class="form-control form-control" type="number" name="" placeholder="MM" required=""><input class="form-control form-control" type="number" name="" placeholder="YY" required=""></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"><label class="form-label" data-toggle="tooltip" title="Three-digits code on the back of your card">CVV <i class="fas fa-question-circle"></i></label><input class="form-control form-control" type="text" required=""></div>
                                    </div>
                                </div><a class="btn btn-primary shadow-sm subscribe btn-block rounded-pill" role="button" href="9.xac_nhan(muahang).php"> Confirm </a>
                            </form>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="nav-tab-paypal">
                            <p>Paypal is easiest way to pay online</p>
                            <p><button class="btn btn-primary rounded-pill" type="button"><i class="fa fa-paypal mr-2"></i> Log into my Paypal</button></p>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="nav-tab-bank">
                            <h6>Bank account details</h6><dl>
              <dt>Bank</dt>
              <dd> THE WORLD BANK</dd>
            </dl><dl>
              <dt>Account number</dt>
              <dd>7775877975</dd>
            </dl><dl>
              <dt>IBAN</dt>
              <dd>CZ7775877975656</dd>
            </dl>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
</body>

</html>