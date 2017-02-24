<div class="inner-banner">
                <div class="container">
                    <div class="banner-title">
                        <div class="vertical-border"> </div> 

                        <h1 class="heading"><a>Contact Us<span>.</span></a></h1>
                        <p class="desc">Discuss your DCIM interests. Schedule a Live Demo. Set Up a 30 Day Trial. </p> 
                    </div>  
                </div> 
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <div class="container"> 

                        <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Norlinx." href="<?php echo $baseURL; ?>" class="home"><span property="name">Norlinx</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name">Contact Us</span><meta property="position" content="2"></span>
                    </div>
                </div>
            </div>

    <div id="content" class="site-content">
        <div id="primary">
            <section class="conatct-us" id="conatct-us">
                <div class="container">
                    <div class="contact-page-details">

                        <div class="title">
                            <h1 class="heading"><?php echo $contactPageText?></h1>
                        </div>
                        <div class="contact-page">
                            <div class="padding-none row">

                                <div class="alert alert-success fade in alert-dismissable" id="IshverMsg" style="display: none;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close" style="width: 1%">×</a>
                                    <strong>Success!</strong> <?php echo $successMsg;?>
                                </div>

                                <div class="col-md-6 contact-left">
                                    <div class="contact-form">
                                        <form method="post" class="" >
                                            <p>
                                                <span class="first-name">
                                                    <input type="text" name="first-name" id="first-name" value="" size="40" class="contact-input" aria-required="true" aria-invalid="false" placeholder="First Name *" required="" onblur="if(this.value!=''){document.getElementById('first-name').style.borderColor='';}" /></span>
                                                <span class="lnames">
                                                    <input type="text" name="lnames" id="last-name" value="" size="40" class="contact-input" aria-required="true" aria-invalid="false" placeholder="Last Name *" required="" onblur="if(this.value!=''){document.getElementById('last-name').style.borderColor='';}"/></span>
                                                <span class="company-txt">
                                                    <input type="text" name="company-txt" id="company-txt" value="" size="40" class="contact-input" aria-required="true" aria-invalid="false" placeholder="Company *" required="" onblur="if(this.value!=''){document.getElementById('company-txt').style.borderColor='';}"/></span>
                                                <span class="email-txt">
                                                    <input type="email" name="email-txt" id="email-txt" value="" size="40" class="contact-input" aria-required="true" aria-invalid="false" placeholder="Email *" required="" onblur="if(this.value!=''){document.getElementById('email-txt').style.borderColor='';}"/></span>
                                                <span class="Products">
                                                    <select name="Products" id="Products" class="select-bx" aria-invalid="false">
                                                        <option value="How did you hear about us?">How did you hear about us?</option>
                                                        <option value="Trade Show">Trade Show</option>
                                                        <option value="Social Media">Social Media</option>
                                                        <option value="Web Search">Web Search</option>
                                                        <option value="Newsletter">Newsletter</option>
                                                        <option value="Referral">Referral</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </span>
                                                <span class="your-message">
                                                    <textarea name="your-message" id="your-message" cols="40" rows="10" class="contact-textarea" aria-required="true" aria-invalid="false" placeholder="Message *" onblur="if(this.value!=''){document.getElementById('your-message').style.borderColor='';}"></textarea></span>
                                                <input type="button" value="Submit" class="contact-submit" id="contact-submit" onclick="ContactValidation()"  />
                                            </p>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-md-6 contact-right">
                                    <div class="contact-right-detail">
                                        <div class="contact-map">
                                            <iframe src="<?php echo $ifrmaMap?>" width="100%" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                        <div class="coll-detail">
                                            <h3>Contact Information</h3>
                                            <div class="con-block"> <span>Address</span></p>
                                                <p><b>:</b> <?php echo $addressText?></p>
                                            </div>
                                            <div class="con-block">
                                                <span>Telephone</span></p>
                                                <p><b>:</b> <span class="blue-txt"></span> <?php echo $telephone?></p>
                                            </div>
                                            <div class="con-block">
                                                <span>Fax</span></p>
                                                <p><b>:</b> <?php echo $fax?></p>
                                            </div>
                                            <div class="con-block"><span>E-mail</span></p>
                                                <div class="email-right">
                                                    <p><b>:</b> <span class="blue-txt">Sales :</span> <a href="mailto:<?php echo $salesEmail?>"><?php echo $salesEmail?></a></p>
                                                    <p><span class="blue-txt left-space">Support : </span><a href="mailto:<?php echo $supportEmail?>"><?php echo $supportEmail?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>     

        </div>
    </div>
</div>
<!-- .site -->



<script type="text/javascript" language="javascript">

function ContactValidation(){
    var flag=true;
    
    var firstname=document.getElementById('first-name').value;
    if(firstname==''){
        document.getElementById('first-name').style.borderColor="red";
        flag=false;
    }else if(firstname.length>50){
        document.getElementById('first-name').style.borderColor="red";
        flag=false;
    }else{
        document.getElementById('first-name').style.borderColor="";
    }

    var lastname=document.getElementById('last-name').value;
    if(lastname==''){
        document.getElementById('last-name').style.borderColor="red";
        flag=false;
    }else if(lastname.length>50){
        document.getElementById('last-name').style.borderColor="red";
        flag=false;
    }else{
        document.getElementById('last-name').style.borderColor="";
    }

    var companytxt=document.getElementById('company-txt').value;
    if(companytxt==''){
        document.getElementById('company-txt').style.borderColor="red";
        flag=false;
    }else if(companytxt.length>150){
        document.getElementById('company-txt').style.borderColor="red";
        flag=false;
    }else{
        document.getElementById('company-txt').style.borderColor="";
    }
        
    var varemail=document.getElementById('email-txt').value;  
    var filter =/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(!varemail.match(filter)){
        document.getElementById('email-txt').style.borderColor="red";
        flag=false;
    }else{
        document.getElementById('email-txt').style.borderColor="";
    }

    var Products=document.getElementById('Products').value;
    if(Products=='' || Products=='How did you hear about us?'){
        document.getElementById('Products').style.borderColor="red";
        flag=false;
    }else{
        document.getElementById('Products').style.borderColor="";
    }

    var yourmessage=document.getElementById('your-message').value;
    if(yourmessage==''){
        document.getElementById('your-message').style.borderColor="red";
        flag=false;
    }else{
        document.getElementById('your-message').style.borderColor="";
    }

    if(flag==false){
        return false;   
    }else{
        return SaveData();
    }
}


</script>

<script type="text/javascript">
function SaveData(){
    var firstname=document.getElementById('first-name').value;
    var lastname=document.getElementById('last-name').value;
    var companytxt=document.getElementById('company-txt').value;
    var varemail=document.getElementById('email-txt').value;
    var Products=document.getElementById('Products').value;
    var yourmessage=document.getElementById('your-message').value;
    

    var DataString='firstname='+escape(firstname)+'&lastname='+escape(lastname)+'&companytxt='+escape(companytxt)+'&varemail='+varemail+'&Products='+escape(Products)+'&yourmessage='+escape(yourmessage);
        $.ajax({
        type: "POST",
        url: "manage.php?p=contact-action",
        data: DataString,
        success: function(resp){
            document.getElementById('first-name').value='';
            document.getElementById('last-name').value='';
            document.getElementById('company-txt').value='';
            document.getElementById('email-txt').value='';
            document.getElementById('Products').value='';
            document.getElementById('your-message').value='';
        }
    });
    return false;
    
    
}
</script>