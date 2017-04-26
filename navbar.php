<nav class="navbar navbar-default">
    <!--navbar-inverse-->
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/website/home.php">AskMe</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/website/home.php">Home</a></li>
            <li><a href="#">Profile</a></li>
        </ul>
        <?php
        if($idm->getRole() == "admin"){
        echo"<form class='navbar-form navbar-right' role='search'>
            <div class='input-group'>
                <input type='text' class='form-control' placeholder='Search' name='srch-term' id='srch-term'>
                <div class='input-group-btn'>
                    <button class='btn btn-default' type='submit'>
                        <i class='glyphicon glyphicon-search'></i>
                    </button>
                </div>
            </div>
        </form>";
        }
        ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= $pathFor['logout'] ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
    </div>
</nav>