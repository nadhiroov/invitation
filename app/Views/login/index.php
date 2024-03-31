<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>/template2/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url(); ?>/template2/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>/template2/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/template2/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

    <div id="login-page">
        <div class="container">
            <form class="form-login" action="auth" method="post">
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <?= csrf_field() ?>
                    <input type="text" class="form-control" placeholder="User ID" autofocus name="username">
                    <br>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <?php if (session()->getFlashdata('msg_emp')) : ?>
                        <!-- username / password kosong -->
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?= session()->getFlashdata('msg_emp') ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('msg_pass')) : ?>
                        <!-- username / password salah -->
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?= session()->getFlashdata('msg_pass') ?>
                        </div>
                    <?php endif; ?>
                    <label class="checkbox">
                        <span class="pull-right">
                            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>

                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    <hr>

                    <div class="login-social-link centered">
                        <div class="registration">
                            Don't have an account yet?<br />
                            <a class="" href="#">
                                Create an account
                            </a>
                        </div>

                    </div>

            </form>

        </div>
    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url(); ?>/template2/js/jquery.js"></script>
    <script src="<?= base_url(); ?>/template2/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?= base_url(); ?>/template2/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?= base_url(); ?>/template2/img/login-bg.jpg", {
            speed: 500
        });
    </script>


</body>

</html>