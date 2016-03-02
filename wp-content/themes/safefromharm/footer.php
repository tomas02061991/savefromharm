        <footer>
            <div class="boxfooter col-md-4">
                <h2 class="footertext">FOLLOW US!</h2>
                <div class="linkfooter col-md-12">
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a>
                        <a href=""></a>
                </div>
    
            </div>
            <div class="boxfooter col-md-4">
                <h2 class="footertext">INFO</h2>
                <div class="boxfooterinfo col-md-10">
                    PLEASE CONTACT US ON THIS EMAIL SEEN BELOW FOR MORE INFORMATION AND FURTHER QUESTIONS:<br><br><i class="fa fa-envelope"></i>  info@safefromharm.com
                </div>
            </div>
            <div class="boxfooter col-md-4">
                <h2 class="footertext">NEWSLETTER</h2>
                <div class="boxfooterinfo col-md-10">
                    SIGN UP FOR OUR NEWSLETTER!<br>
                    BE THE FIRST TO HEAR ABOUT NEWS AND OUR EVENTS.
                    <form action="msg_sent.php">
                        <div class="input-group col-md-12">
                            <input class="form-control" type="email" name="email" placeholder="Enter your email" required><br>
                            <input class="btn" type="submit" value="SUBMIT">
                        </div>
                    </form>
                </div>
                <a href=""></a>
            </div>
             <?php 
                echo do_shortcode("[metaslider id=199]"); 
            ?>  
        </footer>  
        <script>

            $("#menu-primary").removeClass("menu");
            $("#menu-primary").addClass("nav navbar-nav");
            function update() {
                var x = document.getElementById("range").value;
                document.getElementById("value").innerHTML = x+"$";
            }
            update();

            var success = <?php echo $_REQUEST["success"] ?>;
            if(success){
                if(success == 1){
                    $("#donateAlert").html("Thank you for your donation! An email will be send for confirmation.");
                    $("#donateAlert").css("display", "block");
                    $('#donateModal').modal('show');
                } else{
                    $("#donateAlert").html("Something went wrong. You cannot donate at this time.");
                    $("#donateAlert").css("display", "block");
                    $('#donateModal').modal('show');
                }
            }
        </script>      
	</body>
</html>