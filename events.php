		<section class="ftco-section bg-light" id="sermons-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Events</span>
            <h2 class="mb-4">Christian Church Events</h2>
            <p>Events That occur in the Church</p>
          </div>
        </div>
			
				<div class="row">
                
                    
                       <?php
    
    
                $userid = $_SESSION["iid"];
                $query = "SELECT * FROM events";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $postid = $row['id'];
                    
                    $title = $row['title'];
                    $host = $row['host'];
                     $location = $row['location'];
                    $duration = $row['duration'];
                    $ddate = $row['ddate'];
                     $photo = $row['photo'];
                     
                     
                    
                 

                   

                   


            ?>
                   
					<div class="col-md-12 col-lg-6 col-xl-9">
        		<div class="event-wrap d-flex ftco-animate">
        			<div class="img" style="background-image: url(ad/images/<?php echo $photo;?>);"></div>
        			<div class="text p-4 d-flex align-items-center">
        				<div>
	        				<span class="time"><?php echo $duration;?> <?php echo  (date('D. MjS,Y',strtotime($ddate)));?>
                               </span>
	        				<h3><a href="#"><?php echo $title;?></a></h3>
	        				<div class="meta">
		        				<p><span class="icon-user mr-1"></span> by pastor: <a href="#">Joshua Wambua & Jeremiah Muoka</a></p>
		        				<p><span class="icon-location"></span> <?php echo $location;?></p>
		        				<p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
	        				</div>
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



 
      
      



























