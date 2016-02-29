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
                    <form action="">
                        <label>Full Name:</label>
                        <input type="text" name="name" placeholder="John Johnson" required>
                        <label>Email:</label>
                        <input type="email" name="email" placeholder="example@example.com" required>
                        <label>Card Number:</label>
                        <input type="number" name="card" placeholder="xxxxxxxxxxxxxxxx" required>
                        <label>Expiration Date:</label>
                        <select name="exmonth" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                        <select name="exyear" required>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                        </select>
                        <label>CVC Number:</label>
                        <input type="number" name="card" placeholder="xxxx" required>
                        <input type="submit" value="Donate Now">
                    </form>
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