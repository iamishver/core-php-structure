<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
<div class="inner-banner">
    <div class="container">
        <div class="banner-title">
            <div class="vertical-border"> </div> 
            <h1 class="heading"><a>Partner Activity Log Page</a></h1>
            <!--p class="desc">Simple. Innovative. Efficient.</p--> 
        </div>  
    </div> 
</div>
<?php
$query = "select var_email,var_ip_address,dt_created_date from users";
$exe = $conn->query($query);
?>

<div id="content" class="site-content">
    <div id="primary">
        <section class="product-sec"> 
            <div class="container">
                <div class="title">
                    <h1 class="heading" style="width: 51%">Protected: Partner Activity Log Page</h1>
                </div>
                <?php if (isset($_SESSION['partnerData']) && !empty($_SESSION['partnerData']) && $_SESSION['partnerData'] == '1') { ?>




                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email ID</th>
                                <th>IP Address</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Email ID</th>
                                <th>IP Address</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            if ($exe->num_rows > 0) {
                                // output data of each row
                                $n = 1;
                                while ($row = $exe->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $n; ?></td>
                                        <td><?php echo $row["var_email"]; ?></td>
                                        <td><?php echo $row["var_ip_address"]; ?></td>
                                        <td><?php echo $row["dt_created_date"]; ?></td>
                                        <td>logged in</td>
                                    </tr>
                                    <?php
                                    $n++;
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>


                        </tbody>
                    </table>
                <?php } else { ?>
                    <div class="product-desc-detail">
                        <p>This content is password protected. To view it please enter your password below:</p>
                        <div class="clearfix"></div>
                        <input type="hidden" readonly="" id="norlinxpassword" name="norlinxpassword" value="<?php echo $norlinxpassword; ?>">
                        <form id="partners-form" class="norlinx_form" method="post">
                            <span class="infromation_p"></span>
                            <span class="PartnerName">
                                <input name="password" value="" size="40" class="career-input" placeholder="Password" id="password_val" type="password" style="width: 50%" required="required">
                            </span>
                            <button type="button" name="Submit" value="Submit" class="apply-btn" onclick="partnerlog()">Submit</button>
                        </form>

                    </div>
                <?php } ?>
            </div> 
        </section>
    </div>
</div>

<script type="text/javascript">
    
    function partnerlog() {
        var password_val = $('#password_val').val();
        var norlinxpassword = $('#norlinxpassword').val();
        if (password_val == '') {
            alert('Please enter the password.');
            return false;
        } else if (password_val != norlinxpassword) {
            alert('Please enter the proper password.');
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: baseurl + "manage.php?p=partnerlog",
                data: $("#partners-form").serialize(),
                success: function (response) {
                    if (response == 'success') {
                        location.reload();
                    } else if (response == "not match") {
                        $('#captcha-txt').css('border-color', "red");
                    } else {
                        $(".status").html("Please enter correct password.");
                    }
                }
            });
        }

    }

</script>
