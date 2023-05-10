  <section class="home-slider js-fullheight owl-carousel">
     
          
          
          
           <?php
    
    
                $userid = $_SESSION["iid"];
                $query = "SELECT * FROM about";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $postid = $row['id'];
                    $title = $row['title'];
                   
                     $description = $row['description'];
                     
                    
                 

                   

                   


            ?>
    
          
          <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 text-center ftco-animate mt-5">
	          	<div class="text">
	          		<div class="subheading">
	          			<span><?php echo $title;?></span>
	          		</div>
		            <h1 class="mb-4">Following <span>Jesus</span> wherever we are</h1>
		            <p><?php echo $description;?></p>
		            <p><a href="#" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
          
          
          
           <?php
                }
            ?>   

     
    </section>
      
    