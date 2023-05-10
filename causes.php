		<section class="ftco-section ftco-causes ftco-no-pb" id="causes-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Donate Charity</span>
            <h2 class="mb-5">Causes Needs Our Help</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
				<div class="row">
                    
                       <?php
    
    
                $userid = $_SESSION["iid"];
                $query = "SELECT * FROM causes";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $postid = $row['id'];
                    
                    $title = $row['title'];
                    $description = $row['description'];
                     $target = $row['target'];
                    $goal = $row['goal'];
                    
                     $photo = $row['photo'];
                     
                     
                    
                 

                   

                   


            ?>
                    
					<div class="col-md-6 col-lg-3">
						<div class="cause-entry ftco-animate">
							<a href="#" class="img" style="background-image: url(images/cause-1.jpg);"></a>
							<div class="text p-3">
								<h3><a href="cause.html"><?php echo $title;?></a></h3>
								<div class="progress mb-4">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="40"
								  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
								    <span>40%</span>
								  	</div>
								</div>
								<p class="donate"><span class="price">$<?php echo $target;?></span> <span class="target-goal">Target</span> / <span class="price">$<?php echo $goal;?></span> <span class="target-goal">Goal</span></p>
								<p><?php echo $description;?></p>
								<p><a href="#" class="btn btn-primary">Donate Now!</a></p>
							</div>
						</div>
					</div>  <?php
                }
            ?> 
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
				</div>
				<div class="row mt-4 justify-content-end">
					<div class="col-lg-10">
						<div class="donated-intro bg-darken p-4 p-md-5">
							<h2>Donation so far <span>$</span><strong class="number" data-number="9891000">0</strong></h2>
    					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
    					<p><a href="#" class="btn btn-black px-4 py-3">Donate now!</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>



	<section class="ftco-daily-verse img" style="background-image: url(images/bg_4.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row justify-content-center align-items-center">
		    			<div class="col-md-2 ftco-animate">
		    				<div class="icon">
		    					<span class="flaticon-church"></span>
		    				</div>
		    			</div>
		    			<div class="col-md-10 daily-verse pl-md-5 ftco-animate">
		    				<span class="subheading">Jesus Christ Said:</span>
		    				<h3>"16 For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life."</h3>
		    				<h4 class="h5 mt-4 font-weight-bold"><span>Bible:</span> John 3:16 KJV</h4>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
    	</div>
    </section>
      