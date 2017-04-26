<!--div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
    <h1>Bootstrap Affix Example</h1>
    <h3>Fixed (sticky) navbar on scroll</h3>
    <p>Scroll this page to see how the navbar behaves with data-spy="affix".</p>
    <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels.</p>
</div-->


<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/website/">AskMe</a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#section1">Who ?</a></li>
                    <li><a href="#section2">How ?</a></li>
                    <li><a href="#section3">Admin ?</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/website/adduser.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="/website/home.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>