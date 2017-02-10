<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Olive</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Josefin+Slab" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <nav id="header-nav" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.html" class="pull-left">
                    <div id="logo-img" alt="Olive"></div>
                </a>

            <!-- If we want to brand our logo
            <div class="navbar-brand"> <a href="index.html"><h1>Olive</h1></a> </div> 
            -->

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
                  <span class="sr-only">Toogle Navigation</span>
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
                </button>
            </div>

            <div id="collapsable-nav" class="collapse navbar-collapse">
              <ul id="nav-list" class="nav navbar-nav navbar-right">
                <li>
                    <a href="cloud_hosting.html"><span class="glyphicon glyphicon-cloud"></span><br class="hidden-xs">  Picual</a>
                </li>
                <li>
                    <a href="premium_hosting.html"><span class="glyphicon glyphicon-glass"></span><br class="hidden-xs">  Mission</a>
                </li>
                <li>
                    <a href="vps.html"><span class="glyphicon glyphicon-hdd"></span><br class="hidden-xs">  Arbequina</a>
                </li>
                <li>
                    <a href="hybrid_servers.html"><span class="fa fa-server"></span><br class="hidden-xs">  Koroneiki</a>
                </li>
                <li>
                    <a href="dedicated_servers.html"><span class="fa fa-microchip"></span><br class="hidden-xs">  Kalamata</a>
                </li>
              </ul>
            </div>
      </nav>
    </header>

    <section id="main-content" class="container">
        <section class="jumbotron">
          <h1>Picual</h1>
          <h3>Cloud Hosting</h3>
          <img src="/img/picual_cloud.png" alt="Picual Cloud Hosting from £0,50 /pm" class="img-responsiveness" style="width: 100%;">
          <p>Create and host your website with just a simple click of a button, letting you focus on what matters.</p>
          <button type="submit" formaction="cloud_hosting.html" class="product-button">Buy from £0,50 /pm</button>
        </section>

        <section id="specialities" class="row">
            <section class="col-md-4 col-sm-6 col-xs-12">
                <span class="glyphicon glyphicon-thumbs-up"></span>
                <h2>99.9% Uptime Guarantee</h2>
                <p>Your website will remain up and running practically all the time, even when you have a high levels of traffic*.</p>
                <p><small><small>* Dependent of server resources and our fair use policy</small></small></p>
            </section>
            <section class="col-md-4 col-sm-6 col-xs-12">
                <i class="material-icons">code</i>
                <h2>Focus</h2>
                <p>Focus on setting up and designing your website rather installing your content management systems. We offer one-click installs for a variety of CMS including WordPress, Joomla, Drupal and MODX</p>
            </section>
            <section class="col-md-4 col-sm-6 col-xs-12">
                  <h2>System Status</h2>
                  <p><?php system("system_status 3f4a3a4a66c4a197b29603b19f69ae177344821c") ?></p>
            </section>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>