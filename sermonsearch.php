<!-- (A) SEARCH FORM -->
<form method="post" action="index?o=Se">
  
  <input type="text" name="search" required/>
  <input  type="submit" value="Search"/>
</form>

<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST['search'])) {
  // (B1) SEARCH FOR USERS
  require "cont.php";

  // (B2) DISPLAY RESULTS
  if (count($results) > 0) {
    foreach ($results as $r) {
      printf("<div class='col-md-4'>
        		<div class='sermon-wrap ftco-animate'>
    					<div class='img d-flex align-items-center justify-content-center' style='background-image: url(ad/images/%s);'>
    						<div class='text-content p-4 text-center'>
    							<span>by pastor:</span>
    							<h3>%s</h3>
    							<p class=''>
										<a href='index?o=ss&d=%s' class='btn-custom mb-2 p-2 text-center popup-vimeo'><span class='icon-play'></span> Watch</a>
										<a href='index?o=ss&d=%s' class='btn-custom p-2 text-center'><span class='icon-download'></span> Download</a>
									</p>
    						</div>
    					</div>
    					<div class='text pt-3 text-center'>
    						<h2 class='mb-0'><a href='index?o=ss&d=%s'>%s</a></h2>
    						<div class='meta'>
		  						<p class='mb-0'>
			  						<span>%s</span>
		  						</p>
		  					</div>
    					</div>
  					</div>
        	</div>",$r['photo'],$r['host'],$r['id'],$r['id'],$r['id'],$r['title'],$r['updationdate']);
    }
  } else { echo "No results found"; }
}
?>




































