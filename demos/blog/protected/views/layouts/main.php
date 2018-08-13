<!DOCTYPE html>
<html>
    <head>
        <title>MBAtrek</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/stylesheet/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/stylesheet/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/stylesheet/ace-responsive-menu.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="page-wrapper">
            <header>
                <div class="header-inner">
                    <div class="header-top">
                        <div class="container">
                            <div class="col-xs-12 col-md-3 col-lg-3 logo-wrapper">
                                <div class="logo"><a href="<?php echo Yii::app()->createUrl("site/index");?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="MBAtrek" /></a></div>
                                <div class="logo-mba"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mbatrek-logo.png" alt="MBAtrek" /></div>
                            </div>
                            <div class="col-xs-12 col-md-9 col-lg-9 navigation-wrapper">
                                <nav>
                                        <div class="menu-toggle">
                                                <h3>Menu</h3>
                                                <button type="button" id="menu-btn">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                    <ul id="demoMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                                        <li><a href="#">Home<span class="icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home.png"></span></a></li>
                                        <li><a href="#">About Us<span class="icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about.png"></span></a>
                                            <ul>
                                                <li><a href="#">introduction to MBAtrek</a></li>
                                                <li><a href="#">how are we different</a></li>
                                                <li><a href="#">founding team</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">our services<span class="icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/service.png"></span></a>
                                            <ul>
                                                <li><a href="#">students</a>
                                                    <ul>
                                                        <li><a href="#">preparing for internship</a></li>
                                                        <li><a href="#">preparing for placement</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">young professionals</a></li>
                                                <li><a href="#">institutes</a></li>
                                                <li><a href="#">companies</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Insights<span class="icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/insights.png"></span></a>
                                            <ul>
                                                <li><a href="#">blogs</a></li>
                                                <li><a href="#">daily docs</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Success Stories<span class="icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/success.png"></span></a></li>
                                        <li><a href="#">FAQs<span class="icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/faq.png"></span></a></li>
                                        <li><a href="#">Contact Us<span class="icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/contact.png"></span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="container">
                            <div class="header-bottom-inner">
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="#" class="ytube">youtube</a></li>
                                        <li><a href="#" class="in">linkedin</a></li>
                                        <li><a href="#" class="fbook">facebook</a></li>
                                        <li><a href="#" class="twitter">twitter</a></li>
                                        <li><a href="#" class="quora">q</a></li>
                                    </ul>
                                </div>
                                <div class="login-cart">
                                    <div class="login">
                                        <a href="#">login<span class="icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login.png"></span></a>
                                    </div>
                                    <div class="cart">
                                        <a href="#" id="cart-link">cart<span class="icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cart.png"></span></a>
                                        <div class="cart-wrapper">
                                            <div class="cart-heading">
                                                <div class="cart-title">items</div>
                                                <div class="cart-price">Price (in $)</div>
                                            </div>
                                            <div class="items-inner">
                                                    <span class="item-title">
                                                    <label class="container-cart">Resume Builder
                                                            <input type="checkbox" checked="checked">
                                                            <span class="checkmark"></span>
                                                    </label>
                                                    </span>
                                                    <span class="item-price">500</span>                                                
                                            </div>
                                            <div class="items-inner">
                                                    <span class="item-title">
                                                    <label class="container-cart">Linkedin Digonostic
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                    </label>
                                                    </span>
                                                    <span class="item-price">600</span>                                                
                                            </div>
                                            <div class="items-inner">
                                                    <span class="item-title">
                                                    <label class="container-cart">Interview Prepration
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                    </label>
                                                    </span>
                                                    <span class="item-price">700</span>                                                
                                            </div>
                                            <div class="total">
                                                <span class="total-title">Total</span>
                                                <span class="total-price">1800</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </header>
            <main>
                <?php echo $content;?>
            </main>
            <footer>
                <div class="container">
                    <div class="footer-wrap">
                            <div class="footer-menu1">
                                    <ul>
                                        <li><a href="#">Copyright Notice</a></li>
                                        <li><a href="#">Privacy Statement</a></li>
                                        <li><a href="#">Disclaimer</a></li>
                                    </ul>
                                </div>
                                <div class="footer-logo-wrapper">
                                    <span class="footer-logo">
                                            <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="MBAtrek" /></a>
                                    </span>
                                    <span class="copyright">© Copyright 2016 MBAtrek TM.  All rights reserved</span>
                                </div>
                                <div class="footer-menu2">
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Talk to Career Advisor</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                    </div>
                </div>                
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="script/ace-responsive-menu.js" type="text/javascript"></script>
        <script src="script/scripts" type="text/javascript"></script>  
    </body>
</html> 