
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index" style="color:black;"><span class="flaticon-bible" style="color:red;"></span >AIC BARAKA</a>
            
            
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="index" class="nav-link"><span style="color:red;">Home</span></a></li>
	          <li class="nav-item"><a href="index?o=A" class="nav-link"><span style="color:red;">About</span></a></li>
	          <li class="nav-item"><a href="index?o=Se" class="nav-link"><span style="color:red;">Sermons</span></a></li>
	          <li class="nav-item"><a href="index?o=E" class="nav-link"><span style="color:red;">Events</span></a></li>
	          <li class="nav-item"><a href="index?o=C" class="nav-link"><span style="color:red;">Causes</span></a></li>
 <li class="nav-item"><a href="index?o=So" class="nav-link"><span style="color:red;">Songs</span></a></li>
	          <li class="nav-item"><a href="index?o=P" class="nav-link"><span style="color:red;">Pastor</span></a></li>
                 <li class="nav-item"><a href="index?o=g" class="nav-link"><span style="color:red;">Gallery</span></a></li>

 <li class="nav-item"><a href="login" class="nav-link"><span style="color:red;"><?php

  
if (isset($_SESSION['user_id']))
{
  echo $_SESSION['name'];
}
else
{
  echo '<a href="login" class="nav-link"><span style="color:red;">Sign In</a>';
}
  

?></span></a></li>







                   

	        </ul>
	      </div>
	    </div>
	  </nav>
