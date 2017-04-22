<?php 
$title = 'Welcome page';
include("header.php");
?>
    <div class="container">
        <h1 class="text-primary">Page principale</h1>
        <div class="jumbotron">
            <table class="table table-hover">
                <thead>
                    <tr class="info">
                        <th>Questionaires</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>questionaire - 1</td>
                        <td>20/02/2017</td>
                        <td>Dr. Maha</td>
                    </tr>
                    <tr>
                        <td>questionaire - 2</td>
                        <td>22/03/2017</td>
                        <td>Dr. Joe</td>
                    </tr>
                    <tr>
                        <td>questionaire - 3</td>
                        <td>30/01/2017</td>
                        <td>Dr. Kevin</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <p>test</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <p>text</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <p>text</p>
                </div>
            </div>
        </div>
        <div class="well well-lg">
            <dl>
                <dt>QUESTIONAIRE - 1</dt>
                <dd>
                    <pre><p class="text-info">question about health</p><kbd>ctrl + 1</kbd></pre>
                </dd>
                <dt>QUESTIONAIRE - 2</dt>
                <dd>
                    <pre><p class="text-info">question about football</p><kbd>ctrl + 2</kbd></pre>
                </dd>
                <dd>
                    <pre><p class="text-info">question about football</p><kbd>ctrl + 2</kbd></pre>
                </dd>
            </dl>
            <div class="alert alert-info fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                    90%
                </div>
            </div>
            <ul class="pager">
                <li class="previous"><a href="#">Previous</a></li>
                <li class="next"><a href="home.php">Next</a></li>
            </ul>
        </div>
    </div>
    <?php 
    include("footer.php");
    ?>