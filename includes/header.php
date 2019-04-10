<?php ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MinePoS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth">
    <link rel="stylesheet" href="https://minepos.b-cdn.net/assets/css/styles.min.css">
    <link rel="icon" href="https://minepos.b-cdn.net/favicon.ico">
    <meta property="og:title" content="MinePoS" />
    <meta property="og:url" content="https://MinePoS.net/" />
    <meta property="og:image" content="https://minepos.net/assets/img/logo.png" />
    <meta property="og:description" content="MinePoS is a free self-hosted game donation system" />
    <meta name="theme-color" content="#A32A2A">

</head>

<body style="background-color:<?php if ($pageTitle == "Features") { echo "#white";} else {echo "rgb(98,25,25)";} ?>;">

<nav class="navbar navbar-expand-md navbar-dark sticky-top navigation-clean-button">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"> <img src="https://minepos.b-cdn.net/assets/img/MinePosLogo.svg" class="minepos-nav"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item navsize <?php if ($pageTitle == "Home") {echo "active";}?>">
                    <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="nav-item navsize <?php if ($pageTitle == "Features") {echo "active";}?>">
                    <a class="nav-link" href="features.php"><i class="fa fa-star-o"></i> Features</a>
                </li>
                <li class="nav-item navsize <?php if ($pageTitle == "Mission") {echo "active";}?>">
                    <a class="nav-link" href="construction.html"><i class="fas fa-hand-holding-heart"></i> Our Mission</a>
                </li>
                <li class="nav-item navsize">
                    <a class="nav-link" href="https://github.com/MinePoS/Documentation/wiki"><i class="fas fa-book-open"></i> Docs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
