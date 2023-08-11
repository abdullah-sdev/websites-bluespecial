<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css"
        integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{url('frontend/style.css')}}" />
    <title>AutoDataRecords</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
    <div class="head">
        <div class="navbar">
            <a href="{{url('/')}}" class="logo"> <span>Auto</span>DataRecords </a>
            <ul class="nav-list">
                <li class="nav-item"><a class="active" href="{{url('/')}}">Home</a></li>
                
                <li class="nav-item">
                    <a class="" href="{{url('/HowToOrder')}}">How To Order</a>
                </li>
                
                <li class="nav-item lang-btn">
                    <i class="fa fa-flag" aria-hidden="true"></i>

                    <span>EN</span>
                </li>
            </ul>

            <a class="menu-btn">
                <img src="img/list.svg" class="menu-icon" alt="" />
                <img src="img/x.svg" class="close-icon" alt="" />
            </a>
        </div>