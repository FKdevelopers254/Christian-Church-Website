 <?php


$d=intval($_GET['d']);
error_reporting(0);


?>
    <section class="ftco-section" id="singlesermon-section">
      <div class="container">
        <div class="row">
                <?php
$sql = "SELECT * FROM sermons WHERE id =:d";
$query = $DB -> prepare($sql);
$query -> bindParam(':d', $d, PDO::PARAM_STR);

$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
            
            
            
          <div class="col-lg-8 ftco-animate">
               <h2 class="mb-3">Preaching by Pastor:<?php echo htmlentities($result->host);?></h2>
            <h4 class="mb-3"><?php echo htmlentities($result->title);?></h4>
             
            
              <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

  <!-- Your embedded video player code -->
  <div class="fb-video" data-href="<?php echo htmlentities($result->vlink);?>" data-width="500" data-show-text="false">
    <div class="fb-xfbml-parse-ignore">
      <blockquote cite="<?php echo htmlentities($result->vlink);?>">
        <a href="<?php echo htmlentities($result->vlink);?>"><?php echo htmlentities($result->title);?></a>
        <p>How to share with just friends.</p>
        Posted by <a href="https://www.facebook.com/facebook/">Facebook</a> on <?php echo  (date('D.MjS',strtotime($result->updationdate)));?>
      </blockquote>
         <h5>  <?php echo  (date('D.MjS',strtotime($result->updationdate)));?> </h5>
    </div>
  </div>
            
           <p><?php echo htmlentities($result->sermon);?></p>
           
        
          
           
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="" class="tag-cloud-link">Sermons</a>
                <a href="" class="tag-cloud-link">Sundays</a>
                 
                <a href="" class="tag-cloud-link">Pastor</a>
                <a href="" class="tag-cloud-link">Read</a>
               
                  
              </div>
            </div>


           

          </div>
            
            
            <?php }} ?>

            
            
            
            
            
            
          
        </div>
      </div>
    </section> 