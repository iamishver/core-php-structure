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
<div id="myModallogin" class="modal hello fadelogins in" role="dialog" style="display: none;">
    <div class="login-signup-form-2" style=""><h2>Partner - <span>Login now</span> </h2>  <div class="quit"><button type="button" class="close" data-dismiss="modal">x</button> </div>
        <form id="login" class="norlinx_form" method="post">
            <p class="status"></p>
            <div class="form-group">
                <input id="username" class="form-control form-input-fields required" placeholder="Your Email Address *" name="username" type="text">
            </div>
            <div class="form-group">
                <input id="password" placeholder="Password *" class="form-control form-input-fields required" name="password" type="password"> 
            </div>

            <div class="signup-button">
                <input class="submit_button first-btn" value="Login" name="submit" type="button">
                <div id="loading_loader_forget"></div>
            </div>
        </form>



    </div>
</div>
<div id="myModal" class="modal hello fade in" role="dialog" style="display: none; padding-left: 17px;">
    <form action="" id="partners-form" method="post" class="wpcf7-form" novalidate="novalidate">
        <div class="close_back">
            <button type="button" class="close custom_close" data-dismiss="modal">x</button>
        </div>
        <p>
            <span class="infromation_p">Funded Project?</span>
            <span class="FundedProject">
                <span class="" id="fundedproject">
                    <span class="first">
                        <input name="FundedProject" value="Yes" checked="checked" type="radio">&nbsp;<span class="wpcf7-list-item-label">Yes</span></span><span class="wpcf7-list-item"><input name="FundedProject" value="No" type="radio">&nbsp;<span class="wpcf7-list-item-label">No</span></span><span class="wpcf7-list-item last"><input name="FundedProject" value="In Process" type="radio">&nbsp;<span class="wpcf7-list-item-label">In Process</span></span></span></span><br>
            <span class="infromation_p">End User Information</span><br>
            <span class="CompanyName">
                <input name="CompanyName" value="" size="40" class="career-input" aria-invalid="false" placeholder="Company Name" type="text"></span>
            <span class="Address">
                <input name="Address" value="" size="40" class="career-input" aria-invalid="false" placeholder="Address" type="text"></span>
            <span class="City">
                <input name="City" value="" size="40" class="career-input" aria-invalid="false" placeholder="City" type="text"></span>
            <span class="State">
                <input name="State" value="" size="40" class="career-input" aria-invalid="false" placeholder="State" type="text"></span>
            <span class="PostalCode">
                <input name="PostalCode" value="" id="pcode" size="40" class="career-input" aria-invalid="false" placeholder="Postal Code" type="text"></span>
            <span class="FullName">
                <input name="FullName" value="" size="40" class="career-input" aria-invalid="false" placeholder="Contact Name (first and last)" type="text"></span>
            <span class="EmailAddress"><input name="EmailAddress" value="" size="40" class="career-input" id="eids" aria-invalid="false" placeholder="Email Address" type="email"></span>
            <span class="info-phone">
                <input name="phone" value="" id="phone" size="40" class="career-input" aria-invalid="false" placeholder="Phone" type="tel"></span>
            <span class="comments">
                <textarea name="comments" cols="40" rows="10" class="career-input" aria-invalid="false" placeholder="Comments"></textarea>
            </span>
        </p><div class="clearfix">
        </div>
        <p>
            <span class="infromation_p">Partner Information</span>
            <br>
            <span class="PartnerName"><input name="PartnerName" value="" size="40" class="career-input" aria-invalid="false" placeholder="Partner Name" type="text"></span>
            <span class="PartnerSalesRep">
                <input name="PartnerContactName" value="" size="40" class="career-input" aria-invalid="false" placeholder="Partner Contact Name (first and last)" type="text"></span>
            <span class="Phone"><input name="partnerPhone" id="pphone" value="" size="40" class="career-input" aria-invalid="false" placeholder="Phone" type="tel"></span>
            <span class="Email"><input id="pemail" name="partnerEmail" value="" size="40" class="career-input" aria-invalid="false" placeholder="Email" type="email"></span>
            <span class="AdditionalComments"><textarea name="partnerComments" cols="40" rows="10" class="career-input" aria-invalid="false" placeholder="Comments">
                </textarea></span>
            <input name="_wpcf7_captcha_challenge_captcha-118" value="220487847" type="hidden">
            <img src="<?php echo $baseURL; ?>captcha.php" border="0" alt="CAPTCHA!" id="captcha">
            <span class="captcha-118">
                <input name="captcha-118" value="" id="captcha-txt" size="4" maxlength="4" class="wpcf7-form-control wpcf7-captchar career-input" aria-invalid="false" placeholder="Enter above code here*" type="text">
            </span>
            <input value="Submit" class="apply-btn" id="subspartner" type="partner">
    </form>
</div>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/fancySelect.js"></script>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo $baseURL; ?>js/fancybox.js"></script>
<?php if($p=='partner-activity-log-page' || $p=='partner-activity-log'){?>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<?php } ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
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

<script type="text/javascript">
    var baseurl = "<?= $baseURL; ?>";
//    $ = ;
    $('.submit_button').on('click', function () {
        var sEmail = $("#username").val();
        var password = $('#password').val();
        $(".status").html("");
        if ($.trim(sEmail).length == 0) {
            $(".status").html("Please enter valid email address.");
        }
        if (validateEmail(sEmail)) {
            if (password != "") {
                $(".status").html("");
                var data = $('#login').serialize();
                $.ajax({
                    type: "POST",
                    url: baseurl + "manage.php?p=loginCheck",
                    data: {"username": $("#username").val(), "password": $("#password").val()},
                    success: function (response) {
                        if (response == 'success') {
                            location.href = baseurl + 'norlinx-marketing-material';
                        } else {
                            $(".status").html("Please enter correct password.");
                        }
                    }
                });
            }
        } else {
            $(".status").html("Please enter valid email address.");
        }
        return false;
    });
    function validateEmail(email) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(email)) {
            return true;
        } else {
            return false;
        }
    }
    $('body').on('click', '#subspartner', function () {
        var email = $('#eids').val();
        var flag = 1;
        if ($('#eids').val() != "" && validateEmail($('#eids').val()) === false) {
            $('#eids').css('border-color', "red");
            flag = 0;
        }
        if ($("#pemail").val() != "" && validateEmail($('#pemail').val()) === false) {
            $('#pemail').css('border-color', "red");
            flag = 0;
        }
        if ($("#phone").val() != "" && validNumber($('#phone').val()) === false) {
            $('#phone').css('border-color', "red");
            flag = 0;
        }
        if ($("#pphone").val() != "" && validNumber($('#pphone').val()) === false) {
            $('#pphone').css('border-color', "red");
            flag = 0;
        }
        if ($("#pcode").val() != "" && validNumber($('#pcode').val()) === false) {
            $('#pcode').css('border-color', "red");
            flag = 0;
        }
        if ($("#captcha-txt").val() == '') {
            $('#captcha-txt').css('border-color', "red");
        }
        if (flag == 1) {
            $.ajax({
                type: "POST",
                url: baseurl + "manage.php?p=partner",
                data: $("#partners-form").serialize(),
                success: function (response) {
                    if (response == 'success') {
                        location.href = baseurl + 'norlinx-marketing-matrial';
                    }else if(response == "not match"){
                         $('#captcha-txt').css('border-color', "red");
                    } else {
                        $(".status").html("Please enter correct password.");
                    }
                }
            });
        }
        return false;
    })
    function validNumber(value) {
        var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
        if (numberRegex.test(value)) {
            return true;
        } else {
            return false;
        }
    }
</script>
<script type="text/javascript"> 
   $(document).ready(function() {
   $(".marketing_material .iframe").fancybox({
        'width': 1200, // or whatever you want
        'height': 700, // or whatever you want
        'type': 'iframe'
   });

    $(".btn-marketing").click(function() { 
        $(".fancybox-wrap").addClass("magi");
    });

   });      
</script>