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
                <?php  
                    foreach ( $pages as $page ) {
                        if($page->post_name == "overview"){
                            echo $page->post_content;
                        }
                    }
                 ?>
            </div>
			<div class="page" id="themap">
                <?php  
                    foreach ( $pages as $page ) {
                        if($page->post_name == "the-map"){
                            echo $page->post_content;
                        }
                    }
                 ?>
            </div>
            <div class="smallpage" id="thetigerfamily">
               <?php  
                    foreach ( $pages as $page ) {
                        if($page->post_name == "the-tiger-family"){
                            echo $page->post_content;
                        }
                    }
                 ?> 
            </div>
            <div class="page" id="whytheymatter">
                <?php  
                    foreach ( $pages as $page ) {
                        if($page->post_name == "they-matter"){
                            echo $page->post_content;
                        }
                    }
                 ?>
            </div>
            <div class="smallpage" id="supporttigers">
                <?php  
                    foreach ( $pages as $page ) {
                        if($page->post_name == "support-tigers"){
                            echo $page->post_content;
                        }
                    }
                 ?>
            </div>
            <div class="page" id="howwho">
                <?php  
                    foreach ( $pages as $page ) {
                        if($page->post_name == "how-who"){
                            echo $page->post_content;
                        }
                    }
                 ?>
            </div>
            <div class="smallpage" id="competition">
                <?php  
                    foreach ( $pages as $page ) {
                        if($page->post_name == "competition"){
                            echo $page->post_content;
                        }
                    }
                 ?>
            </div>
            <div class="page" id="instagram">
                <?php  
                    foreach ( $pages as $page ) {
                        if($page->post_name == "instagram"){
                            echo $page->post_content;
                        }
                    }
                 ?>
            </div>
		</main>
<?php get_footer();
?>