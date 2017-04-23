<nav class="navbar navbar-default">
    <!--navbar-inverse-->
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/website/">AskMe</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/website/home.php">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= $pathFor['logout'] ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>