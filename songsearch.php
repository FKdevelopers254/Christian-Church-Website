<!-- (A) SEARCH FORM -->
<form method="post" action="index?o=So">
 
  <input type="text" name="search" required/>
  <input type="submit" value="Search"/>
</form>

<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST['search'])) {
  // (B1) SEARCH FOR USERS
  require "songcon.php";

  // (B2) DISPLAY RESULTS
  if (count($results) > 0) {
    foreach ($results as $r) {
      printf("<div class='col-md-4'>
        <div class='sermon-wrap ftco-animate'>
          <div class='img d-flex align-items-center justify-content-center' style='background-image: url(images/sermon-1.jpg);'>

          </div>
          <div class='text pt-3 text-center'>
            <h2 class='mb-0'><a href='index?o=sso&d=%s'>%s</a></h2>
            <div class='meta'>
              <p class='mb-0'>
                <span>%s</span>
              </p>
            </div>
          </div>
        </div>
      </div>",$r['id'],$r['title'],$r['updationdate']);
        echo count($results);
    }
  } else { echo "No results found"; }
}
?>




































