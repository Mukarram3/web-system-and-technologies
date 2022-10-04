<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mulli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@400;600;700&amp;display=swap">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body data-spy="scroll" data-target="#legalSpy" data-offset="0">
    <nav class="navbar navbar-expand-md bg-light1 navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="assets/img/logo.png" height="34">
            </a>
            <div class="d-block d-md-none">
                <i type="button" data-toggle="modal" data-target="#mobMenu_modal" class="fa fa-bars p-3"></i>
            </div>
            <button class="navbar-toggler d-none" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-md-block" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Products</a>
                        <div class="dropdown-menu full_dropdown">
                            <div class="container">
                                <div class="row justify-content-center w-100">
                                    <div class="col-md-5 col-lg-4">
                                        <a href="payment-api" class="d-flex text-dark">
                                            <div>
                                                <figure><img src="assets/img/icons/mob_card.svg"></figure>
                                            </div>
                                            <div>
                                                <h6>Payment API <i class="fa fa-chevron-right ml-2"></i></h6>
                                                <small>Seamlessly initiate wire payments from within your
                                                    product.</small>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-md-5 col-lg-4">
                                        <a href="data-api" class="d-flex text-dark">
                                            <div>
                                                <figure><img src="assets/img/icons/money_time.svg"></figure>
                                            </div>
                                            <div>
                                                <h6>Data API <i class="fa fa-chevron-right ml-2"></i></h6>
                                                <small>Directly access your customers' financial data.</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="legal">Legal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="security">Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link1 btn btn-outline-primary" href="auth">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
