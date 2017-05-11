
<?php require './header.php'; require "./pages/controler/functions.php"; ?>

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#myPage"><strong>Re-</strong></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li id="home" class="active"><a href="#">Home</a></li>
            <li id="quotes"><a href="#">Quotes</a></li>
            <li id="downloads"><a href="#">Downloads</a></li>
            <li id="tutorial"><a href="#">Tutorial</a></li>
            <li id="about"><a href="#">About</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <div clas="container-fluid trans2">
      <h2 class="text-center"> About Us</h2>
        <div class="row">
          <div class="col-sm-offset-2 col-md-8">

        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

        </p>
        </div>
        </div>
     </div> 


<div class="container-fluid trans2">
<div class="text-center">
  <div class="row">
            
            <h2>OUTPUT</h2>


            <pre style="margin-top:12;">

            
              <?php 
              include './pages/model/Person.php' ;
             $tahun = 2017;

                ?>
            </pre>

            </div>
  </div>
</div>



    <div id="about" class="container-fluid trans2">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>




        


    <div clas="container-fluid">
        <div class="row">
            





        </div>
     </div>



<?php require './footer.php'?>