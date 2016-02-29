<?php get_header();
    $pages = get_pages();
    
?>		
<main>
			<div class="page" id="home">
                <?php  
                    foreach ( $pages as $page ) {
                        if($page->post_name == "home"){
                            echo $page->post_content;
                        }
                    }
                 ?>
            </div>
            <div class="page smallpage" id="ourmission">
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
            <div class="page smallpage" id="thetigerfamily">
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
            <div class="page smallpage" id="supporttigers">
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
            <div class="page smallpage" id="competition">
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
            <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donate">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">DONATE NOW!</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
		</main>
<?php get_footer();
?>