		<section class="ftco-section bg-light" id="sermons-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Christian Church Sermons</span>
            <h7 class="mb-4">
             <?php include('sermonsearch.php');?></h7>
          
          </div>
        </div>
				<div class="row">
                    
                    
             
                    
                    
                    
                    
                    
                      <?php
    
    
                $userid = $_SESSION["iid"];
                $query = "SELECT * FROM sermons";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $postid = $row['id'];
                     $host = $row['host'];
                    $title = $row['title'];
                   
                     $sermon = $row['sermon'];
                     $photo = $row['photo'];
                     $updationdate = $row['updationdate'];
                     
                    
                 

                   

                   


            ?>
        	<div class="col-md-4">
        		<div class="sermon-wrap ftco-animate">
    					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(ad/images/<?php echo $photo;?>);">
    						<div class="text-content p-4 text-center">
    							<span>by pastor:</span>
    							<h3><?php echo $host;?></h3>
    							<p class="">
										<a href="index?o=ss&d=<?php echo $postid;?>" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
										<a href="index?o=ss&d=<?php echo $postid;?>" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a>
									</p>
    						</div>
    					</div>
    					<div class="text pt-3 text-center">
    						<h2 class="mb-0"><a href="index?o=ss&d=<?php echo $postid;?>"><?php echo $title;?></a></h2>
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



	 
      
      
