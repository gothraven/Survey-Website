<?php 

$title = 'Welcome page';
include("header.php");
?>

<!-- First Container -->
<div id="section1" class="container-fluid bg-1 text-center">
    <h3>Who Are We?</h3>
    <img src="img/man-searching.png" style="display:inline" alt="Image" width="400" height="400">
    <p>We are a survey website that helps on getting into peoples thoughts and brings that ideas back to who would like to know them</p>
</div>

<!-- Second Container -->
<div id="section2" class="container-fluid bg-2 text-center">
    <h3 class="margin"><b>How can you use this website?</b></h3>
    <div class="row">
        <div class="col-sm-4">
            <h2>As a User</h2>
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <footer>From AskMe website</footer>
            </blockquote>
        </div>
        <div class="col-sm-4">
            <img src="img/survey-paper.png" style="display:inline" alt="Image" width="400" height="400">
        </div>
        <div class="col-sm-4">
            <h2>As an Admin</h2>
            <blockquote class="blockquote-reverse">
                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <footer style="text-align: center;">From AskMe website</footer>
            </blockquote>
        </div>
    </div>
</div>
<!-- Third Container (Grid) -->
<div id="section3" class="container-fluid bg-3 text-center">
    <h2 class="margin"><b>Why you would want to become un admin?</b></h2>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <p style="text-align:centre;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <img src="img/buisnessman.png" class="img-responsive margin" style="width:80%" alt="Image">
        </div>
        <div class="col-sm-4">
            <p style="text-align:centre;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <img src="img/buisiness-checking.png" class="img-responsive margin" style="width:80%" alt="Image">
        </div>
        <div class="col-sm-4">
            <p style="text-align:centre;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <img src="img/buisnessman-prepare.png" class="img-responsive margin" style="width:80%" alt="Image">
        </div>
    </div>
</div>

<div id="section4" class="container-fluid bg-3 text-center bg-grey">
    <div>
        <div class="col-sm-12">
            <h2 style="text-align:centre;">What our customers said about us</h2>
        </div>
    </div>
    <div class="row">
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
                </div>
                <div class="item">
                    <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
                </div>
                <div class="item">
                    <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!-- Forth Container (Grid) -->
<div id="section5" class="container-fluid bg-1 text-center">
    <h2 class="margin">Want to become an admin?</h2>
    <br/>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Paris, FR</p>
            <p><span class="glyphicon glyphicon-phone"></span> +33 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
        </div>
        <div class="col-sm-5">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="More informations" rows="5"></textarea>
            <br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-info" type="submit">Send</button>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
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
