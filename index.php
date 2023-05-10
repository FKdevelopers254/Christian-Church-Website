  <?php
    include ('config.php');

include_once ('confi.php');
error_reporting(0);?>


<!DOCTYPE html>
<html lang="en">

      <?php
    include ('head.php'); ?>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	  <?php
    include ('topnav.php'); ?>









       <?php

@$opt=$_GET['o'];
    ?>


        <?php
if($opt=="")
{
include('carousel.php');
}
      
   
   // if($opt=="")
 // {
// include('loader.php');
// }

else
{
	if($opt=="A")
	{
	include('about.php');
	}






    else if($opt=="SC")
	{
	include('sectioncounter.php');
    }
         else if($opt=="S")
	{
	include('services.php');
	}
    else if($opt=="Se")
	{
	include('sermons.php');
	}





   else if($opt=="E")
	{
	include('events.php');
	}








    else if($opt=="C")
	{
	include('causes.php');
	}








    else if($opt=="P")
	{
	include('pastors.php');
	}
  else if($opt=="So")
{
include('songs.php');
}
         else if($opt=="ss")
	{
	include('sermon.php');
	}

  else if($opt=="sso")
 {
 include('song.php');
 }

 else if($opt=="g")
 {
 include('gallery.php');
 }

 else if($opt=="sg")
 {
 include('singlegallery.php');
 }


}
?>


       <?php


     // include ('blog.php'); ?>





       <?php
  //  include ('contact.php'); ?>


       <?php
  //  include ('map.php'); ?>



       <?php
  //  include ('gallery.php'); ?>





       <?php
    include ('footer.php'); ?>


<?php
    include ('fut.php'); ?>
 <?php
   // include ('loader.php'); ?>



 <?php
    include ('scripts.php'); ?>



  </body>
</html>
