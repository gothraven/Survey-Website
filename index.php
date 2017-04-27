<?php 
$title = 'Welcome page';
include("header.php");
?>

    <!-- First Container -->
    <div id="section1" class="container-fluid bg-1 text-center">
        <h3 class="margin">Who Are We?</h3>
        <img src="bird.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Image" width="350" height="350">
        <h3>We are a survey website that helps on getting into peoples thoughts and brings that ideas back to who would like to know them</h3>
    </div>

    <!-- Second Container -->
    <div id="section2" class="container-fluid bg-2 text-center">
        <h3 class="margin">How can you use this website?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <a href="#" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-search"></span> Search
        </a>
    </div>

    <!-- Third Container (Grid) -->
    <div id="section3" class="container-fluid bg-3 text-center">
        <h3 class="margin">Why you would want to become un admin?</h3>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
        </div>
    </div>

	<div id="section4" class="container-fluid bg-2 text-center">
        <h2 class="margin">Want to become an admin?</h2>
        <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Paris, FR</p>
      <p><span class="glyphicon glyphicon-phone"></span> +33 1515151515</p>
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
    <!-- Footer -->
    <footer class="container-fluid bg-4 text-center">
        <p>&copy; Copyrights recieved - 2016 / 2017</p>
    </footer>

    <?php 
    include("footer.php");
    ?>