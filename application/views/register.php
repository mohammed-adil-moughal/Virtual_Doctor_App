<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />
    <link rel="icon" href="<?php echo base_url(); ?>/assets/images/favicon.ico">
    <title>E-Daktari | Welcome</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css" id="style-resource-4">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/neon-core.css" id="style-resource-5">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/neon-theme.css" id="style-resource-6">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/neon-forms.css" id="style-resource-7">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/custom.css" id="style-resource-8">
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
    <!--[if lt IE 9]><script src="<?php echo base_url(); ?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
    <!-- TS1458070509: Neon - Responsive Admin Template created by Laborator -->
</head>

<body class="page-body login-page login-form-fall" data-url="http://demo.neontheme.com">
    <!-- TS14580705098989: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
    <script type="text/javascript">
    var baseurl = 'http://demo.neontheme.com/';
    </script>
    <div class="login-container">
        <div class="login-header login-caret">
            <div class="login-content">
                <a href="<?php echo base_url(); ?>/dashboard/main/" class="logo"> <img src="<?php echo base_url(); ?>assets/images/logo@2x.png" width="120" alt="" /> </a>
                <p class="description">Create an account, it's free and takes few moments only!</p>
                <!-- progress bar indicator -->
                <div class="login-progressbar-indicator">
                    <h3>43%</h3> <span>logging in...</span> </div>
            </div>
        </div>
        <div class="login-progressbar">
            <div></div>
        </div>
        <div class="login-form">
            <div class="login-content">
                <form method="post" role="form" id="form_register">
                    <div class="form-register-success"> <i class="entypo-check"></i>
                        <h3>You have been successfully registered.</h3>
                        <p>We have emailed you the confirmation link for your account.</p>
                    </div>
                    <div class="form-steps">
                        <div class="step current" id="step-1">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="entypo-user"></i> </div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" autocomplete="off" /> </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="entypo-phone"></i> </div>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" data-mask="phone" autocomplete="off" /> </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="entypo-calendar"></i> </div>
                                    <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Date of Birth (DD/MM/YYYY)" data-mask="date" autocomplete="off" /> </div>
                            </div>
                            <div class="form-group">
                                <button type="button" data-step="step-2" class="btn btn-primary btn-block btn-login"> <i class="entypo-right-open-mini"></i> Next Step
                                </button>
                            </div>
                            <div class="form-group">
                                Step 1 of 2
                            </div>
                        </div>
                        <div class="step" id="step-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="entypo-user-add"></i> </div>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" data-mask="[a-zA-Z0-1\.]+" data-is-regex="true" autocomplete="off" /> </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="entypo-mail"></i> </div>
                                    <input type="text" class="form-control" name="email" id="email" data-mask="email" placeholder="E-mail" autocomplete="off" /> </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="entypo-lock"></i> </div>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Choose Password" autocomplete="off" /> </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block btn-login"> <i class="entypo-right-open-mini"></i> Complete Registration
                                </button>
                            </div>
                            <div class="form-group">
                                Step 2 of 2
                            </div>
                        </div>
                    </div>
                </form>
                <div class="login-bottom-links">
                    <a href="<?php echo base_url(); ?>/extra/login/" class="link"> <i class="entypo-lock"></i> Return to Login Page
                    </a>
                    <br /> <a href="#">ToS</a> - <a href="#">Privacy Policy</a> </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js" id="script-resource-3"></script>
    <script src="<?php echo base_url(); ?>assets/js/joinable.js" id="script-resource-4"></script>
    <script src="<?php echo base_url(); ?>assets/js/resizeable.js" id="script-resource-5"></script>
    <script src="<?php echo base_url(); ?>assets/js/neon-api.js" id="script-resource-6"></script>
    <script src="<?php echo base_url(); ?>assets/js/cookies.min.js" id="script-resource-7"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js" id="script-resource-8"></script>
    <script src="<?php echo base_url(); ?>assets/js/neon-register.js" id="script-resource-9"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.inputmask.bundle.js" id="script-resource-10"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="<?php echo base_url(); ?>assets/js/neon-custom.js" id="script-resource-11"></script>
    <!-- Demo Settings -->
    <script src="<?php echo base_url(); ?>assets/js/neon-demo.js" id="script-resource-12"></script>
    <script src="<?php echo base_url(); ?>assets/js/neon-skins.js" id="script-resource-13"></script>
    <script type="text/javascript">
    /*var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28991003-7']);
    _gaq.push(['_setDomainName', 'demo.neontheme.com']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();*/
    </script>
</body>

</html>