<div class="site-inner" id="masthead">
    <nav class="site-navi">
        <div class="container">
            <div class="site-header-main">

                <div class="site-branding hidden-xs">
                    <h1 class="site-title"><a href="<?php echo $baseURL; ?>" rel="home"><img class="logo" alt="Norlinx" title="Norlinx" src="<?php echo $baseURL; ?>images/logo-1.png"></a></h1>
                </div>
                <!-- .site-branding -->

                <?php if ($p != 'partner-activity-log-page' && $p != 'partner-activity-log') {
    ?>
                    <div id="site-header-menu" class="site-header-menu">

                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="site-branding visible-xs">
                                    <h1 class="site-title"><a href="home" rel="home"><img class="logo" alt="Norlinx" title="Norlinx" src="<?php echo $baseURL; ?>images/logo-1.png"></a></h1>
                                </div>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="navbar-collapse collapse" id="navbar">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="fa fa-chevron-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="icon-1"><a href="<?php echo $baseURL; ?>products">Overview</a>
                                            </li>
                                            <li class="icon-2"><a href="<?php echo $baseURL; ?>gsm-powerlite">GSMpowerlite</a>
                                            </li>
                                            <li class="icon-3"><a href="<?php echo $baseURL; ?>gsm-essential">GSMessential</a>
                                            </li>
                                            <li class="icon-4"><a href="<?php echo $baseURL; ?>gsm-professional">GSMprofessional</a>
                                            </li>
                                            <li class="icon-5"><a href="<?php echo $baseURL; ?>gsm-enterprise">GSMenterprise</a>
                                            </li>
                                            <li class="icon-6"><a class="iframe hidden-xs pd_new" onclick="opens()" id="npdfs" href="<?php echo $baseURL; ?>pdf/GSM_All_Product_Comparision.pdf" data-ps2id-api="true">All Product Comparison</a><a class="visible-xs" onclick="opens()" id="npdfs" href="<?php echo $baseURL; ?>pdf/GSM_All_Product_Comparision.pdf" data-ps2id-api="true">All Product Comparison</a>
                                            </li>
                                            <a class="get-start" href="<?php echo $baseURL; ?>contact-us">Contact Us</a>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="fa fa-chevron-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="icon-1"><a href="<?php echo $baseURL; ?>services">Overview</a>
                                            </li>
                                            <li class="ser-icon-1"><a href="<?php echo $baseURL; ?>gsm-integrate">GSMintegrate</a>
                                            </li>
                                            <li class="ser-icon-2"><a href="<?php echo $baseURL; ?>dcim-university">DCIM University</a>
                                            </li>
                                            <a class="get-start" href="<?php echo $baseURL; ?>contact-us">Contact Us</a>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools<span class="fa fa-chevron-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="icon-1"><a href="<?php echo $baseURL; ?>tools">Overview</a>
                                            </li>
                                            <li class="ser-icon-1"><a href="<?php echo $baseURL; ?>gsm-formula">GSMformula</a>
                                            </li>
                                            <li class="ser-icon-2"><a href="<?php echo $baseURL; ?>gsm-dashboard">GSMdashboard</a>
                                            </li>
                                            <li class="ser-icon-4"><a href="<?php echo $baseURL; ?>gsm-mobile">GSMmobile</a>
                                            </li>
                                            <a class="get-start" href="<?php echo $baseURL; ?>contact-us">Contact Us</a>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Company<span class="fa fa-chevron-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="icon-1"><a href="<?php echo $baseURL; ?>about-us">Overview</a>
                                            </li>
                                            <li class="co-icon-1 menu-item-1126"><a href="<?php echo $baseURL; ?>leadership">Leadership Team</a>
                                            </li>
                                            <li class="co-icon-2 menu-item-1127"><a href="<?php echo $baseURL; ?>faq">FAQ</a>
                                            </li>
                                            <li class="co-icon-4 menu-item-1129"><a href="<?php echo $baseURL; ?>federal-data-center-mandate">DCOI &ndash; Federal Data Center Mandate</a>
                                            </li>
                                            <a class="get-start" href="<?php echo $baseURL; ?>contact-us">Contact Us</a>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Partners<span class="fa fa-chevron-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li id="menu-item-1345" class="menu-item-1345"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" data-ps2id-api="true">Opportunity Registration</a>
                                            </li>
                                            <?php if (!isset($_SESSION['userData']) && empty($_SESSION['userData'])) {
        ?>
                                                <li id="menu-item-1346" class="menu-item-1346"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModallogin" data-ps2id-api="true">Partner Login</a>
                                                </li>
                                            <?php
    } elseif (isset($_SESSION['userData']) && !empty($_SESSION['userData'])) {
        ?>
                                                <li id="menu-item-1347" class="menu-item-1347"><a href="<?php echo $baseURL; ?>logout">Logout</a></li><br>
                                                </li>
                                            <?php
    } ?>

                                            <a class="get-start" href="<?php echo $baseURL; ?>contact-us">Contact Us</a>
                                        </ul>
                                    </li>
                                    <li class="dropdown visible-xs "><a class="dropdown-toggle pointer_cursor" href="<?php echo $baseURL; ?>contact-us">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- .main-navigation -->
                    </div>
                <?php
} ?>
                <!-- .site-header-menu -->
            </div>
            <!-- .site-header-main -->
        </div>
    </nav>
    <?php if ($p == 'home') {
        ?>
        <header class="site-header" role="banner"> <a href="<?php echo $baseURL; ?>support" class="support-button"> Support </a>

            <div id="myCarousel" class="carousel slide">      
                <div class="item active">
                    <div class="fill slide" style="background:url(images/com.jpg)">
                        <div class="video-container" id="IshverVideo">
                            <iframe width="1280" height="640" src="" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
   
    </header>
<?php
    } ?>

</div>
<!-- .site-header -->