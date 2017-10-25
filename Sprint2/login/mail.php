<!-- This page displays buttons on the main login screen -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mail Blasts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!-- <link href="../css/bootstrap.css" rel="stylesheet" media="screen"> -->
    <!--<link href="../css/main.css" rel="stylesheet" media="screen"> -->
    <link href="../css/dashboard_conf/dash_boot/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/dashboard_conf/dashboard_css/sidebar.css" rel="stylesheet" media="screen"> <!--media=screen for computer screens,tablets,smartphones-->
  </head>

  <body>
  <!-- Dashboard Content -->
  <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="signed_in.php">
                        AITP Dashboard
                    </a>
                </li>
                <li>
                    <a href="signed_in.php">Account Summary</a>
                </li>
                <li>
                    <a href="event.php">Create Events</a>
                </li>
                <li>
                    <a href="mail.php">Send Email</a>
            </ul>
        </div>
        <!-- /#sidebar-wrapper --> 
  
  <!-- Page Content -->
    <div class="container">
    <div class="container-fluid">
      <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Open Dashboard</a><br><br>
    </div>
      <form class="form-signin" name="form1" method="post" action="#"> <!-- action needs to redirect to where the form is submitted -->
        <h2 class="form-signin-heading">Email</h2>
        <label>To:</label><input name="receivingEmail" id="receivingEmail" type="text" class="form-control" autofocus><br>
        <label>Subject:</label><input name="subjectLine" id="subjectLine" type="text" class="form-control"><br>
		<label>Body:</label><input name="bodyEmail" id="bodyEmail" type="text" class="form-control" placeholder="Body of Email"><br>
        <button name="sendEmail" id="sendEmail" class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
      <br><br>

        <div id="message"></div>
      </form>

    </div> <!-- /container -->

	<!-- Bootstrap core JavaScript -->
	<!-- Necessary for making the dashboard toggle -->
    <script src="../css/dashboard_conf/dash_boot/jquery/jquery.min.js"></script>
    <script src="../css/dashboard_conf/dash_boot/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>

  </body>
</html>