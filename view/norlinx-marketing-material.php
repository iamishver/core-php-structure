<?php

include '/../db.php';
if (empty($_SESSION['userData']) || !isset($_SESSION['userData'])) {
    header('Location:home');
}
?>
<div id="page" class="site">
    <div class="inner-banner">
        <div class="container">
            <div class="banner-title">
                <div class="vertical-border"> </div> 

                <h1 class="heading"><a> NORLINX Partner Center<span>.</span></a></h1>
                <p class="desc"> <i>Fortune favors the prepared mind. </i>- Dr. Louis Pasteur</p> 
            </div>  
        </div> 
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <div class="container"> 

            </div>
        </div>
    </div>
    <!--</header>-->
</div>

<div id="content" class="site-content">
    <div id="primary">
        <section class="marketing_material">
            <div class="container">
                <!--<h3 class="inner-heading">Lorem ipsum dolor sit amet</h3>-->

                <a href="<?php echo $baseURL; ?>logout" class="btn-marketing logouthomes">Logout</a>
                <p class="newbanhead">All marketing content is the property of NORLINX Systems, LLC. Should any customizations to the content be required, please <a class="highlight" href="<?php echo $baseURL; ?>contact-us">Contact Us</a> to discuss / receive approval in writing.</p>
                <div class="row"> 

                    <div class="col-sm-4">
                        <div class="faq-cata"> 
                            <h1> File Categories</h1>
                            <div class="faq-cata-content">
                                <ul class="cata-list"> 
                                    <li class="comman-li active">
                                        <a href="#norlinx-overview-information" data-toggle="tab"><h3>NORLINX Overview Information</h3></a>
                                    </li>
                                    <li class="comman-li">
                                        <a href="#gsm-product-data-sheets-category" data-toggle="tab"><h3>GSM Product Data Sheets</h3></a>
                                    </li>
                                    <li class="comman-li">
                                        <a href="#norlinx-services-category" data-toggle="tab"><h3>NORLINX Services</h3></a>
                                    </li>
                                    <li>
                                        <a href="#norlinx-tools-category" data-toggle="tab"><h3>NORLINX Tools</h3></a>
                                    </li>
                                    <li class="comman-li">
                                        <a href="#dcoi-federal-mandate-category" data-toggle="tab"><h3>DCOI Federal Mandate</h3></a>
                                    </li>
                                    <li class="comman-li">
                                        <a href="#videos" data-toggle="tab"><h3>Videos</h3></a>
                                    </li>  
                                </ul> 
                            </div>
                        </div>
                    </div>
                    <!-- Start new -->
                    <div class="col-sm-8">
                        <div class="tab-content">
                            <div class="tab-pane active" id="norlinx-overview-information">

                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> NORLINX Overview Brochure ( 2 pages )</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1366" href="<?php echo $baseURL; ?>pdf/NORLINX-Overview.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1366" href="<?php echo $baseURL; ?>pdf/NORLINX-Overview.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> NORLINX Capabilities Presentation ( 10 Slides )</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1367" href="<?php echo $baseURL; ?>pdf/Norlinx-Capabilities-Overview.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1367" href="<?php echo $baseURL; ?>/pdf/Norlinx-Capabilities-Overview.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> NORLINX DCIM Technology Stack ( 1 Page )</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1368" href="<?php echo $baseURL; ?>pdf/GSM-Technology-Stack.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1368" href="<?php echo $baseURL; ?>pdf/GSM-Technology-Stack.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> NORLINX FAQ ( 1 Page )</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1369" href="<?php echo $baseURL; ?>pdf/NORLINX-FAQ.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1369" href="<?php echo $baseURL; ?>pdf/NORLINX-FAQ.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> NORLINX GSM Installation Requirements ( 1 Page )</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1365" href="<?php echo $baseURL; ?>pdf/Norlinx-GSM-Installation-Requirement.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1365" href="<?php echo $baseURL; ?>pdf/Norlinx-GSM-Installation-Requirement.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 

                            </div>
                            <div class="tab-pane" id="gsm-product-data-sheets-category">

                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> GSM Product Overview Brochure (1 page)</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1392" href="<?php echo $baseURL; ?>pdf/Norlinx-GSM-Products-Overview-Brochure.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1392" href="<?php echo $baseURL; ?>pdf/Norlinx-GSM-Products-Overview-Brochure.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> GSMpowerlite</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1370" href="<?php echo $baseURL; ?>pdf/GSMpowerlite.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1370" href="<?php echo $baseURL; ?>pdf/GSMpowerlite.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> GSMessential</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1371" href="<?php echo $baseURL; ?>pdf/GSMessential.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1371" href="<?php echo $baseURL; ?>pdf/GSMessential.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> GSMprofessional</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1372" href="<?php echo $baseURL; ?>pdf/GSMprofessional.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1372" href="<?php echo $baseURL; ?>pdf/GSMprofessional.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> GSMenterprise</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1373" href="<?php echo $baseURL; ?>pdf/GSMenterprise.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1373" href="<?php echo $baseURL; ?>pdf/GSMenterprise.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> All Product Comparison</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1374" href="<?php echo $baseURL; ?>pdf/GSM-All-Product-Comparision.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1374" href="<?php echo $baseURL; ?>pdf/GSM-All-Product-Comparision.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 

                            </div>
                            <div class="tab-pane" id="norlinx-services-category">

                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> NORLINX Services Overview Brochure (1 page)</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1375" href="<?php echo $baseURL; ?>pdf/Norlinx-GSM-Services-Overview-Brochure.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1375" href="<?php echo $baseURL; ?>pdf/Norlinx-GSM-Services-Overview-Brochure.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 

                            </div>
                            <div class="tab-pane" id="norlinx-tools-category">

                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> NORLINX Tools Overview Brochure (1 page)</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1378" href="<?php echo $baseURL; ?>pdf/Norlinx-Tools-Overview.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1378" href="<?php echo $baseURL; ?>pdf/Norlinx-Tools-Overview.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 

                            </div>
                            <div class="tab-pane" id="dcoi-federal-mandate-category">

                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> NORLINX DCIM White Paper  ( 7 Pages )</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1384" href="<?php echo $baseURL; ?>pdf/Norlinx-DCIM-White-Paper-Data-Center-Optimization.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1384" href="<?php echo $baseURL; ?>pdf/Norlinx-DCIM-White-Paper-Data-Center-Optimization.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                                <div class="panel panel-default">



                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> DCOI PUE Compliance Roadmap ( 1 Page )</h2></a>
                                                <a class="btn-marketing iframe hidden-xs" onClick="opens()" id="pdfs_1385" href="<?php echo $baseURL; ?>pdf/DCOI-PUE-Compliance-Roadmaps-NORLINX.pdf" data-ps2id-api="true">Download</a>
                                                <a class="btn-marketing visible-xs" onClick="opens()" id="pdfs_1385" href="<?php echo $baseURL; ?>pdf/DCOI-PUE-Compliance-Roadmaps-NORLINX.pdf" data-ps2id-api="true">Download</a>
                                            </div>
                                        </div>
                                    </div>

                                </div> 

                            </div>
                            <div class="tab-pane" id="videos">

                                <div class="panel panel-default">

                                    <div class="col-sm-12">
                                        <div class="box_marketing">
                                            <div class="title">
                                                <a class="link_material"><h2> NORLINX Asset Management Example</h2></a>
                                                <a class="iframe videologinpage" id="pdfs_1603" href="https://www.youtube.com/embed/uRVMyL66fRk?&amp;theme=dark&amp;autohide=2" frameborder="0" "="">View</a>
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