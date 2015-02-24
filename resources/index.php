<?php
$path="../";
$title = "VOD resources for healthcare professionals";
$description = "Get information and resources helpful to identifying progressive VOD, including links, video, and downloadable material.";
?>

        <?php include('../inc/head.php'); ?>

                <!--Banner-->
                <div id="banner">
                    <div class="copy">
                        <h2>Resources</h2>
                    </div>
                </div>
            </header>
            <!--Header End-->
        
            <!--Page-->
            <section class="main" role="main">

                <!--Content-->
                <article class="main">



                    <!--Tab-->
                    <section>
                        <div class="container">
                            <h2>Information and resources helpful to identifying progressive VOD</h2>
                            <div class="resource-container">
                            <a href="<?=$path?>pathophysiology/#video"><h4 class="video-icon">Watch a video about the pathophysiology of VOD and how it can lead to potentially life-threatening consequences</h4></a>
                            

                           <a href="<?=$path?>pdf/see-the-signs.pdf" target="_blank" onclick="kenshoo_conv('pdfdownload','','','','USD'); ebConversionTracker('589951');"> <h4 class="brochure-icon">Download an informative brochure on VOD</h4></a>
                            </div>
                            <br clear="all" />
                            <h2>The links below offer additional resources</h2>
                            
                            <p class="resource-link">Center for International Blood and Marrow Transplant Research<br /> 
                            <a href="http://www.cibmtr.org/pages/index.aspx" rel="external">http://www.cibmtr.org/pages/index.aspx</a></p>

                            <p class="resource-link">Be The Match Foundation<br />
                            <a href="http://bethematch.org/" rel="external">http://bethematch.org/</a></p>

                            <p class="resource-link">Blood &amp; Marrow Transplant Information Network (BMT InfoNet)<br />
                            <a href="http://bmtinfonet.org" rel="external">http://bmtinfonet.org</a></p>

                        </div>
                    </section>

                </article>

               

<?php include('../inc/footer.php'); ?>