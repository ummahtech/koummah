<!-- FOOTER
================================================== -->
<div id="wrapfooter">
    <div class="grid">
        <div class="row" id="footer">
            <!-- to top button  -->
            <p class="back-top floatright">
                <a href="#top"><span></span></a>
            </p>
            <!-- 1st column -->
            <div class="c3">
                <h2 class="title"><i class="icon-user"></i> Pelawat</h2>
                <hr class="footerstress">

                <!-- Start of CuterCounter Code -->
                <a href="http://www.cutercounter.com/" target="_blank"><img src="http://www.cutercounter.com/hit.php?id=grkqpqd&nd=6&style=132" border="0" alt="hit counter"></a>
                <!-- End of CuterCounter Code -->

                <!--<h4 style="color:white"><?php //$count_my_page = ("hitcounter.txt"); $hits = file($count_my_page); $hits[0] ++; $fp = fopen($count_my_page , "w"); fputs($fp , "$hits[0]"); fclose($fp); echo $hits[0]; ?></h4> -->
            </div>
            <!-- 2nd column -->
            <div class="c3">
                <h2 class="title"><i class="icon-twitter"></i> Follow us</h2>
                <hr class="footerstress">
                <ul class="social-links" style="margin-top:15px;">
                    <li class="facebook-link smallrightmargin">
                        <a href="https://www.facebook.com/KoummahOfficial/" class="facebook has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
                    </li>
                    <!--
                    <li class="twitter-link smallrightmargin">
                        <a href="#" class="twitter has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
                    </li>
                    <li class="google-link smallrightmargin">
                        <a href="#" class="google has-tip" title="Google +" target="_blank">Google</a>
                    </li>
                    <li class="linkedin-link smallrightmargin">
                        <a href="#" class="linkedin has-tip" title="Linkedin" target="_blank">Linkedin</a>
                    </li>
                    <li class="pinterest-link smallrightmargin">
                        <a href="#" class="pinterest has-tip" title="Pinterest" target="_blank">Pinterest</a>
                    </li>
                    -->
                </ul>
                <!--<div id="ticker" class="query">
				</div>-->
            </div>
            <!-- 3rd column -->
            <div class="c3">
                <h2 class="title"><i class="icon-envelope-alt"></i> Contact</h2>
                <hr class="footerstress">
                <dl>
                    <dt>Koperasi Pembangunan Ummah Kelantan Berhad</dt>
                    <dd><i class="icon-phone"></i>09-748 8780</dd>
                    <dd><i class="icon-envelope"></i><a href="mailto:koummahkelantan@gmail.com">koummahkelantan@gmail.com</a></dd>
                </dl>
            </div>
            <!-- 4th column -->
            <div class="c3">
                <h2 class="title"><i class="icon-link"></i> Links</h2>
                <hr class="footerstress">
                <ul>
                    <li><a href="<?php echo base_url();?>">Utama</a></li>
                    <li><a href="<?php echo base_url('welcome/mengenai_kami');?>">Info</a></li>
                    <li><a href="<?php echo base_url('welcome/definisi');?>">Kedai Panel</a></li>
                    <li><a href="<?php echo base_url('welcome/syarat_anggota');?>">Keanggotaan</a></li>
                    <li><a href="<?php echo base_url('contact');?>">Hubungi Kami</a></li>
                    <li><a href="<?php echo base_url('kerjaya');?>">Kerjaya</a></li>
                    <li><a href="https://koummah.com/ekoummah/index2.php" target="_blank">Anggota</a></li>
                    <li><a href="https://koummah.com/ekoummah" target="_blank">Staf</a></li>
                </ul>
            </div>
            <!-- end 4th column -->
        </div>
    </div>
</div>
<!-- copyright area -->
<div class="copyright">
    <div class="grid">
        <div class="row">
            <div class="c6">
                Koperasi Pembangunan Ummah Kelantan Berhad (KO-UMMAH) &copy; 2017 -
                <?php echo date('Y');?>. All rights reserved.
            </div>
        </div>
    </div>
</div>


<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="<?php echo base_url(); ?>assets/js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="<?php echo base_url(); ?>assets/js/common.js"></script>

<!-- slider -->
<script src="<?php echo base_url(); ?>assets/js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="<?php echo base_url(); ?>assets/js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="<?php echo base_url(); ?>assets/js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="<?php echo base_url(); ?>assets/js/jquery.tweet.js"></script>

<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
<script type="text/javascript">
    $(window).load(function() {
        $('#recent-projects').carouFredSel({
            responsive: true,
            width: '100%',
            auto: true,
            circular: true,
            infinite: false,
            prev: {
                button: "#car_prev",
                key: "left",
            },
            next: {
                button: "#car_next",
                key: "right",
            },
            swipe: {
                onMouse: true,
                onTouch: true
            },
            scroll: 2000,
            items: {
                visible: {
                    min: 4,
                    max: 4
                }
            }
        });
    });

</script>

<!-- Call opacity on hover images from carousel-->
<script type="text/javascript">
    $(document).ready(function() {
        $("img.imgOpa").hover(function() {
                $(this).stop().animate({
                    opacity: "0.6"
                }, 'slow');
            },
            function() {
                $(this).stop().animate({
                    opacity: "1.0"
                }, 'slow');
            });
    });

</script>

</body>

</html>
