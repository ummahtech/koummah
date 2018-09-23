<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="KOPERASI PEMBANGUNAN UMMAH KELANTAN BERHAD">
    <meta name="description" content="KO-UMMAH merupakan sebuah koperasi asas yang telah didaftarkan pada 28 FEBRUARI 2014">
    <meta property="og:title" content="KOPERASI PEMBANGUNAN UMMAH KELANTAN BERHAD">
    <meta property="og:description" content="KO-UMMAH merupakan sebuah koperasi asas yang telah didaftarkan pada 28 FEBRUARI 2014">
    <meta property="og:image" content="https://koummah.com/v2/assets/images/favicon.jpg">
    <meta property="og:url" content="https://koummah.com/v2">
    <meta property="og:type" content='website'>
    <title> Koperasi Pembangunan Ummah Kelantan Berhad (KO-UMMAH) </title>
    <!-- STYLES & JQUERY 
================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/yellow.css" />
    <!-- change skin color -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css" />
    <!-- favicon -->
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.jpg');?>" sizes="16x16" type="image/png">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome-free-5.0.13/css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome-free-5.0.13/css/fontawesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome-free-5.0.13/css/fontawesome-all.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome-free-5.0.13/css/fontawesome-all.min.css" />
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- the rest of the scripts at the bottom of the document -->

    <script src="<?php echo base_url(); ?>assets/js/jssor.slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
                $AutoPlay: 1,
                $Idle: 2000,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };

    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb052 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb052 .i .b {
            fill: #000;
            fill-opacity: 0.3;
        }

        .jssorb052 .i:hover .b {
            fill-opacity: .7;
        }

        .jssorb052 .iav .b {
            fill-opacity: 1;
        }

        .jssorb052 .i.idn {
            opacity: .3;
        }

        .jssora053 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora053 .a {
            fill: none;
            stroke: #fff;
            stroke-width: 640;
            stroke-miterlimit: 10;
        }

        .jssora053:hover {
            opacity: .8;
        }

        .jssora053.jssora053dn {
            opacity: .5;
        }

        .jssora053.jssora053ds {
            opacity: .3;
            pointer-events: none;
        }

    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112478350-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-112478350-1');
    </script>
</head>

<body>

    <!-- TOP LOGO & MENU
================================================== -->
    <div class="grid">
        <div class="row space-bot">
            <!--Logo-->
            <div class="c6">
                <a href="<?php echo base_url();?>">
                    <img src="<?php echo base_url('assets/images/logo ko ummah-01.png');?>" class="logo" alt="" style="width: 300px;">
                </a>
            </div>
            <div class="c6" style="pull-right">
                <div class="nav-2">
                    <ul>
                        <li><a href="https://koummah.com/ekoummah/index2.php"><i class="fa fa-sign-in-alt"></i> &nbsp;ANGGOTA</a>
                        <li><a href="https://koummah.com/ekoummah/index.php"><i class="fa fa-sign-in-alt"></i> &nbsp;STAF</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row space-bot">
            <!--Menu-->
            <div class="c12">
                <nav id="topNav">
                    <ul id="responsivemenu">
                        <li class="current"><a href="<?php echo base_url();?>"><i class="icon-home homeicon"></i><span class="showmobile">UTAMA</span></a></li>
                        <li><a href="#">INFO</a>
                            <ul class="nav">
                                <li class="current"><a href="<?php echo base_url('welcome/mengenai_kami');?>">Mengenai Kami</a></li>
                                <li><a href="<?php echo base_url('welcome/pentadbiran');?>">Pentadbiran</a></li>
                                <li><a href="<?php echo base_url('welcome/sijil');?>">Sijil</a></li>
                            </ul>
                        </li>
                        <li><a href="#">PRODUK</a>
                            <ul style="display: none;">
                                <li><a href="<?php echo base_url('welcome/ummah_ads');?>">Ummah Advertising</a></li>
                                <li><a href="<?php echo base_url('welcome/ummah_auto');?>">Ummah Auto Center</a></li>
                                <li><a href="<?php echo base_url('welcome/ummah_ucs');?>">Ummah Creative Studio</a></li>
                                <li><a href="<?php echo base_url('welcome/ummah_ufc');?>">Ummah Fitness Center</a></li>
                                <li><a href="<?php echo base_url('welcome/ummah_gold');?>">Ummah Gold</a></li>
                                <li><a href="<?php echo base_url('welcome/ummah_mineral');?>">Ummah Mineral Water</a></li>
                                <li><a href="<?php echo base_url('welcome/ummah_properties');?>">Ummah Properties</a></li>
                                <li><a href="<?php echo base_url('welcome/ummah_shop');?>">Ummah Shop</a></li>

                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('welcome/definisi');?>">KEDAI PANEL</a>
                        </li>
                        <li><a href="#">KEANGGOTAAN</a>
                            <ul>
                                <li><a href="<?php echo base_url('welcome/syarat_anggota');?>">Syarat &amp; Kelebihan </a></li>
                                <li><a href="<?php echo base_url('welcome/kebajikan_anggota');?>">Kebajikan Anggota</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('welcome/buletin');?>">BULETIN</a> </li>
                        <li><a href="<?php echo base_url('welcome/muatTurun');?>">MUAT TURUN</a> </li>
                        <!--<li class="last"><a href="<?php echo base_url('contact');?>">HUBUNGI KAMI</a></li>-->
                        <li class="last"><a href="#">HUBUNGI KAMI</a>
                            <ul style="display: none;">
                                <li><a href="<?php echo base_url('contact');?>">MAKLUMAT PERTANYAAN</a></li>
                                <li><a href="<?php echo base_url('kerjaya');?>">KERJAYA DI KO-UMMAH</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <style type="text/css">
        .center {
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

    </style>
