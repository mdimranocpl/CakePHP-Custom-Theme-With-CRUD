<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <!-- Fontfaces CSS-->
    <link href="<?= $baseurl ?>webroot/assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= $baseurl ?>webroot/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= $baseurl ?>webroot/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= $baseurl ?>webroot/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= $baseurl ?>webroot/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= $baseurl ?>webroot/assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= $baseurl ?>webroot/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= $baseurl ?>webroot/assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= $baseurl ?>webroot/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= $baseurl ?>webroot/assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= $baseurl ?>webroot/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= $baseurl ?>webroot/assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <!-- <link href="css/theme.css" rel="stylesheet" media="all"> -->
    <link href="<?= $baseurl ?>webroot/assets/css/theme.css" rel="stylesheet" media="all">

       
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div>
             <!-- HEADER MOBILE-->
             <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?= $baseurl ?>webroot/assets/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?= $baseurl ?>webroot/assets/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?= $this->Url->build(['controller' => 'Dashboard', 'action' => 'index']); ?>">

                            <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= $this->Url->build(["controller"=>"Student","action"=>"index"]); ?>">
                                <i class="fas fa-table"></i>Students</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

    </div>
    
    
     <!-- Jquery JS-->
     <script src="<?= $baseurl ?>webroot/assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= $baseurl ?>webroot/assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= $baseurl ?>webroot/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= $baseurl ?>webroot/assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?= $baseurl ?>webroot/assets/vendor/wow/wow.min.js"></script>
    <script src="<?= $baseurl ?>webroot/assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?= $baseurl ?>webroot/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= $baseurl ?>webroot/assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= $baseurl ?>webroot/assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= $baseurl ?>webroot/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= $baseurl ?>webroot/assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= $baseurl ?>webroot/assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= $baseurl ?>webroot/assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= $baseurl ?>webroot/assets/js/main.js"></script>
</body>
</html>
