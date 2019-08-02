<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo "$pageTitle"; ?> | MinePOS</title>

    <meta name="keywords" content="MinePOS Donation system" />
    <meta name="description" content="MinePOS is a free self-hosted game donation system.">
    <meta name="author" content="Keystirras.ml">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://minepos.b-cdn.net/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://minepos.b-cdn.net/img/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="https://minepos.b-cdn.net/img/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://minepos.b-cdn.net/img/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://minepos.b-cdn.net/img/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://minepos.b-cdn.net/img/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="https://minepos.b-cdn.net/img/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://minepos.b-cdn.net/img/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="https://minepos.b-cdn.net/img/icons/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://minepos.b-cdn.net/img/icons/apple-touch-icon-180x180.png" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">


    <link href="https://fonts.googleapis.com/css?family=Caveat|Sonsie+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lemon" rel="stylesheet"> 

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="https://minepos.b-cdn.net/css/theme.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/css/theme-elements.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/vendor/circle-flip-slideshow/css/component.css">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="https://minepos.b-cdn.net/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="https://minepos.b-cdn.net/css/custom.css">

    <!-- Head Libs -->
    <script src="https://minepos.b-cdn.net/vendor/modernizr/modernizr.min.js"></script>

</head>
<body>
<div class="body">
    <header id="header" style="z-index: 100001;" class="header-dark header-no-min-height" data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 52, 'stickySetTop': '0'}">
        <div class="header-body border-top-0 header-body-bottom-border">
            <div class="header-container container container-lg">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.php">
                                    <img alt="Logo" width="90" height="50" src="https://minepos.b-cdn.net/img/MinePosLogo.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1 header-nav-light-text">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav" style="color:white; font-size:17px;">
                                            <li>
                                                <a class="dropdown-item dropdown-toggle <?php if ($pageTitle == "Home") {echo "active";}?>" href="index.php" style="font-size: 17px;">Home</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item dropdown-toggle <?php if ($pageTitle == "Features") {echo "active";}?>" href="features.php" style="font-size: 17px;">Features</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item dropdown-toggle <?php if ($pageTitle == "Team") {echo "active";}?>" href="ourteam.php" style="font-size: 17px;">Our Team</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#" style="font-size: 17px;">Get Started</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="commingsoon.php">
                                                            Spigot (WIP)
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="https://github.com/MinePoS/Documentation/wiki">
                                                            Panel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
