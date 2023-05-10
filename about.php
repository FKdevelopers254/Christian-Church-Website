
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section" id="about-section">


          <?php


                $userid = $_SESSION["iid"];
                $query = "SELECT * FROM about";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $postid = $row['id'];
                    $title = $row['title'];

                     $description = $row['description'];

                               $descone = $row['descone'];
                                    $desctwo = $row['desctwo'];
                                         $descthree = $row['descthree'];
                                              $descfour = $row['descfour'];
  $descfive = $row['descfive'];








            ?>

    	<div class="container-fluid px-0">
    		<div class="row d-md-flex text-wrapper">
					<div class="one-half img" style="background-image: url('images/about.jpg');"></div>
					<div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
						<div class="text-inner pl-md-5">
              <h3 class="heading"><?php echo $title;?></h3>
              <p><?php echo $description;?></p>
              <p><?php echo $descone;?></p>
              <ul class="my-4">
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> <?php echo $desctwo;?></li>
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> <?php echo $descthree;?></li>
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> <?php echo $descfour;?></li>
                	<li><span class="ion-ios-checkmark-circle mr-2"></span> <?php echo $descfive;?></li>
              </ul>
            </div>
					</div>
    		</div>
    	</div>

        <?php
                }
            ?>
  <a href="loginn.php" class="btn btn-primary btn-outline-primary py-2 px-4">Sermon     <span class="icon-book"></span></a>
    </section>
