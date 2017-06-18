<?php
	require_once("../session.php");
	require_once("../class.user.php");

	$auth_user = new USER();	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Cocktails, Mix, Mix One, MixMe, Mix Me, Mix Me One">
        <meta name="description" content="Verliebt in ein Cocktail">
        <meta name="author" content="Nico Miebach">
        
        <title>Hey <?php print($userRow['user_name']); ?>!</title>
        
		<link rel="icon" href="/assets/favicon32.png" type="image/x-icon">
		<link rel="shortcut icon" href="/assets/favicon32.png" type="image/x-icon">
        <link rel="stylesheet" href="/assets/css/Bootstrap.css" type="text/css">
        <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    </head>
    
    <body>
		<header>
            <!-- NAVBAR -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">MixOne</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">Rezepte</a></li>
                        <li><a href="">Editor</a></li>
                        <li><a href="">Finder</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown" style="margin-right:15px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;<?php echo $userRow['user_name']; ?>&nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Profil</a></li>
                                <li><a href="/logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Abmelden</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
			</nav>
			<div class="clearfix"></div>
		</header>
			
		<main>
            <div class="content container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">ZOMBIE <small>Cocktail</small></h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="/assets/img/Cocktails/500x500/Zombie.png" alt="Zombie">
                    </div>
                    
                    <div class="col-md-6">
                        <h3>Beschreibung</h3>
                        <p>
                            Der Zombie ist ein etwas stärkerer, sehr schmackhafter Cocktail. Für Parties ist er perfekt.
                        </p>
                        <h3>Zutaten:</h3>
                        <div class="col-md-6">
                            <ul>
                                <li>6 cl Ananassaft</li>
                                <li>2 cl Cointreau</li>
                                <li>0,2l Crushed Ice</li>
                                <li>2 cl Grenadine</li>
                                <li>2 cl Maracujasirup</li>
                                <li>4 cl Orangensaft</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>4 cl Rum (dunkel)</li>
                                <li>2 cl Rum (hochprozentig)</li>
                                <li>4 cl Rum (weiss)</li>
                                <li>2 cl Zitronensaft</li>
                                <li>1Schb Orange, zum Dekorieren</li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <h3>Zubereitung</h3>
                        <ol>
                            <li>Die Zutaten Cointreau, alle Rum Sorten, Grenadine, Maracujasirup, Orangensaft, Zitronensaft, Ananassaft, mit Crushed Ice im Shaker kräftig schütteln und in ein Longdrinkglas abseihen.</li>
                            <li>Mit Kirschen und einer Orangenscheibe garnieren.</li>
                        </ol>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Weitere Cocktails</h3>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="#">
                            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="#">
                            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="#">
                            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="#"><img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt=""></a>
                    </div>
                </div>
                <hr>
			</div>
		</main>
		
        <script src="/assets/js/jQuery.js"></script>
        <script src="/assets/js/bootstrap.js"></script>
    </body>
</html>