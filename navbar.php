<nav class="navbar navbar-default">
    <!--navbar-inverse-->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= $pathFor['home'] ?>">AskMe</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <?php
            if($title == "Profile page"){
                echo"<li><a href='$pathFor[home]'>Home</a></li>
                <li class='active'><a href='$pathFor[profile]'>Profile</a></li>";
            }else{
                echo"<li class='active'><a href='$pathFor[home]'>Home</a></li>
                <li><a href='$pathFor[profile]'>Profile</a></li>";    
            }
            ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= $pathFor['logout'] ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
            <?php
        if($idm->getRole() == "admin" && $title == "Accueil"){
        echo"<form class='navbar-form navbar-right' role='search' id='search-form'>
            <div class='input-group'>
                <input type='text' class='form-control' placeholder='Reference Code' id='srch-term'>
                <div class='input-group-btn'>
                    <button class='btn btn-default' id='search' type='submit'>
                        <i class='glyphicon glyphicon-search'></i>
                    </button>
                </div>
            </div>
        </form>";
        }
        ?>
        </div>
    </div>

</nav>
