<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-about-us">
                        <img src="<?php echo $baseURL; ?>images/footer-logo.png">
                        <p> <?= $footerLogoText ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-rights">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 contact_new">
                    <div class="menu-footer_menu-container">
                        <ul id="menu-footer_menu" class="menu">
                            <li id="menu-item-732" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-732"><a href="contact-us"><?= $contactUs ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 copyright_new">
                    <?= $copyRight ?> </div>
                <div class="col-sm-4">
                    <div class="social-icons">
                        <h3><?= $followUsOn ?></h3>
                        <ul>
                            <li class=""><a target="_blank" href="<?= $linkedin ?>"><span class="footer-social-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
                            </li>
                            <li><a target="_blank" href="<?= $twitter ?>"><span class="footer-social-icon"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
                            </li>
                            <li class=""><a target="_blank" href="<?= $facebook ?>"><span class="footer-social-icon"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script type="text/javascript" src="<?php echo $baseURL; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/fancySelect.js"></script>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/fancybox.js"></script>
<script type="text/javascript">
    function opens() {
        $('html, body').animate({
            scrollTop: $('body').offset().top
        }, 100);
    }
</script>

<script type="text/javascript">
    $('.testinprodu').attr("style", "");
    $('.testingservices').attr("style", "");
    $('.testingtools').attr("style", "");
    $('.testingcomps').attr("style", "");
    $('.popuppartners').attr("style", "");
    $(".navbar-toggle").click(function (event) {
        $(".navbar-collapse").toggle('in');

        $(".dropdown-toggle").click(function () {
            $(this).parent().siblings(".dropdown").removeClass("show");
            $(this).parent(".dropdown").toggleClass("show");
        });
        $(".dropdown-menu a").click(function () {
            $(".dropdown").removeClass("show");
        });
    });

</script>

<script>
    $(document).ready(function () {
        /* Apply fancybox to multiple items */

        $("#npdfs.iframe").fancybox({
            'width': 1200, // or whatever you want
            'height': 500, // or whatever you want
            'type': 'iframe'
        });

    });
</script>