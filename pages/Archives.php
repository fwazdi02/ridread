
<?php require './header.php' ?>

<nav class="navbar navbar-static-top my-navbar" data-spy="affix">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar bg-col-1"></span>
            <span class="icon-bar bg-col-1"></span>
            <span class="icon-bar bg-col-1"></span>                        
          </button>


          <a class="navbar-brand" href="#myPage"><strong>Re-</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-left">
            <li id="quotes"><a href="./index.php">Thought</a></li>
            <li id="tutorial"><a href="#">Tutorial</a></li>
            <li id="downloads"><a href="#">Downloads</a></li>
            <li id="uncategories"><a href="#">Uncategories</a></li>
            <li id="home" class="active"><a href="#">Archives</a></li>
          </ul>

 		  <ul class="nav navbar-nav navbar-right resp">
            <li id="srch" class="active" data-toggle="collapse" data-target="#srch-coll" ><a href="#"> <i class="glyphicon glyphicon-search"> </i></a></li>
            <li id="about"><a href="#">About</a></li>
          </ul>

          <form class="collapse navbar-right resp" id="srch-coll">		  
			    <input type="text" class="" placeholder="Search">
			</form>

        </div>

      </div>
</nav>
   

 <!-- <div class="container-fluid white">
	<div class="container" style="margin-bottom: 20px">
			
		            <p> Lorem ipsum <a href="">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	</div>
</div> -->


<!-- <div class="container-fluid">  -->
		<!-- <div class="container white">
				
		</div>
 -->

 <div class="container white" style="border-left: solid 1px #ddd;border-right: solid 1px #ddd;background-color: white;">

 			<div class="col-sm-3 resp" >        
	              
			            <a href="#" class="list-group-item">Home</a>
		             	<a href="#" class="list-group-item">Quotes</a>
		             	<a href="#" class="list-group-item">Download </a>
		             	<a href="#" class="list-group-item">Tutorial</a>
		             	<a href="#" class="list-group-item">About</a>
	             
	            </div>



 				<div class="col-sm-9" > 
					<ul class="breadcrumbx">
			            <li id="home" class="active"><a href="#"><span class=" glyphicon glyphicon-home"></span></a></li>
			            <li id="quotes"><a href="#">Quotes</a></li>
			            <li id="downloads"><a href="#">Downloads</a></li>
			            <li id="tutorial"><a href="#">Tutorial</a></li>
			            <li id="about"><a href="#">About</a></li>
			          </ul>
				</div>

             
				

				<div class="col-sm-9">

					<?php
						for ($i = 0 ; $i <2; $i++)
						{  
							include './post.php' ;
						} 
					?> 


	            </div>



	            <!-- <div class="col-sm-2">
	                <div class="list-group ">
			            <a href="#" class="list-group-item">Home</a>
		             	<a href="#" class="list-group-item">Quotes</a>
		             	<a href="#" class="list-group-item">Download </a>
		             	<a href="#" class="list-group-item">Tutorial</a>
		             	<a href="#" class="list-group-item">About</a>
	             	</div>
            	</div> -->



</div>
<!-- </div> -->


<div class="container-fluid bg-white"  style="border-top: solid 1px #ddd; border-bottom: solid 1px #ddd;">
	<div class="container" style="margin-bottom: 20px">
		<div class="col-sm-4">
			<h3 style="color: grey"> New Articels </h3>
			<hr>
			 <p class=""> Lorem ipsum <a href="">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

		</div>
		<div class="col-sm-4">
		<h3 style="color: grey"> New Comment </h3>
		<hr>
			 <p> Lorem ipsum <a href="">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

		</div>
		<div class="col-sm-4">
		<h3 style="color: grey" > New Articels </h3>
		<hr>
			  <p> Lorem ipsum <a href="">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

		</div>
							
	</div>
</div>

<div class="container-fluid bg-pat-1">
	<div class="container">

			<div class="col-sm-12 text-center" style="margin-top: 15px; margin-bottom:15px;">
				<span style="color: grey"> <h5>2017-2022 © Copyright Allright Reserved, Ridread</h5></span>
			</div>	
	</div>
</div>

 






<?php require './footer.php' ?>

 