<?php
/*
 * script:  pingtest.php
 * author:  Sebastian R. Usami <sebastianusami@gmail.com>
 * license: []
 * description:
 *   Performs server side ping test
 */

$title = "Online Ping Test"; // website's title

if (isset($_GET['host'])) {
    $host = $_GET['host'];
    $return = array(
            'status' => test($host)
    ); // gawd this is UGLY :D

    // leave for color coding by line
    echo "<html><body bgcolor='lightgray'><font size=2>";
    echo "Starting Ping...<br>";
    for($x=0; $x < count($return['status']); $x++)
    {
        echo $return['status'][$x];
        echo "<br>";
    }
    echo "Ping Complete with status: " . "OK?";
    // ---------------------------

exit();
}

/*
 * What the function does
 *
 * @param (name) about this param
 * @return (name)
 */
function test($host) {
     exec(sprintf('ping -c 6 -W 5 %s', escapeshellarg($host)), $res, $rval);
     return $res;
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Network Diag Tools</title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
  </head>
  <body>



    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="nslookup.php">NSLookup</a>
                    </li>
                    <li>
                        <a href="ping.php">Ping</a>
                    </li>
                    <li>
                        <a href="whois.php">Whois</a>
                    </li>
                    <li>
                        <a href="dig.php">DIG</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


     <div class="container">
     <div class="row">



        <div class='ttools col-sm-12 col-md-8'>
        <h2>Web-Based Remote Ping Tool</h2>


        <form action="#"  method="get" id="testform" target="testresult">

            <legend>Remote Ping Service</legend>

            <div class="form-group">
                <label  for="host">Host to ping</label>
                <input class="form-control"  type="text" id="host" name="host" value="" title=""  />
                    
                <div class="help-block">
                    <p>Enter an IP address or a fully qualified hostname</p>
                </div>
            </div>
            <button  type="submit" class="btn btn-primary" id="ping_submit" name="ping_submit" title="">Start remote ping »</button>

                
        </form>

        <iframe id="testresult" name="testresult" width="765"  frameborder="1" height="350" src=""></iframe>


        </div></div></div>








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
