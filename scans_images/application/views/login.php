<!doctype html>
<html class="lte-ie9" lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">
    <title>SCANS</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>
    <!-- uikit -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/uikit/css/uikit.almost-flat.min.css"/>
    <!-- altair admin login page -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/login_page.min.css"/>
    <style>
        .error {
            border-color: #e53935 !important;
        }
    </style>
</head>
<body class="login_page">
<div class="login_page_wrapper">
    <div class="md-card" id="login_card">
        <div class="md-card-content large-padding" id="login_form">
            <div class="login_heading">
                <h2>WELCOME To SCANS</h2>
            </div>
            <form onsubmit="return false" method="post" id="form" name="form">
                <div id="msg" style="display: none;" class="uk-alert" data-uk-alert>
                    <a href="javascript:void(0)" class="uk-alert-close uk-close"></a>
                    <p id="msgText"></p>
                </div>
                <div class="uk-form-row">
                    <label for="UserName">Username</label>
                    <input class="md-input" type="text" id="UserName" name="UserName"/>
                </div>
                <div class="uk-form-row">
                    <label for="Password">Password</label>
                    <input class="md-input" type="password" id="Password" name="Password"/>
                </div>
                <div class="uk-margin-medium-top">
                    <button id="btnLogin" class="md-btn md-btn-primary md-btn-block md-btn-large" onclick="login()">Sign
                        In
                    </button>
                </div>
                <div class="uk-margin-top uk-form-row">
                    <a href="javascript:void(0)" id="login_help_show" class="uk-float-right">Need help?</a>
                </div>
            </form>
        </div>
        <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top"
                    id="login_help_close"></button>
            <h2 class="heading_b uk-text-success">Can't log in?</h2>
            <p>Here’s the info to get you back in to your account as quickly as possible.</p>
            <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps
                Lock is turned off, and that your username is spelled correctly, and then try again.</p>
            <p>If your password still isn’t working, it’s time to <a href="#" id="login_password_reset_show">reset your
                    password</a>.</p>
        </div>
        <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
            <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
            <form method="post" onsubmit="return false">
                <div id="msgReset" style="display: none;" class="uk-alert" data-uk-alert>
                    <a href="javascript:void(0)" class="uk-alert-close uk-close"></a>
                    <p id="msgResetText"></p>
                </div>
                <div class="uk-form-row">
                    <label for="login_email_reset">Your email address</label>
                    <input class="md-input" type="text" id="login_email_reset" name="login_email_reset"/>
                </div>
                <div class="uk-margin-medium-top">
                    <button id="btn-Reset" onclick="resetPassword()" class="md-btn md-btn-primary md-btn-block">Reset
                        password
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- common functions -->
<script src="<?= base_url() ?>assets/js/common.min.js"></script>
<!-- uikit functions -->
<script src="<?= base_url() ?>assets/js/uikit_custom.min.js"></script>
<!-- altair core functions -->
<script src="<?= base_url() ?>assets/js/altair_admin_common.min.js"></script>
<!-- altair login page functions -->
<script src="<?= base_url() ?>assets/js/pages/login.min.js"></script>
<script src="<?= base_url() ?>assets/js/core.js"></script>
<script>
    function login() {
        altair_helpers.content_preloader_show();
        var data = {};
        data["UserName"] = $('#UserName').val();
        data["Password"] = $('#Password').val();
        if (data["UserName"] == '' || data["UserName"] == undefined) {
            $('#UserName').addClass('md-input-danger');
            returnMsg('msgText', 'Invalid Username', 'uk-alert-danger', 'msg');
            return false;
        } else {
            $('#UserName').removeClass('md-input-danger');
        }
        if (data["Password"] == '' || data["Password"] == undefined) {
            $('#Password').addClass('md-input-danger');
            returnMsg('msgText', 'Invalid Password', 'uk-alert-danger', 'msg');
            return false;
        } else {
            $('#Password').removeClass('md-input-danger');
        }
        if (data["Password"] != '' && data["Password"] != undefined && data["UserName"] != '' && data["UserName"] != undefined) {
            CallAjax('<?php echo base_url() . 'index.php/Login/getLogin' ?>', data, 'POST', function (Result) {
                if (Result == 1) {
                    setTimeout(function () {
                        window.location.href = "<?php echo base_url() . 'index.php/dashboard' ?>";
                    }, 2000);
                    returnMsg('msgText', 'Success', 'uk-alert-success', 'msg');
                } else if (Result == 3) {
                    returnMsg('msgText', 'Invalid Username, No entry for this username', 'uk-alert-danger', 'msg');
                } else if (Result == 2) {
                    returnMsg('msgText', 'Incorrect Username or Password', 'uk-alert-danger', 'msg');
                } else {
                    returnMsg('msgText', 'Incorrect username or password', 'uk-alert-danger', 'msg');
                }
            });
        } else {
            returnMsg('msgText', 'Incorrect username or password', 'uk-alert-danger', 'msg');
        }
    }

    function resetPassword() {
        altair_helpers.content_preloader_show();
        var data = {};
        data['Email'] = $('#login_email_reset').val();
        if (!validateEmail(data['Email']) || data['Email'] == '' || data['Email'] == undefined) {
            $('#login_email_reset').addClass('md-input-danger');
            returnMsg('msgResetText', 'Invalid Email', 'uk-alert-danger', 'msgReset');
            return false;
        } else {
            $('#login_email_reset').removeClass('md-input-danger');
        }
        if (validateEmail(data['Email'])) {
            returnMsg('msgResetText', 'Please wait while checking your configuriations', 'uk-alert-success', 'msgReset');
            $('#btn-Reset').css('display', 'none');
            CallAjax('<?php echo base_url("index.php/Login/ForgetPass") ?>', data, "POST", function (Result) {
                if (Result == 1) {
                    returnMsg('msgResetText', 'Reset password, Process has been send to your email!', 'uk-alert-success', 'msgReset');
                    setTimeout(function () {
                        $('#btn-Reset').css('display', 'block');
                    }, 3000);
                } else {
                    $('#login_email_reset').addClass('md-input-danger');
                    $('#btn-Reset').css('display', 'block');
                    returnMsg('msgResetText', 'No such email found please contact administrator', 'uk-alert-danger', 'msgReset');
                }
            });
        }
    }
</script>
</body>
</html>