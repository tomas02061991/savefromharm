<?php get_header();
    $pages = get_pages();
?>		
<main>
			<div class="page" id="home">
                <h1>SAFE FROM HARM</h1>
                <p>Help us save the last remaining tigers in the wild!</p>
            </div>
            <div class="smallpage" id="ourmission">
                <?php  
                    foreach ( $pages as $page ) {
                        if($page->post_name == "our-mission"){
                            echo $page->post_content;
                        }
                    }
                 ?>
            </div>
			<div class="page" id="overview">
                <h2>Overview</h2>
                <div>
                    <div>
                        tekst
                    </div>
                    <div>
                        graf illustreret
                    </div>
                </div>
            </div>
			<div class="page" id="themap">
                <h2>
                    TIGER POPULATION ESTIMATES
                </h2>
            </div>
            <div class="smallpage" id="thetigerfamily">
                <h2 class="h2anothercolor">
                    THE TIGER FAMILY
                </h2>
            </div>
            <div class="page" id="whytheymatter">
                <h2>
                    WHY THEY MATTER
                </h2>
            </div>
            <div class="smallpage" id="supporttigers">
                <h2 class="h2anothercolor">
                    SUPPORT THE TIGERS
                </h2>
                <div class="donatebutton">DONATE NOW!
                </div>
            </div>
            <div class="page" id="howwho">
                <h2>
                    HOW & WHO
                </h2>
            </div>
            <div class="smallpage" id="competition">
                <h2 class="h2anothercolor">
                    EASTPAK COMPETITION
                </h2>
            </div>
            <div class="page" id="instagram">
                <h2>
                    INSTAGRAM
                </h2>
            </div>
		</main>
<?php get_footer();
?>