        <footer>
            <div class="col-xs-12">
                <div class="boxfooter col-xs-12 col-md-4">
                    <h2 class="footertext">FOLLOW US!</h2>
                    <div class="linkfooter">
                        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.facebook.com/groups/172642493116555/"><i class="fa fa-facebook-official"></i></a>
                            <a href=""></a>
                    </div>
        
                </div>
                <div class="boxfooter col-xs-12 col-md-4">
                    <h2 class="footertext">INFO</h2>
                    <div class="boxfooterinfo">
                        PLEASE CONTACT US ON THIS EMAIL SEEN BELOW FOR MORE INFORMATION AND FURTHER QUESTIONS:<br><br><i class="fa fa-envelope"></i>  info@safefromharm.com
                    </div>
                </div>
                <div class="boxfooter col-xs-12 col-md-4">
                    <h2 class="footertext">NEWSLETTER</h2>
                    <div class="boxfooterinfo">
                        SIGN UP FOR OUR NEWSLETTER!<br>
                        BE THE FIRST TO HEAR ABOUT NEWS AND OUR EVENTS.
                        <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
    #mc_embed_signup{ clear:left; font:14px Helvetica,Arial,sans-serif; }
    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//cryolab.us12.list-manage.com/subscribe/post?u=4e542984851b1a875e7ea8023&amp;id=d9bfa24197" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4e542984851b1a875e7ea8023_d9bfa24197" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
                    </div>
                    <a href=""></a>
                </div> 
            </div>
        </footer>  
        <script>

            $("#menu-primary").removeClass("menu");
            $("#menu-primary").addClass("nav navbar-nav");
            function update() {
                var x = document.getElementById("range").value;
                document.getElementById("value").innerHTML = x+"$";
            }
            update();

            var success = <?php if(isset($_REQUEST["success"])){echo $_REQUEST["success"];}else{echo "-1";} ?>;
            if(success){
                if(success == 1){
                    $("#donateAlert").html("Thank you for your donation! An email will be send for confirmation.");
                    $("#donateAlert").css("display", "block");
                    $('#donateModal').modal('show');
                } else if(success == 0){
                    $("#donateAlert").html("Something went wrong. You cannot donate at this time.");
                    $("#donateAlert").css("display", "block");
                    $('#donateModal').modal('show');
                }
            }
        </script>      
	</body>
</html>