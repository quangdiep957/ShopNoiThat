<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Quangdiep">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="templace/css/font-face.css" rel="stylesheet" media="all">
    <link href="templace/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="templace/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="templace/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="templace/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="templace/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="templace/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="templace/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="templace/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="templace/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="templace/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="templace/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="templace/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
       
        
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                <img src="./Client/img_sp/Screenshot (683).png"style="width:70%"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1" style="background-color:#e5e5e5">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>ERADO
                            </a>

                        </li>
                        <li>
                            <a href="IndexProduct.php">
                                <i class="fas fa-chart-bar"></i>Qu???n l?? s???n ph???m
                            </a>
                        </li>
                        <li>
                            <a  href="IndexCategories.php">
                                <i class="fas fa-table"></i>Qu???n l?? lo???i s???n ph???m
                            </a>
                        </li>
                        <li>
                            <a  href="Home.php">
                                <i class="far fa-check-square"></i>Qu???n l?? gi??? h??ng
                            </a>
                        </li>
                        <li>
                            <a  href="Indexpartner.php">
                                <i class="fas fa-calendar-alt"></i>Qu???n l?? nh?? cung c???p
                            </a>
                        </li>
                        <li>
                            <a  href="Indexblog.php">
                                <i class="fas fa-map-marker-alt"></i>Qu???n l?? tin t???c
                            </a>
                        <li>
                            <a  href="CreateIMG.php">
                                <i class="fas fa-map-marker-alt"></i>Qu???n l?? ???nh
                            </a>
                        </li>
                        <li>
                            <a  href="IndexProduct.php">
                                <i class="fas fa-map-marker-alt"></i>Th???ng k??
                            </a>
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow"  href="IndexProduct.php">
                                <i class="fas fa-copy"></i>Qu???n l?? t??i kho???n
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a>Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="row">
                               

                            </div>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2021</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2021 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2021 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2021 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">



                                       
                                            <div class="image">
                                                <img src="./img/diep.jpg" style="width:30px" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#"></a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="./img/diep.jpg" style="width:30px" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#"><?php echo $_SESSION['name']; ?></a>
                                                        </h5>
                                                        <span class="email"></span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-account"></i>Account
                                                        </a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-settings"></i>Setting
                                                        </a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="./Client/">
                                                            <i class="zmdi zmdi-money-box"></i>Client
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="account-dropdown__footer">
                                                    <a href="check_login.php?action=logout"><i class="zmdi zmdi-power"></i></a>


                                                </div>
                                            </div>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="main-content" style="padding-top:50px">
            <?php $tg = time();
                            //echo $tg;
                            $tgout = 90;
                             $ip=$_SERVER['REMOTE_ADDR']; 
                            //echo $ip;
                            $tgnew = $tg - $tgout;

                                    include "Connect.php";
                                    $sql = "insert into truycap(time,ip,trangthai) values($tg,'$ip',1)";
                                    $query = mysqli_query($conn,$sql) or die("can't connect");
                                    //echo $tgnew;
                                
                                    // x??a khi qu?? 3phut
                                    $sql1 = "update truycap set trangthai='false' where time < $tgnew ";
                                $query1 = mysqli_query($conn,$sql1) or die("can't connect");
                                ?>