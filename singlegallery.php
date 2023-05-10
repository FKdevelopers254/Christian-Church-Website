<?php


$d=intval($_GET['d']);
error_reporting(0);


?>
   <section class="ftco-section" id="singlesermon-section">
     <div class="container">
       <div class="row">
               <?php
$sql = "SELECT * FROM gallery WHERE id =:d";
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
           <h2 class="mb-3"><?php echo htmlentities($result->title);?></h2>
 
             
            <h2 class="mb-3" style="color:blue;"><?php echo  (date('D.M.jS',strtotime($result->ddate)));?></h2>
             
         
             
             
             
              
             
             
             
             
           <p>
            <img src="ad/images/<?php  echo htmlentities($result->photo);?>" alt="" class="img-fluid">
           </p>

        




           <div class="tag-widget post-tag-container mb-5 mt-5">
             <div class="tagcloud">
               <a href="" class="tag-cloud-link">Songs</a>
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
