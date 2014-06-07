<!DOCTYPE html>
<html lang="en" ng-app="nix-track-demo">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food Tracker</title>

    <link href="<?= Yii::app()->baseUrl ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- custom styles -->
    <link href="<?= Yii::app()->baseUrl ?>/css/site.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <base href="<?= Yii::app()->baseUrl ?>/"/>
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Food</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-field-wrap">
                            <input type="text" placeholder="2 slices cheese pizza" class="form-control input-lg">
                            <i class="fa fa-microphone"></i>
                        </div>
                    </div>
                    <div class="col-md-12 center">
                        <button type="button" class="btn btn-lg btn-success" data-dismiss="modal" aria-hidden="true">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="btn-add">
                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></a>
            </div>


            <!--
            <a href="#" class="barcode"><img src="assets/images/barcode.png"></a>
            <div class="search-wrap">
              <form class="search-form" role="form">
                <div class="form-group">
                  <input type="text" placeholder="Search Foods" class="form-control">
                  <span class="glyphicon glyphicon-search"></span>
                </div>
              </form>
            </div>
            -->
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<div class="container">
    <div class="content-wrap">
        <div class="content" ng-view>

        </div>
        <div><?= $content ?></div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<script src="<?= Yii::app()->baseUrl ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= Yii::app()->baseUrl ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= Yii::app()->baseUrl ?>/bower_components/angular/angular.min.js"></script>
<script src="<?= Yii::app()->baseUrl ?>/bower_components/angular-route/angular-route.min.js"></script>
<script src="<?= Yii::app()->baseUrl ?>/bower_components/angular-resource/angular-resource.min.js"></script>
<script src="<?= Yii::app()->baseUrl ?>/js/app.js"></script>
</body>
</html>
