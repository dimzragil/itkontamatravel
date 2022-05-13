<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Umroh, Haji & Wisata Islami</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?= base_url('assets2/'); ?>images/icon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets2/'); ?>//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="<?= base_url('assets2/'); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets2/'); ?>css/fonts.css">
    <link rel="stylesheet" href="<?= base_url('assets2/'); ?>css/style.css">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>
    <div class="ie-panel"><a href="<?= base_url('assets2/'); ?>http://windows.microsoft.com/en-US/internet-explorer/"><img src="<?= base_url('assets2/'); ?>images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="page">
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
                        <span></span>
                    </div>
                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand--><a class="brand" href="index.html"><img src="<?= base_url('assets2/'); ?>images/logo.png" alt="" width="225" height="18" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-aside-right rd-navbar-collapse">
                                <ul class="rd-navbar-corporate-contacts">
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                                            <div class="unit-body">
                                                <p>09:00 — 17:00</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                            <div class="unit-body"><a class="link-phone" href="tel:#">+62 812-8111-7900</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nav-item dropdown no-arrow">
                                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                                <img class="img-profile rounded-circle" width="50" length="50" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                                            </a>
                                            <!-- Dropdown - User Information -->
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                <a class="dropdown-item" href="#">
                                                    <i class=" mr-2 text-gray-400"></i>
                                                    Profile
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="mr-2 text-gray-400"></i>
                                                    Settings
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
                                                    <i class="mr-2 text-gray-400"></i>
                                                    Logout
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                                    <li><a class="icon fa fa-envelope" href="mailto:info@itkontama.travel.id" target="_blank" rel="noopener noreferrer"></a></li>
                                    <li><a class="icon fa fa-facebook" href="https://www.facebook.com/itkontamatravel.id" target="_blank" rel="noopener noreferrer"></a></li>
                                    <li><a class="icon fa fa-instagram" href="https://www.instagram.com/itkontamatravel.id/" target="_blank" rel="noopener noreferrer"></a></li>
                                </ul>
                                <!-- RD Navbar Nav-->
                                <ul class=" rd-navbar-nav">
                                    <?php
                                    $role_id = $this->session->userdata('role_id');
                                    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                                        FROM `user_menu` JOIN `user_access_menu` 
                                            ON `user_menu` . `id` = `user_access_menu` . `menu_id`
                                        WHERE `user_access_menu` . `role_id` = $role_id
                                        ORDER BY `user_access_menu` . `menu_id` ASC
                                    ";
                                    $menu = $this->db->query($queryMenu)->result_array();
                                    ?>
                                    <?php foreach ($menu as $m) : ?>
                                        <div class="rd-nav-item">

                                        </div>

                                        <?php
                                        $menuId = $m['id'];
                                        $querySubMenu = "SELECT *
                                        FROM `user_sub_menu` JOIN `user_menu` 
                                            ON `user_sub_menu` . `menu_id` = `user_menu` . `id`
                                        WHERE `user_sub_menu`. `menu_id` = $menuId
                                        AND `user_sub_menu`. `is_active` = 1
                                        ";
                                        $subMenu = $this->db->query($querySubMenu)->result_array();
                                        ?>

                                        <?php foreach ($subMenu as $sm) : ?>
                                            <?php if ($sm['title']) : ?>
                                                <li class="rd-nav-item">
                                                <?php else : ?>
                                                <li class="rd-nav-item">
                                                <?php endif; ?>
                                                <a class="rd-nav-link" href="<?= base_url($sm['url']); ?>">
                                                    <span><?= $sm['title']; ?></span></a>
                                                </li>
                                            <?php endforeach; ?>

                                            <!-- Divider -->
                                            <hr class="rd-nav-item">

                                        <?php endforeach; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>