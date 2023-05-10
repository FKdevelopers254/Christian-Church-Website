<section class="ftco-section bg-light" id="sermons-section">
  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">Nyimbo za Sifa</span>
        <h7 class="mb-4"><?php include('songsearch.php');?></h7>
        
      </div>
    </div>
    <div class="row">








                  <?php


            $userid = $_SESSION["iid"];
            $query = "SELECT * FROM songs";
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($result)){
                $postid = $row['id'];

                $title = $row['title'];

                 $song = $row['song'];
                  $updationdate = $row['updationdate'];










        ?>
      <div class="col-md-4">
        <div class="sermon-wrap ftco-animate">
          <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sermon-1.jpg);">

          </div>
          <div class="text pt-3 text-center">
            <h2 class="mb-0"><a href="index?o=sso&d=<?php echo $postid;?>"><?php echo $title;?></a></h2>
            <div class="meta">
              <p class="mb-0">
                <span><?php echo  (date('D.M.jS',strtotime($result->updationdate)));?></span>
              </p>
            </div>
          </div>
        </div>
      </div>
              <?php
            }
        ?>



      </div>
  </div>
</section>
