<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DOAN</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Payment-Form.css">
    <link rel="stylesheet" href="assets/css/cri-menu.css">
    <link rel="stylesheet" href="assets/css/logo.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List-.css">
    <link rel="stylesheet" href="assets/css/Profile-with-data-and-skills.css">
</head>

<body>
<?php include("header2.php"); ?>
    <div class="container-fluid">
        <h3 class="text-dark mb-4">chỉnh sửa Profile</h3>
        <div class="card shadow mb-3">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">User Settings</p>
            </div>
            <div class="card-body">
                <form>
                    <div class="row" style="margin-bottom: 25px;text-align: left;">
                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 col-xxl-2" style="display: inline;text-align: center;margin-bottom: 25px;"><img class="rounded-circle mb-3 mt-4 img-fluid" src="assets/img/dogs/image2.jpeg" style="display: inline;max-height: 110px;"><br><button class="btn btn-primary btn-sm" id="photoBtn" type="button">Change Photo</button></div>
                        <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-xxl-10 align-self-center">
                            <div class="row">
                                <div class="col-md-12 text-start">
                                    <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email" required=""></div>
                                </div>
                                <div class="col-md-12 text-start">
                                    <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input class="form-control" type="text" placeholder="Username" name="username" required=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-start">
                            <div class="mb-3"><label class="form-label" for="username"><strong>Password</strong></label><input class="form-control" type="password" id="password" placeholder="Password"></div>
                        </div>
                        <div class="col-md-6 text-start">
                            <div class="mb-3"><label class="form-label" for="username"><strong>Confirm Password</strong></label><input class="form-control" type="password" id="verifyPassword" placeholder="Password"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" placeholder="John" name="first_name" required=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" placeholder="Doe" name="last_name" required=""></div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
    <label class="form-label" for="country"><strong>Country</strong></label>
    <select class="form-select" id="countryId" name="country" required="">
        <option value="">Select Country</option>
        <option value="vietnam">Vietnam</option>
        <option value="united-states">United States</option>
        <option value="united-kingdom">United Kingdom</option>
        <option value="france">France</option>
        <!-- Thêm các đất nước khác vào đây -->
    </select>
</div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input class="form-control" type="text" id="cityId" placeholder="Los Angeles" name="city" required=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" placeholder="Sunset Blvd, 38" name="address"></div>
                        </div>
                        <div class="col">
                            <p id="emailErrorMsg" class="text-danger" style="display:none;"></p>
                            <p id="passwordErrorMsg" class="text-danger" style="display:none;"></p>
                        </div>
                        <div class="col-md-12" style="text-align: right;margin-top: 5px;"><button class="btn btn-primary btn-sm" id="submitBtn" type="submit">Save Settings</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form-script.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
</body>

</html>